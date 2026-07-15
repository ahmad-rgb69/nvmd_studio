<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // ═══════════════════════════════════════════════
    //  CLIENT ROUTES
    // ═══════════════════════════════════════════════

    /**
     * Display the client's order history dashboard.
     */
    public function index()
    {
        $orders = auth()->user()->orders()->latest()->get();
        return view('dashboard', compact('orders'));
    }

    /**
     * Show the booking creation form.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a new booking order.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'description'    => ['required', 'string'],
            'raw_video_link' => ['required', 'url', 'max:255'],
            'deadline'       => ['required', 'date', 'after_or_equal:today'],
        ], [
            'title.required'          => 'Judul project wajib diisi.',
            'title.max'               => 'Judul project tidak boleh lebih dari 255 karakter.',
            'description.required'    => 'Deskripsi atau brief wajib diisi.',
            'raw_video_link.required' => 'Link mentahan video wajib diisi.',
            'raw_video_link.url'      => 'Link mentahan video harus berupa URL yang valid (misal: https://drive.google.com/...).',
            'raw_video_link.max'      => 'Link mentahan video tidak boleh lebih dari 255 karakter.',
            'deadline.required'       => 'Tanggal deadline wajib diisi.',
            'deadline.date'           => 'Format tanggal deadline tidak valid.',
            'deadline.after_or_equal' => 'Tanggal deadline tidak boleh sebelum hari ini.',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status']  = 'pending';

        Order::create($validated);

        return redirect()->route('dashboard')->with('success', 'Booking Project berhasil dibuat!');
    }

    /**
     * Show the edit form for a client's own pending order.
     */
    public function edit(Order $order)
    {
        $this->authorizeOwner($order);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update a client's own order (only when still pending).
     */
    public function update(Request $request, Order $order)
    {
        $this->authorizeOwner($order);

        if ($order->status !== 'pending') {
            return redirect()->route('dashboard')
                ->with('error', 'Pesanan tidak dapat diubah karena status sudah berpindah ke: ' . strtoupper($order->status));
        }

        $validated = $request->validate([
            'title'          => ['required', 'string', 'max:255'],
            'description'    => ['required', 'string'],
            'raw_video_link' => ['required', 'url', 'max:255'],
            'deadline'       => ['required', 'date', 'after_or_equal:today'],
        ], [
            'title.required'          => 'Judul project wajib diisi.',
            'description.required'    => 'Deskripsi atau brief wajib diisi.',
            'raw_video_link.required' => 'Link mentahan video wajib diisi.',
            'raw_video_link.url'      => 'Link mentahan video harus berupa URL yang valid.',
            'deadline.required'       => 'Tanggal deadline wajib diisi.',
            'deadline.after_or_equal' => 'Tanggal deadline tidak boleh sebelum hari ini.',
        ]);

        $order->update($validated);

        return redirect()->route('dashboard')->with('success', 'Pesanan berhasil diperbarui!');
    }

    /**
     * Cancel (soft-delete) a client's own pending order.
     */
    public function destroy(Order $order)
    {
        $this->authorizeOwner($order);

        if ($order->status !== 'pending') {
            return redirect()->route('dashboard')
                ->with('error', 'Pesanan tidak bisa dibatalkan. Status sudah berpindah ke: ' . strtoupper($order->status));
        }

        $title = $order->title;
        $order->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Pesanan "' . $title . '" berhasil dibatalkan.');
    }

    // ═══════════════════════════════════════════════
    //  ADMIN ROUTES  (protected by 'admin' middleware)
    // ═══════════════════════════════════════════════

    /**
     * Show all orders for the admin panel, sorted by nearest deadline.
     */
    public function adminIndex()
    {
        $orders = Order::with('user')->orderBy('deadline', 'asc')->get();
        return view('admin.dashboard', compact('orders'));
    }

    /**
     * Update the status and (optionally) the final video link of an order.
     */
    public function updateStatus(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status'           => ['required', 'in:pending,on progress,completed'],
            'final_video_link' => ['nullable', 'required_if:status,completed', 'url', 'max:255'],
        ], [
            'status.required'              => 'Status wajib dipilih.',
            'status.in'                    => 'Status tidak valid.',
            'final_video_link.required_if' => 'Link hasil video wajib diisi jika status diubah menjadi Completed.',
            'final_video_link.url'         => 'Link hasil video harus berupa URL yang valid.',
            'final_video_link.max'         => 'Link hasil video tidak boleh lebih dari 255 karakter.',
        ]);

        $order->update([
            'status'           => $validated['status'],
            'final_video_link' => $validated['status'] === 'completed'
                ? ($validated['final_video_link'] ?? null)
                : null,
        ]);

        return redirect()->back()
            ->with('success', 'Status pesanan #' . $order->id . ' berhasil diperbarui!');
    }

    // ═══════════════════════════════════════════════
    //  PRIVATE HELPERS
    // ═══════════════════════════════════════════════

    /**
     * Abort with 403 if the authenticated user does not own the order.
     */
    private function authorizeOwner(Order $order): void
    {
        if (auth()->id() !== $order->user_id) {
            abort(403, 'Anda tidak memiliki akses ke pesanan ini.');
        }
    }
}
