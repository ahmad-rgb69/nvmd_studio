<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Client Dashboard — nevermind.</title>

        <!-- Panggil CSS Pusat -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-slate-50 text-nvmd-black font-body min-h-screen overflow-x-hidden">

        <!-- MANGGIL HEADER YANG UDAH DIPISAH -->
        @include('profile.partials.header')

        <!-- BINGKAI MAJALAH -->
        <div class="max-w-[1400px] mx-auto border-x-2 border-nvmd-line bg-nvmd-bg min-h-[calc(100vh-4rem)]">
            
            <!-- HEADER SECTION -->
            <div class="border-b-2 border-nvmd-line p-8 bg-slate-50 flex flex-col md:flex-row md:items-center justify-between gap-4 font-tech">
                <div>
                    <div class="flex items-center text-xs text-nvmd-red mb-2">
                        <span>LOG_004</span>
                        <span>-//-</span>
                        <span>CLIENT_DASHBOARD</span>
                        <span>*</span>
                    </div>
                    <h1 class="text-4xl font-bold uppercase tracking-tighter text-nvmd-black leading-none">
                        RIWAYAT PESANAN
                    </h1>
                    <p class="text-sm text-nvmd-muted mt-2">// Kelola dan pantau status pesanan video Anda secara real-time.</p>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('orders.create') }}" class="inline-block py-3 px-6 bg-nvmd-black text-white font-tech font-bold text-xs text-center uppercase border-2 border-nvmd-line nvmd-btn-interactive-black">
                        [ + BOOKING PROJECT BARU ]
                    </a>
                </div>
            </div>

            <!-- NOTIFICATIONS & ERRORS -->
            <div class="px-8 pt-8">
                <!-- Success Notification -->
                @if (session('success'))
                    <div class="p-4 bg-emerald-50 border-2 border-emerald-500 text-emerald-800 font-tech text-xs uppercase tracking-wider mb-6 flex items-start space-x-3">
                        <span class="font-bold">[ SUCCESS ]</span>
                        <div>
                            <p class="font-bold">{{ session('success') }}</p>
                            <p class="text-[10px] lowercase text-emerald-700 mt-1">// order_record_updated</p>
                        </div>
                    </div>
                @endif

                <!-- Error Notification -->
                @if (session('error'))
                    <div class="p-4 bg-rose-50 border-2 border-rose-500 text-rose-800 font-tech text-xs uppercase tracking-wider mb-6 flex items-start space-x-3">
                        <span class="font-bold">[ ERROR ]</span>
                        <div>
                            <p class="font-bold">{{ session('error') }}</p>
                            <p class="text-[10px] lowercase text-rose-700 mt-1">// order_operation_failed</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- TABLE CONTENT -->
            <div class="p-8">
                @if($orders->isEmpty())
                    <div class="text-center py-20 border-2 border-dashed border-nvmd-line bg-slate-50 font-tech">
                        <span class="text-4xl">📁</span>
                        <h3 class="text-lg font-bold text-nvmd-black uppercase mt-4">// BELUM_ADA_PESANAN</h3>
                        <p class="text-nvmd-muted text-sm mt-2">
                            Anda belum pernah memesan jasa editing video sebelumnya.
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('orders.create') }}" class="inline-block py-3 px-6 bg-nvmd-red text-white font-tech font-bold text-xs text-center uppercase border-2 border-nvmd-line nvmd-btn-interactive-black">
                                BOOKING SEKARANG ->
                            </a>
                        </div>
                    </div>
                @else
                    <div class="overflow-x-auto border-2 border-nvmd-line bg-white shadow-[6px_6px_0px_0px_rgba(15,23,42,1)]">
                        <table class="min-w-full divide-y-2 divide-nvmd-line font-tech text-xs text-left">
                            <thead class="bg-slate-50 uppercase font-bold tracking-wider">
                                <tr class="divide-x-2 divide-nvmd-line">
                                    <th scope="col" class="px-6 py-4">Detail Project</th>
                                    <th scope="col" class="px-6 py-4">Deadline</th>
                                    <th scope="col" class="px-6 py-4 text-center">Status</th>
                                    <th scope="col" class="px-6 py-4 text-center">Hasil Video</th>
                                    <th scope="col" class="px-6 py-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y-2 divide-nvmd-line bg-white font-body">
                                @foreach($orders as $order)
                                    <tr class="hover:bg-slate-50/50 transition duration-150 divide-x-2 divide-nvmd-line">
                                        <!-- Project Title & Brief -->
                                        <td class="px-6 py-5">
                                            <div class="flex flex-col max-w-sm">
                                                <span class="text-sm font-bold text-nvmd-black uppercase">{{ $order->title }}</span>
                                                <span class="text-xs text-nvmd-muted mt-2 line-clamp-2 leading-relaxed" title="{{ $order->description }}">
                                                    {{ $order->description }}
                                                </span>
                                            </div>
                                        </td>

                                        <!-- Deadline -->
                                        <td class="px-6 py-5 whitespace-nowrap font-tech">
                                            <div class="flex items-center text-xs text-nvmd-black font-bold">
                                                <svg class="w-3.5 h-3.5 mr-1.5 text-nvmd-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ \Carbon\Carbon::parse($order->deadline)->translatedFormat('d M Y') }}
                                            </div>
                                        </td>

                                        <!-- Status Badge -->
                                        <td class="px-6 py-5 whitespace-nowrap text-center font-tech">
                                            @if($order->status === 'pending')
                                                <span class="inline-block bg-amber-100 text-amber-900 border-2 border-nvmd-line px-2.5 py-1 text-[10px] font-bold uppercase">
                                                    PENDING
                                                </span>
                                            @elseif($order->status === 'on progress')
                                                <span class="inline-block bg-blue-100 text-blue-900 border-2 border-nvmd-line px-2.5 py-1 text-[10px] font-bold uppercase">
                                                    ON PROGRESS
                                                </span>
                                            @elseif($order->status === 'completed')
                                                <span class="inline-block bg-emerald-100 text-emerald-900 border-2 border-nvmd-line px-2.5 py-1 text-[10px] font-bold uppercase">
                                                    COMPLETED
                                                </span>
                                            @endif
                                        </td>

                                        <!-- Final Video Result -->
                                        <td class="px-6 py-5 whitespace-nowrap text-center font-tech">
                                            @if($order->status === 'completed' && $order->final_video_link)
                                                <a href="{{ $order->final_video_link }}" target="_blank" class="inline-block bg-emerald-500 text-white px-3 py-1 font-tech text-[10px] font-bold uppercase border-2 border-nvmd-line nvmd-btn-interactive-black">
                                                    UNDUH HASIL ->
                                                </a>
                                            @else
                                                <span class="text-nvmd-muted select-none italic text-[10px]">// BELUM_TERSEDIA</span>
                                            @endif
                                        </td>

                                        <!-- Actions -->
                                        <td class="px-6 py-5 whitespace-nowrap text-center font-tech">
                                            @if($order->status === 'pending')
                                                <div class="flex items-center justify-center gap-4">
                                                    <a href="{{ route('orders.edit', $order->id) }}" class="font-bold text-nvmd-black hover:text-nvmd-red uppercase tracking-wider text-[11px]">
                                                        [ EDIT ]
                                                    </a>
                                                    
                                                    <form method="POST" action="{{ route('orders.destroy', $order->id) }}" onsubmit="return confirm('Yakin ingin membatalkan orderan ini?')" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="bg-nvmd-red text-white px-3 py-1 font-bold uppercase border-2 border-nvmd-line nvmd-btn-interactive-black text-[10px]">
                                                            BATALKAN
                                                        </button>
                                                    </form>
                                                </div>
                                            @else
                                                <span class="text-[10px] text-nvmd-muted leading-tight tracking-wider select-none block">
                                                    // PROSES_PRODUKSI<br>(LOCKED)
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </div>
    </body>
</html>