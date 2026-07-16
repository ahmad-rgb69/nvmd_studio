<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Edit Booking Project — nevermind.</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/png" href="{{ asset('mini.png') }}">
    </head>
    <body class="antialiased bg-slate-50 text-nvmd-black font-body min-h-screen overflow-x-hidden">

        @include('profile.partials.header')

        <div class="max-w-[1400px] mx-auto border-x-2 border-nvmd-line bg-nvmd-bg min-h-[calc(100vh-4rem)]">
            
            <!-- HEADER SECTION -->
            <div class="border-b-2 border-nvmd-line p-8 bg-slate-50 flex flex-col md:flex-row md:items-center justify-between gap-4 font-tech">
                <div>
                    <div class="flex items-center text-xs text-nvmd-red mb-2">
                        <span>LOG_006</span>
                        <span>-//-</span>
                        <span>EDIT_ORDER</span>
                        <span>*</span>
                    </div>
                    <h1 class="text-4xl font-bold uppercase tracking-tighter text-nvmd-black leading-none">
                        EDIT BOOKING PROJECT
                    </h1>
                    <p class="text-sm text-nvmd-muted mt-2">// Ubah informasi detail project video Anda.</p>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-xs font-bold text-nvmd-black hover:text-nvmd-red uppercase tracking-wider">
                        <- KEMBALI KE RIWAYAT
                    </a>
                </div>
            </div>

            <!-- NOTIFICATIONS & LOCKED WARNINGS -->
            <div class="px-8 pt-8 font-tech">
                @if (session('error'))
                    <div class="p-4 bg-rose-50 border-2 border-rose-500 text-rose-800 text-xs uppercase tracking-wider mb-6 flex items-start space-x-3">
                        <span class="font-bold">[ ERROR ]</span>
                        <div>
                            <p class="font-bold">{{ session('error') }}</p>
                            <p class="text-[10px] lowercase text-rose-700 mt-1">// update_denied_by_system</p>
                        </div>
                    </div>
                @endif

                @if($order->status !== 'pending')
                    <div class="p-4 bg-rose-50 border-2 border-rose-500 text-rose-800 text-xs uppercase tracking-wider mb-6 flex items-start space-x-3">
                        <span class="font-bold">[ LOCKED_BY_SYSTEM ]</span>
                        <div>
                            <p class="font-bold">PROYEK INI SEDANG DIPRODUKSI ATAU SUDAH SELESAI.</p>
                            <p class="text-[10px] lowercase text-rose-700 mt-1">// status_pesanan: {{ $order->status }} — data_tidak_dapat_diubah</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- FORM EDIT -->
            <div class="max-w-2xl mx-auto p-8 my-8 border-2 border-nvmd-line bg-white shadow-[8px_8px_0px_0px_rgba(15,23,42,1)] font-tech">
                
                <div class="flex items-center justify-between border-b-2 border-nvmd-line pb-4 mb-6">
                    <h2 class="text-lg font-bold uppercase tracking-wide">// EDIT_DETAIL_PROJECT</h2>
                    <span class="inline-block bg-slate-50 border-2 border-nvmd-line px-2 py-1 text-[10px] font-bold uppercase text-nvmd-black">
                        STATUS: {{ strtoupper($order->status) }}
                    </span>
                </div>

                <form method="POST" action="{{ route('orders.update', $order->id) }}" class="space-y-6">
                    @csrf
                    @method('PATCH')

                    @php
                        $isLocked = $order->status !== 'pending';
                        $inputClass = $isLocked 
                            ? 'w-full bg-slate-100 opacity-60 cursor-not-allowed border-2 border-nvmd-line py-3 px-4 text-xs tracking-wide select-none focus:outline-none focus:ring-0'
                            : 'w-full bg-white border-2 border-nvmd-line py-3 px-4 text-xs tracking-wide focus:outline-none focus:ring-0 focus:border-nvmd-red placeholder-nvmd-muted/60';
                    @endphp

                    <!-- Judul Project -->
                    <div>
                        <label for="title" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 01 // JUDUL_PROJECT ]</label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            value="{{ old('title', $order->title) }}" 
                            required 
                            {{ $isLocked ? 'readonly' : 'autofocus' }} 
                            placeholder="Contoh: Video Tiktok Review Sepatu"
                            class="{{ $inputClass }}"
                        />
                        <x-input-error :messages="$errors->get('title')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Nama atau tema project video yang akan dibuat.</p>
                        @if($isLocked)
                            <p class="text-[10px] text-rose-500 font-bold mt-1.5 uppercase">// DATA DIKUNCI SISTEM KARENA STATUS PROYEK TELAH BERPINDAH KE: {{ strtoupper($order->status) }}</p>
                        @endif
                    </div>

                    <!-- Deskripsi / Brief -->
                    <div>
                        <label for="description" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 02 // BRIEF_&_DESKRIPSI ]</label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="6" 
                            required 
                            {{ $isLocked ? 'readonly' : '' }}
                            placeholder="Jelaskan secara detail instruksi editing..."
                            class="{{ $inputClass }} leading-relaxed"
                        >{{ old('description', $order->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Referensi visual, gaya pemotongan, audio, dll.</p>
                        @if($isLocked)
                            <p class="text-[10px] text-rose-500 font-bold mt-1.5 uppercase">// DATA DIKUNCI SISTEM KARENA STATUS PROYEK TELAH BERPINDAH KE: {{ strtoupper($order->status) }}</p>
                        @endif
                    </div>

                    <!-- Link Mentahan Video -->
                    <div>
                        <label for="raw_video_link" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 03 // LINK_MENTAHAN_FOOTAGE ]</label>
                        <input 
                            type="url" 
                            id="raw_video_link" 
                            name="raw_video_link" 
                            value="{{ old('raw_video_link', $order->raw_video_link) }}" 
                            required 
                            {{ $isLocked ? 'readonly' : '' }}
                            placeholder="https://drive.google.com/drive/folders/..."
                            class="{{ $inputClass }}"
                        />
                        <x-input-error :messages="$errors->get('raw_video_link')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Pastikan link Google Drive/Dropbox dibagikan dengan akses Publik.</p>
                        @if($isLocked)
                            <p class="text-[10px] text-rose-500 font-bold mt-1.5 uppercase">// DATA DIKUNCI SISTEM KARENA STATUS PROYEK TELAH BERPINDAH KE: {{ strtoupper($order->status) }}</p>
                        @endif
                    </div>

                    <!-- Tanggal Deadline -->
                    <div>
                        <label for="deadline" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 04 // TANGGAL_DEADLINE ]</label>
                        <input 
                            type="date" 
                            id="deadline" 
                            name="deadline" 
                            value="{{ old('deadline', $order->deadline) }}" 
                            required
                            {{ $isLocked ? 'readonly' : '' }}
                            class="{{ $inputClass }}"
                        />
                        <x-input-error :messages="$errors->get('deadline')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Batas waktu pengerjaan file video jadi.</p>
                        @if($isLocked)
                            <p class="text-[10px] text-rose-500 font-bold mt-1.5 uppercase">// DATA DIKUNCI SISTEM KARENA STATUS PROYEK TELAH BERPINDAH KE: {{ strtoupper($order->status) }}</p>
                        @endif
                    </div>

                    <!-- Actions -->
                    <div class="pt-4 border-t border-nvmd-line">
                        @if(!$isLocked)
                            <button type="submit" class="w-full py-4 bg-nvmd-black text-white font-tech font-bold text-xs uppercase border-2 border-nvmd-line nvmd-btn-interactive-black">
                                SIMPAN PERUBAHAN ->
                            </button>
                        @else
                            <button type="button" disabled class="w-full py-4 bg-slate-200 text-nvmd-muted/65 font-tech font-bold text-xs uppercase border-2 border-nvmd-line cursor-not-allowed select-none">
                                // PROYEK_TERKUNCI_UNTUK_DIEDIT
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>