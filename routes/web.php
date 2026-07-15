<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// ─── Public ──────────────────────────────────────────────
Route::get('/', function () {
    return view('welcome');
});

// ─── Authenticated Client Routes ─────────────────────────
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard (order history)
    Route::get('/dashboard', [OrderController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Booking / Order CRUD
    Route::get('/orders/create',        [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders',              [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}/edit',  [OrderController::class, 'edit'])->name('orders.edit');
    Route::patch('/orders/{order}',     [OrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{order}',    [OrderController::class, 'destroy'])->name('orders.destroy');
});

// ─── Admin-only Routes ────────────────────────────────────
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard',          [OrderController::class, 'adminIndex'])->name('dashboard');
    Route::patch('/orders/{order}',   [OrderController::class, 'updateStatus'])->name('orders.update');
});

require __DIR__.'/auth.php';
