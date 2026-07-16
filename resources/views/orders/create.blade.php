<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Booking Project Baru — nevermind.</title>

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
                        <span>LOG_005</span>
                        <span>-//-</span>
                        <span>CREATE_NEW_ORDER</span>
                        <span>*</span>
                    </div>
                    <h1 class="text-4xl font-bold uppercase tracking-tighter text-nvmd-black leading-none">
                        BOOKING PROJECT BARU
                    </h1>
                    <p class="text-sm text-nvmd-muted mt-2">// Kirimkan brief instruksi & link footage mentahan video Anda.</p>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center text-xs font-bold text-nvmd-black hover:text-nvmd-red uppercase tracking-wider">
                        <- KEMBALI KE RIWAYAT
                    </a>
                </div>
            </div>

            <!-- NOTIFICATIONS & SUCCESS ALERTS -->
            <div class="px-8 pt-8">
                @if (session('success'))
                    <div class="p-4 bg-emerald-50 border-2 border-emerald-500 text-emerald-800 font-tech text-xs uppercase tracking-wider mb-6 flex items-start space-x-3">
                        <span class="font-bold">[ SUCCESS ]</span>
                        <div>
                            <p class="font-bold">{{ session('success') }}</p>
                            <p class="text-[10px] lowercase text-emerald-700 mt-1">// order_received_in_queue</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- FORM BOOKING -->
            <div class="max-w-2xl mx-auto p-8 my-8 border-2 border-nvmd-line bg-white shadow-[8px_8px_0px_0px_rgba(15,23,42,1)] font-tech">
                
                <h2 class="text-lg font-bold uppercase border-b-2 border-nvmd-line pb-4 mb-6 tracking-wide">// DETAIL_PROJECT_&_BRIEFING</h2>

                <form method="POST" action="{{ route('orders.store') }}" class="space-y-6">
                    @csrf

                    <!-- Judul Project -->
                    <div>
                        <label for="title" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 01 // JUDUL_PROJECT ]</label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            value="{{ old('title') }}" 
                            required 
                            autofocus 
                            placeholder="Contoh: Video Tiktok Review Sepatu"
                            class="w-full bg-white border-2 border-nvmd-line py-3 px-4 text-xs tracking-wide focus:outline-none focus:ring-0 focus:border-nvmd-red placeholder-nvmd-muted/60"
                        />
                        <x-input-error :messages="$errors->get('title')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Nama atau tema project video yang akan dibuat.</p>
                    </div>

                    <!-- Deskripsi / Brief -->
                    <div>
                        <label for="description" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 02 // BRIEF_&_DESKRIPSI ]</label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="6" 
                            required 
                            placeholder="Jelaskan secara detail instruksi editing, durasi video, latar musik, gaya visual, atau bagian-bagian video yang ingin dipotong..."
                            class="w-full bg-white border-2 border-nvmd-line py-3 px-4 text-xs tracking-wide focus:outline-none focus:ring-0 focus:border-nvmd-red placeholder-nvmd-muted/60 leading-relaxed"
                        >{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Referensi visual, gaya pemotongan, audio, dll.</p>
                    </div>

                    <!-- Link Mentahan Video -->
                    <div>
                        <label for="raw_video_link" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 03 // LINK_MENTAHAN_FOOTAGE ]</label>
                        <input 
                            type="url" 
                            id="raw_video_link" 
                            name="raw_video_link" 
                            value="{{ old('raw_video_link') }}" 
                            required 
                            placeholder="https://drive.google.com/drive/folders/..."
                            class="w-full bg-white border-2 border-nvmd-line py-3 px-4 text-xs tracking-wide focus:outline-none focus:ring-0 focus:border-nvmd-red placeholder-nvmd-muted/60"
                        />
                        <x-input-error :messages="$errors->get('raw_video_link')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Pastikan link Google Drive/Dropbox dibagikan dengan akses Publik.</p>
                    </div>

                    <!-- Tanggal Deadline -->
                    <div>
                        <label for="deadline" class="block font-bold text-xs uppercase text-nvmd-black mb-2">[ 04 // TANGGAL_DEADLINE ]</label>
                        <input 
                            type="date" 
                            id="deadline" 
                            name="deadline" 
                            value="{{ old('deadline') }}" 
                            required
                            class="w-full bg-white border-2 border-nvmd-line py-3 px-4 text-xs tracking-wide focus:outline-none focus:ring-0 focus:border-nvmd-red"
                        />
                        <x-input-error :messages="$errors->get('deadline')" class="mt-2 text-xs text-nvmd-red" />
                        <p class="text-[10px] text-nvmd-muted mt-1.5">// Batas waktu pengerjaan file video jadi.</p>
                    </div>

                    <!-- Button Submit -->
                    <div class="pt-4 border-t border-nvmd-line">
                        <button type="submit" class="w-full py-4 bg-nvmd-black text-white font-tech font-bold text-xs uppercase border-2 border-nvmd-line nvmd-btn-interactive-black">
                            KIRIM ORDER BOOKING ->
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>