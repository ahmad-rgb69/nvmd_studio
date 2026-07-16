<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio — Nevermind Studio</title>
        <meta name="description" content="Koleksi karya edit video terbaik dari Nevermind Studio. Lihat portofolio kami dari berbagai proyek YouTube, Reels, dan konten komersial.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /* Sembunyikan scrollbar bawaan browser pada area scroller portofolio */
            #portfolioScroller::-webkit-scrollbar {
                display: none !important;
            }
        </style>
        <link rel="icon" type="image/png" href="{{ asset('mini.png') }}">
    </head>
    <body class="antialiased bg-nvmd-bg text-nvmd-black font-body min-h-screen overflow-x-hidden">

        {{-- HEADER --}}
        @include('profile.partials.header')

        {{-- BINGKAI MAJALAH --}}
        <div class="max-w-[1400px] mx-auto border-x-2 border-nvmd-line bg-nvmd-bg">

            {{-- ══════════════════════════════════════════════════ --}}
            {{-- 1. HERO SECTION                                    --}}
            {{-- ══════════════════════════════════════════════════ --}}
            <section class="relative border-b-2 border-nvmd-line overflow-hidden">

                {{-- Label navigasi atas --}}
                <div class="border-b-2 border-nvmd-line px-6 py-3 bg-slate-50 flex justify-between items-center font-tech text-xs">
                    <span class="text-nvmd-muted uppercase tracking-widest">[ PAGE // PORT-FOLIO_STUDIO ]</span>
                    <a href="{{ Request::getBaseUrl() ?: '/' }}" class="text-nvmd-red hover:text-nvmd-black transition-colors font-bold tracking-widest">← KEMBALI_HOME</a>
                </div>

                {{-- Konten hero --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 min-h-[380px]">

                    {{-- Kolom kiri: red box Jepang --}}
                    <div class="lg:col-span-4 bg-nvmd-red p-8 flex flex-col justify-between relative overflow-hidden min-h-[380px] border-b-2 lg:border-b-0 lg:border-r-2 border-nvmd-line text-white">
                        <div class="font-tech text-xs tracking-widest opacity-90 uppercase">
                            // CLICK_TO_ENTER_GALLERY // ギャラリー
                        </div>
                        
                        <div class="my-auto font-black flex flex-col tracking-tighter leading-none select-none text-left">
                            <div class="text-7xl sm:text-8xl lg:text-[6.5rem] text-nvmd-black">ポート</div>
                            <div class="text-7xl sm:text-8xl lg:text-[6.5rem] text-white">フォリオ</div>
                            <div class="text-3xl font-tech tracking-widest text-nvmd-black/70 mt-4">[ PORT-FOLIO. ]</div>
                            <div class="text-4xl font-bold uppercase tracking-tighter text-white mt-2">Karya Kami</div>
                        </div>

                        <div class="font-tech text-[10px] flex justify-between tracking-wider opacity-90">
                            <span>[ SYSTEM: ONLINE - PORT: 3306 ]</span>
                            <span>EST. 2026 // nevermind.</span>
                        </div>
                    </div>

                    {{-- Kolom kanan: copy --}}
                    <div class="lg:col-span-8 flex flex-col justify-between p-10 sm:p-14 bg-nvmd-bg">
                        <div>
                            <div class="font-tech text-xs text-nvmd-muted mb-6 tracking-widest">
                                <span class="text-nvmd-red">LOG_003</span> -//- PORTFOLIO_PAGE
                            </div>

                            <h1 class="font-black text-5xl sm:text-6xl lg:text-7xl text-nvmd-black uppercase tracking-tighter leading-none mb-6">
                                Penasaran<br>
                                <span class="inline-block bg-nvmd-red text-white border-2 border-nvmd-line px-2">sama</span>
                                <span class="text-nvmd-red"> yang</span><br>
                                udah kita<br>
                                <span class="inline-block border-b-4 border-nvmd-red">bikin?</span>
                            </h1>

                        
                        </div>

                        <div class="mt-8 flex items-end justify-between">
                            <div class="font-tech text-xs text-nvmd-muted">
                                <span>[ TOTAL KARYA: <strong class="text-nvmd-black">10</strong> ]</span>
                                <span class="ml-4">[ FORMAT: <strong class="text-nvmd-black">VIDEO_EDIT</strong> ]</span>
                            </div>
                            <div class="font-tech text-[10px] text-nvmd-muted tracking-widest animate-pulse">▶ SCROLL UNTUK JELAJAH</div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ══════════════════════════════════════════════════ --}}
            {{-- 2. LABEL SECTION                                   --}}
            {{-- ══════════════════════════════════════════════════ --}}
            <div class="border-b-2 border-nvmd-line px-6 py-4 bg-slate-50 flex justify-between items-center font-tech text-xs sticky top-16 z-40">
                <span class="text-nvmd-muted uppercase tracking-widest">[ SECTION_03 // GALERI_KARYA ]</span>
                <span class="text-nvmd-red">✦ ✦ ✦</span>
            </div>

            {{-- ══════════════════════════════════════════════════ --}}
            {{-- 3. GRID PORTOFOLIO HORIZONTAL                     --}}
            {{-- ══════════════════════════════════════════════════ --}}
            <section class="px-6 sm:px-8 pt-6 sm:pt-8 pb-10 border-b-2 border-nvmd-line" id="portfolio-grid">

                <div class="portfolio-scroll-container overflow-x-auto py-6 cursor-grab active:cursor-grabbing select-none scrollbar-hide" id="portfolioScroller" style="scrollbar-width:none; -ms-overflow-style:none;">
                    <div class="flex gap-6" style="width: max-content;" id="portfolioCards">

                        {{-- KARYA 01 --}}
                        <button type="button" id="card-0"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="0"
                            data-title="Party Kampnk Bikin DARAH TINGGI😸 -Valorant"
                            data-channel="Even 1344" data-channel-icon="EV"
                            data-views="2.4K" data-likes="185" data-comments="32" data-duration="11:45"
                            data-category="GAMING // VALORANT"
                            data-thumbnail="https://img.youtube.com/vi/Gtfb9FdIGvs/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/Gtfb9FdIGvs"
                            data-desc="Montase gameplay Valorant penuh komedi dengan rekan tim party. Editing memadukan zoom-in dinamis, subtitle lucu yang sinkron dengan reaksi suara, sound effect meme penambah tawa, dan pacing cepat untuk mempertahankan retensi.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/Gtfb9FdIGvs/maxresdefault.jpg" alt="Party Kampnk Bikin DARAH TINGGI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">11:45</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">GAMING // VALORANT</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Party Kampnk Bikin DARAH TINGGI😸 -Valorant</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">EV</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Even 1344</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 2.4K</span>&nbsp;&nbsp;
                                    <span>♥ 185</span>&nbsp;&nbsp;
                                    <span>💬 32</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 02 --}}
                        <button type="button" id="card-1"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="1"
                            data-title="HE TRIED TO GRIEF MY PLACEMENT MATCH..."
                            data-channel="renyan" data-channel-icon="RY"
                            data-views="120K" data-likes="8.5K" data-comments="342" data-duration="15:20"
                            data-category="GAMING // CS2"
                            data-thumbnail="https://img.youtube.com/vi/kHcdAGYY16Q/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/kHcdAGYY16Q"
                            data-desc="Review & gameplay menegangkan di mode competitive CS2 saat menghadapi rekan setim yang toxic. Dilengkapi track audio terpisah untuk interaksi suara, visual highlight kill yang tajam, grading cinematic map, dan subtitling modern.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/kHcdAGYY16Q/maxresdefault.jpg" alt="HE TRIED TO GRIEF MY PLACEMENT MATCH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">15:20</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">GAMING // CS2</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">HE TRIED TO GRIEF MY PLACEMENT MATCH...</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">RY</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">renyan</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 120K</span>&nbsp;&nbsp;
                                    <span>♥ 8.5K</span>&nbsp;&nbsp;
                                    <span>💬 342</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 03 --}}
                        <button type="button" id="card-2"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="2"
                            data-title="Kelas Jepang Roblox Ft. Wielino INO, Skillnya Jago Njir 💀"
                            data-channel="Nekoturnal" data-channel-icon="NK"
                            data-views="45K" data-likes="3.2K" data-comments="112" data-duration="13:10"
                            data-category="GAMING // ROBLOX"
                            data-thumbnail="https://img.youtube.com/vi/zsf5pwnsXmc/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/zsf5pwnsXmc"
                            data-desc="Keseruan bermain map Roblox bertema Jepang berkolaborasi dengan Wielino INO. Penyuntingan ceria dengan teks popup warna-warni, zoom wajah karakter 3D yang ekspresif, backsound lucu khas anime, serta transisi scene transparan.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/zsf5pwnsXmc/maxresdefault.jpg" alt="Kelas Jepang Roblox" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">13:10</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">GAMING // ROBLOX</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Kelas Jepang Roblox Ft. Wielino INO, Skillnya Jago Njir 💀</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">NK</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Nekoturnal</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 45K</span>&nbsp;&nbsp;
                                    <span>♥ 3.2K</span>&nbsp;&nbsp;
                                    <span>💬 112</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 04 --}}
                        <button type="button" id="card-3"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="3"
                            data-title="【ORIGINAL SONG】Hopes, Dreams, Wings (Honkai: Star Rail) / vally.exe"
                            data-channel="vally.exe" data-channel-icon="VL"
                            data-views="8.5K" data-likes="950" data-comments="124" data-duration="04:12"
                            data-category="MUSIC // ORIGINAL"
                            data-thumbnail="https://img.youtube.com/vi/JPujZcuLavY/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/JPujZcuLavY"
                            data-desc="Video lirik lagu orisinal bertema game Honkai: Star Rail oleh vally.exe. Menggunakan motion graphics dinamis pada tipografi lirik, transisi partikel neon mengikuti irama musik (audioreactive), serta asset game orisinal untuk visual latar belakang.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/JPujZcuLavY/maxresdefault.jpg" alt="Hopes, Dreams, Wings" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">04:12</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">MUSIC // ORIGINAL</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">【ORIGINAL SONG】Hopes, Dreams, Wings (Honkai: Star Rail) / vally.exe</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">VL</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">vally.exe</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 8.5K</span>&nbsp;&nbsp;
                                    <span>♥ 950</span>&nbsp;&nbsp;
                                    <span>💬 124</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 05 --}}
                        <button type="button" id="card-4"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="4"
                            data-title="Signal (MIKU EXPO 2024 contest entry) / vally.exe【COVER】"
                            data-channel="vally.exe" data-channel-icon="VL"
                            data-views="12K" data-likes="1.4K" data-comments="87" data-duration="03:45"
                            data-category="MUSIC // COVER"
                            data-thumbnail="https://img.youtube.com/vi/qk1un4VLYBk/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/qk1un4VLYBk"
                            data-desc="Music Video cover lagu kontes Miku Expo 2024. Menggunakan style visualizer modern dengan gelombang audio melingkar, transisi pop-art berwarna neon cerah, lirik dwi-bahasa (Jepang & Indonesia) terformat rapi.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/qk1un4VLYBk/maxresdefault.jpg" alt="Signal Cover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">03:45</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">MUSIC // COVER</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Signal (MIKU EXPO 2024 contest entry) / vally.exe【COVER】</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">VL</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">vally.exe</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 12K</span>&nbsp;&nbsp;
                                    <span>♥ 1.4K</span>&nbsp;&nbsp;
                                    <span>💬 87</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 06 --}}
                        <button type="button" id="card-5"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="5"
                            data-title="MÖBIUS - Patterns ft. @rino #MultiverseVistas"
                            data-channel="Patterns" data-channel-icon="PT"
                            data-views="15K" data-likes="1.8K" data-comments="95" data-duration="03:50"
                            data-category="MUSIC // VOCALOID"
                            data-thumbnail="https://img.youtube.com/vi/4pqavU7gqgA/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/4pqavU7gqgA"
                            data-desc="Kolaborasi lagu Vocaloid bertema sci-fi cyberpunk. Pengeditan video lirik interaktif dengan efek glitch dinamis, color grading bernuansa distopia gelap dengan aksen cyan/magenta, serta sinkronisasi lirik beat-matching super ketat.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/4pqavU7gqgA/maxresdefault.jpg" alt="MOBIUS - Patterns" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">03:50</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">MUSIC // VOCALOID</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">MÖBIUS - Patterns ft. @rino #MultiverseVistas</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">PT</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Patterns</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 15K</span>&nbsp;&nbsp;
                                    <span>♥ 1.8K</span>&nbsp;&nbsp;
                                    <span>💬 95</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 07 --}}
                        <button type="button" id="card-6"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="6"
                            data-title="VOIDS - Patterns ft. @vallyutaite"
                            data-channel="Patterns" data-channel-icon="PT"
                            data-views="18K" data-likes="2.1K" data-comments="110" data-duration="04:05"
                            data-category="MUSIC // VOCALOID"
                            data-thumbnail="https://img.youtube.com/vi/B0uSLgW9o7E/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/B0uSLgW9o7E"
                            data-desc="Proyek video lirik kolaboratif bertema emosional-melankolis. Penyuntingan menggunakan tipografi tulisan tangan (hand-lettered lyric animation), efek transisi goresan kuas, overlay partikel debu cinematic, dan visual hitam putih minimalis.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/B0uSLgW9o7E/maxresdefault.jpg" alt="VOIDS - Patterns" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">04:05</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">MUSIC // VOCALOID</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">VOIDS - Patterns ft. @vallyutaite</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">PT</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Patterns</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 18K</span>&nbsp;&nbsp;
                                    <span>♥ 2.1K</span>&nbsp;&nbsp;
                                    <span>💬 110</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 08 --}}
                        <button type="button" id="card-7"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="7"
                            data-title="LOOPING THE MEMES"
                            data-channel="SuperKek" data-channel-icon="SK"
                            data-views="85K" data-likes="6.2K" data-comments="430" data-duration="01:00"
                            data-category="MEME // LOOP"
                            data-thumbnail="https://img.youtube.com/vi/7FI4Bl0pt50/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/7FI4Bl0pt50"
                            data-desc="Video kompilasi loop meme internet terpopuler. Pengeditan presisi pada frame penyambung (seamless loops), sound design yang punchy, serta efek visual distorsi bass-boosted dan filter retro vhs.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/7FI4Bl0pt50/maxresdefault.jpg" alt="LOOPING THE MEMES" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">01:00</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">MEME // LOOP</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">LOOPING THE MEMES</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">SK</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">SuperKek</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 85K</span>&nbsp;&nbsp;
                                    <span>♥ 6.2K</span>&nbsp;&nbsp;
                                    <span>💬 430</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 09 --}}
                        <button type="button" id="card-8"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="8"
                            data-title="Moment Lucu CS Misi Mingguan😸 -CounterStrike2"
                            data-channel="Even 1344" data-channel-icon="EV"
                            data-views="3.8K" data-likes="185" data-comments="12" data-duration="08:30"
                            data-category="GAMING // CS2"
                            data-thumbnail="https://img.youtube.com/vi/q_L9mRaPd_Y/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/q_L9mRaPd_Y"
                            data-desc="Momen kocak pengerjaan misi mingguan game Counter Strike 2. Menampilkan sound effect meme kocak Indonesia, teks pop-up interaktif saat terjadi miss-play, pelacakan kamera dinamis (camera track) pada ekspresi konyol karakter.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/q_L9mRaPd_Y/maxresdefault.jpg" alt="Moment Lucu CS Misi Mingguan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">08:30</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">GAMING // CS2</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Moment Lucu CS Misi Mingguan😸 -CounterStrike2</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">EV</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Even 1344</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 3.8K</span>&nbsp;&nbsp;
                                    <span>♥ 185</span>&nbsp;&nbsp;
                                    <span>💬 12</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 10 --}}
                        <button type="button" id="card-9"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="9"
                            data-title="ryan disini ibu.. 😔"
                            data-channel="Hitzeed" data-channel-icon="HZ"
                            data-views="250K" data-likes="28K" data-comments="1.2K" data-duration="02:15"
                            data-category="MEME // GAMING"
                            data-thumbnail="https://img.youtube.com/vi/oNKpyeeZCvI/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/oNKpyeeZCvI"
                            data-desc="Video meme parodi gaming pendek yang viral di sosial media. Dilengkapi dengan voice-over dramatis, filter warna vintage pudar, pacing dramatis yang tiba-tiba dipotong sound effect lucu, dan subtitling tebal bergaya kekinian.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/oNKpyeeZCvI/maxresdefault.jpg" alt="ryan disini ibu" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">02:15</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">MEME // GAMING</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">ryan disini ibu.. 😔</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">HZ</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Hitzeed</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 250K</span>&nbsp;&nbsp;
                                    <span>♥ 28K</span>&nbsp;&nbsp;
                                    <span>💬 1.2K</span>
                                </div>
                            </div>
                        </button>

                    </div>{{-- /portfolioCards --}}
                </div>{{-- /portfolioScroller --}}

                {{-- Custom Scrollbar --}}
                <div class="mt-6 flex items-center gap-4 group/scrollwrapper" id="portfolioScrollbarWrapper">
                    <span class="font-tech text-[9px] text-nvmd-muted tracking-widest shrink-0 select-none">← SCROLL →</span>

                    {{-- Track --}}
                    <div class="relative flex-1 h-[8px] group-hover/scrollwrapper:h-[12px] border-2 border-nvmd-line bg-white overflow-hidden cursor-pointer transition-all duration-200 hover:bg-slate-50" id="scrollbarTrack">
                        {{-- Striped texture inside track --}}
                        <div id="scrollbarTrackStripes" class="absolute inset-0 opacity-10"
                            style="background-image: repeating-linear-gradient(45deg, var(--teks-utama) 0px, var(--teks-utama) 2px, transparent 2px, transparent 10px); background-position-x: 0px;"
                        ></div>

                        {{-- Thumb --}}
                        <div id="scrollbarThumb"
                            class="absolute top-0 h-full bg-nvmd-red border-x-2 border-nvmd-line
                                   transition-[background-color,transform] duration-200 cursor-grab active:cursor-grabbing
                                   group-hover/scrollwrapper:bg-nvmd-black"
                            style="left:0%; width:20%; will-change:left,width;"
                        >
                            {{-- Thumb inner texture lines --}}
                            <div class="absolute inset-y-0 left-1/2 -translate-x-1/2 flex gap-[3px] items-center">
                                <div class="w-[1.5px] h-[3px] group-hover/scrollwrapper:h-[5px] bg-white opacity-70 transition-all duration-200"></div>
                                <div class="w-[1.5px] h-[3px] group-hover/scrollwrapper:h-[5px] bg-white opacity-70 transition-all duration-200"></div>
                                <div class="w-[1.5px] h-[3px] group-hover/scrollwrapper:h-[5px] bg-white opacity-70 transition-all duration-200"></div>
                            </div>
                        </div>
                    </div>

                    <span class="font-tech text-[9px] text-nvmd-muted tracking-widest shrink-0 select-none" id="scrollbarPct">00%</span>
                </div>

                {{-- Hint label --}}
                <p class="mt-2 font-tech text-[10px] text-nvmd-muted tracking-wider select-none">
                    KLIK KARTU UNTUK DETAIL
                </p>
            </section>

            {{-- ══════════════════════════════════════════════════ --}}
            {{-- 4. DETAIL PANEL                                   --}}
            {{-- ══════════════════════════════════════════════════ --}}
            <section id="portfolio-detail"
                class="border-b-2 border-nvmd-line overflow-hidden"
                style="max-height:0; opacity:0; transition: max-height 0.5s cubic-bezier(0.4,0,0.2,1), opacity 0.35s ease;">

                {{-- Bar atas panel --}}
                <div class="border-b-2 border-nvmd-line px-6 py-3 bg-slate-50 flex justify-between items-center font-tech text-xs">
                    <span class="text-nvmd-muted uppercase tracking-widest">[ DETAIL // KARYA_TERPILIH ]</span>
                    <button id="detail-close"
                        class="flex items-center gap-2 text-nvmd-red font-bold hover:text-nvmd-black transition-colors cursor-pointer tracking-widest focus:outline-none">
                        ✕ TUTUP
                    </button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12">

                    {{-- Thumbnail besar --}}
                    <div class="lg:col-span-5 relative overflow-hidden bg-nvmd-black border-b-2 lg:border-b-0 lg:border-r-2 border-nvmd-line" style="min-height:280px;">
                        <img id="detail-thumb" src="" alt="Detail thumbnail" class="w-full h-full object-cover">
                        <div class="absolute bottom-4 left-4 font-tech text-xs bg-nvmd-black/85 text-white border border-nvmd-line px-3 py-1">
                            DURASI: <span id="detail-duration" class="font-bold"></span>
                        </div>
                    </div>

                    {{-- Detail teks --}}
                    <div class="lg:col-span-7 p-8 sm:p-12 md:p-16 flex flex-col justify-between bg-nvmd-bg">
                        <div>
                            <div id="detail-category" class="font-tech text-xs text-nvmd-red tracking-widest mb-4">
                                [ VLOG // CINEMATIC ]
                            </div>
                            <h2 id="detail-title" class="font-black text-3xl sm:text-4xl text-nvmd-black uppercase tracking-tighter leading-none mb-6">
                                JUDUL PROYEK VIDEO YANG DIEDIT
                            </h2>
                            <p id="detail-desc" class="font-body text-nvmd-muted text-sm leading-relaxed mb-6">
                                Deskripsi detail pengerjaan proyek dari tim editor. Menjelaskan aspek teknis dan estetika editing.
                            </p>

                            <div class="grid grid-cols-3 gap-4 border-y-2 border-nvmd-line py-4 my-6 font-tech text-xs">
                                <div>
                                    <div class="text-nvmd-muted text-[10px] tracking-widest mb-1">// PENONTON</div>
                                    <div id="detail-views" class="font-bold text-nvmd-black text-sm">0</div>
                                </div>
                                <div>
                                    <div class="text-nvmd-muted text-[10px] tracking-widest mb-1">// LIKE</div>
                                    <div id="detail-likes" class="font-bold text-nvmd-black text-sm">0</div>
                                </div>
                                <div>
                                    <div class="text-nvmd-muted text-[10px] tracking-widest mb-1">// KOMENTAR</div>
                                    <div id="detail-comments" class="font-bold text-nvmd-black text-sm">0</div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 mt-4">
                            <div class="flex items-center gap-3">
                                <div id="detail-channel-icon" class="w-8 h-8 rounded-full bg-nvmd-black text-white font-bold font-tech text-xs flex items-center justify-center flex-shrink-0">
                                    CS
                                </div>
                                <div>
                                    <div class="text-[9px] text-nvmd-muted uppercase font-tech tracking-wider">// CHANNEL OWNER</div>
                                    <div id="detail-channel" class="font-tech font-bold text-xs text-nvmd-black">Channel Name</div>
                                </div>
                            </div>

                            <a id="detail-yt-link" href="" target="_blank"
                               class="inline-flex items-center gap-2 px-5 py-3 bg-nvmd-black text-white border-2 border-nvmd-line hover:bg-nvmd-red transition-all duration-200 font-tech font-bold text-xs tracking-wider cursor-pointer">
                                🎬 PLAY DI YOUTUBE →
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Call To Action Bawah --}}
                <div class="border-t-2 border-nvmd-line grid grid-cols-1 md:grid-cols-12 bg-slate-50">
                    <div class="md:col-span-8 p-8 sm:p-12 border-b-2 md:border-b-0 md:border-r-2 border-nvmd-line">
                        <h3 class="font-black text-2xl text-nvmd-black uppercase tracking-tight mb-2">Ingin Hasil Seperti Ini?</h3>
                        <p class="font-body text-nvmd-muted text-sm max-w-xl">
                            Kamu juga bisa memiliki video dengan editing presisi, grading warna sinematik, dan sound design premium. Hubungi tim kami sekarang.
                        </p>
                    </div>
                    <div class="md:col-span-4 p-8 sm:p-12 flex items-center justify-start md:justify-center">
                        <div>
                            <div class="font-tech text-[10px] text-nvmd-muted mb-3 tracking-widest">// TERTARIK DENGAN KUALITAS INI?</div>
                            @auth
                                <a href="{{ route('orders.create') }}"
                                   class="inline-flex items-center gap-2 px-6 py-3 bg-nvmd-red text-white font-tech font-bold text-xs uppercase border-2 border-nvmd-line hover:bg-nvmd-black transition-all nvmd-btn-interactive-black">
                                    BOOKING PROJECT SEKARANG →
                                </a>
                            @else
                                <a href="{{ route('register') }}"
                                   class="inline-flex items-center gap-2 px-6 py-3 bg-nvmd-red text-white font-tech font-bold text-xs uppercase border-2 border-nvmd-line hover:bg-nvmd-black transition-all nvmd-btn-interactive-black">
                                    MULAI LANGKAH PERTAMA →
                                </a>
                            @endauth
                        </div>
                    </div>

                </div>
            </section>

            {{-- ══════════════════════════════════════════════════ --}}
            {{-- 5. FOOTER                                         --}}
            {{-- ══════════════════════════════════════════════════ --}}
            <footer class="bg-nvmd-black text-slate-400 py-12 px-8 font-tech text-xs">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center space-x-2 text-white">
                        <span class="text-nvmd-red text-base">✦</span>
                        <span class="font-bold uppercase tracking-widest text-white">NEVERMIND.</span>
                    </div>
                    <div class="text-[11px] text-nvmd-muted font-body">&copy; 2026 Nevermind Group.</div>
                </div>
            </footer>

        </div>{{-- /bingkai majalah --}}

        {{-- ══════════════════════════════════════════════════════ --}}
        {{-- JAVASCRIPT                                            --}}
        {{-- ══════════════════════════════════════════════════════ --}}
        <script>
        (function () {
            'use strict';

            /* ─── Refs ─── */
            const cards       = document.querySelectorAll('.portfolio-card');
            const panel       = document.getElementById('portfolio-detail');
            const closeBtn    = document.getElementById('detail-close');
            const scroller    = document.getElementById('portfolioScroller');

            const fThumb      = document.getElementById('detail-thumb');
            const fYtLink     = document.getElementById('detail-yt-link');
            const fDuration   = document.getElementById('detail-duration');
            const fCategory   = document.getElementById('detail-category');
            const fTitle      = document.getElementById('detail-title');
            const fChIcon     = document.getElementById('detail-channel-icon');
            const fChannel    = document.getElementById('detail-channel');
            const fDesc       = document.getElementById('detail-desc');
            const fViews      = document.getElementById('detail-views');
            const fLikes      = document.getElementById('detail-likes');
            const fComments   = document.getElementById('detail-comments');

            let activeIndex = null;

            /* ─── Open panel ─── */
            function openDetail(card) {
                const d = card.dataset;

                fThumb.src              = d.thumbnail;
                fThumb.alt              = d.title;
                fYtLink.href            = d.ytUrl;
                fDuration.textContent   = d.duration;
                fCategory.textContent   = '[ ' + d.category + ' ]';
                fTitle.textContent      = d.title;
                fChIcon.textContent     = d.channelIcon;
                fChannel.textContent    = d.channel;
                fDesc.textContent       = d.desc;
                fViews.textContent      = d.views;
                fLikes.textContent      = d.likes;
                fComments.textContent   = d.comments;

                panel.style.maxHeight   = '1000px';
                panel.style.opacity     = '1';

                setTimeout(() => panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 80);
            }

            /* ─── Close panel ─── */
            function closeDetail() {
                panel.style.maxHeight = '0';
                panel.style.opacity   = '0';
                activeIndex = null;
                cards.forEach(c => c.style.borderColor = '');
            }

            /* ─── Card click ─── */
            cards.forEach(card => {
                card.addEventListener('click', function () {
                    /* Jika user klik kartu yang sama → tutup */
                    const idx = parseInt(this.dataset.index);
                    if (activeIndex === idx) { closeDetail(); return; }

                    /* Reset highlight semua kartu */
                    cards.forEach(c => c.style.borderColor = '');
                    /* Highlight kartu aktif */
                    this.style.borderColor = 'var(--aksen-merah)';

                    activeIndex = idx;
                    openDetail(this);
                });
            });

            /* ─── Close button ─── */
            closeBtn.addEventListener('click', closeDetail);

            /* ─── Drag-to-scroll ─── */
            let isDown = false, startX = 0, scrollLeft = 0, didDrag = false;

            scroller.addEventListener('mousedown', e => {
                isDown     = true;
                didDrag    = false;
                startX     = e.pageX - scroller.offsetLeft;
                scrollLeft = scroller.scrollLeft;
                /* Matikan scroll-behavior agar tidak lag/jumping saat drag */
                scroller.style.scrollBehavior = 'auto';
            });

            document.addEventListener('mouseup', () => {
                if (!isDown) return;
                isDown = false;
                scroller.style.cursor = '';
                /* Aktifkan kembali smooth scroll setelah drag selesai */
                scroller.style.scrollBehavior = '';
            });

            scroller.addEventListener('mouseleave', () => {
                isDown = false;
                scroller.style.scrollBehavior = '';
            });

            scroller.addEventListener('mousemove', e => {
                if (!isDown) return;
                e.preventDefault();
                const x    = e.pageX - scroller.offsetLeft;
                const dist = (x - startX) * 1.5;
                if (Math.abs(dist) > 4) didDrag = true;
                scroller.scrollLeft = scrollLeft - dist;
                scroller.style.cursor = 'grabbing';
            });

            /* Block click-on-card during drag */
            scroller.addEventListener('click', e => {
                if (didDrag) { e.stopPropagation(); didDrag = false; }
            }, true);

            /* Horizontal scroll via mouse wheel — smooth step */
            scroller.addEventListener('wheel', e => {
                if (e.deltaY !== 0) {
                    e.preventDefault();
                    scroller.scrollBy({ left: e.deltaY * 1.2, behavior: 'smooth' });
                }
            }, { passive: false });

            /* ─── Custom Scrollbar Sync ─── */
            const track = document.getElementById('scrollbarTrack');
            const thumb = document.getElementById('scrollbarThumb');
            const pctSpan = document.getElementById('scrollbarPct');
            const stripes = document.getElementById('scrollbarTrackStripes');

            function updateScrollbar() {
                if (!scroller || !track || !thumb || !pctSpan) return;

                // Geser background garis miring untuk efek parallax dinamis saat scroll
                if (stripes) {
                    stripes.style.backgroundPositionX = -(scroller.scrollLeft * 0.35) + 'px';
                }

                const trackWidth = track.clientWidth;
                const clientWidth = scroller.clientWidth;
                const scrollWidth = scroller.scrollWidth;

                if (scrollWidth <= clientWidth) {
                    thumb.style.width = '100%';
                    thumb.style.left = '0px';
                    pctSpan.textContent = '100%';
                    return;
                }

                // Hitung lebar proporsional untuk thumb (min 40px, max 80% dari track)
                let thumbWidth = (clientWidth / scrollWidth) * trackWidth;
                thumbWidth = Math.max(40, Math.min(thumbWidth, trackWidth * 0.8));
                thumb.style.width = thumbWidth + 'px';

                // Hitung persentase scroll
                const maxScrollLeft = scrollWidth - clientWidth;
                const scrollPct = maxScrollLeft > 0 ? (scroller.scrollLeft / maxScrollLeft) : 0;

                // Petakan posisi thumb dalam batas track
                const maxThumbLeft = trackWidth - thumbWidth;
                const thumbLeft = scrollPct * maxThumbLeft;
                thumb.style.left = thumbLeft + 'px';

                // Format teks persentase: 00% - 100%
                const pctVal = Math.round(scrollPct * 100);
                pctSpan.textContent = String(pctVal).padStart(2, '0') + '%';
            }

            // Sync scrolling ketika drag/klik scrollbar custom
            let isDraggingScrollbar = false;
            let startDragX = 0;
            let startThumbLeft = 0;

            function scrollFromTrackClick(e) {
                const rect = track.getBoundingClientRect();
                const clickX = e.clientX - rect.left;
                const trackWidth = track.clientWidth;
                const thumbWidth = thumb.offsetWidth;
                const maxThumbLeft = trackWidth - thumbWidth;

                let targetLeft = clickX - thumbWidth / 2;
                targetLeft = Math.max(0, Math.min(targetLeft, maxThumbLeft));

                const maxScrollLeft = scroller.scrollWidth - scroller.clientWidth;
                const pct = maxThumbLeft > 0 ? (targetLeft / maxThumbLeft) : 0;

                scroller.style.scrollBehavior = 'auto'; // Respon instan untuk drag
                scroller.scrollLeft = pct * maxScrollLeft;
                updateScrollbar();
            }

            track.addEventListener('mousedown', e => {
                // Jika klik tepat pada thumb, mulai drag
                if (e.target === thumb || thumb.contains(e.target)) {
                    isDraggingScrollbar = true;
                    startDragX = e.pageX;
                    startThumbLeft = parseFloat(thumb.style.left) || 0;
                    scroller.style.scrollBehavior = 'auto';
                    e.preventDefault();
                    return;
                }

                // Jika klik pada track, pindahkan posisi thumb lalu mulai drag
                scrollFromTrackClick(e);
                isDraggingScrollbar = true;
                startDragX = e.pageX;
                startThumbLeft = parseFloat(thumb.style.left) || 0;
                scroller.style.scrollBehavior = 'auto';
                e.preventDefault();
            });

            document.addEventListener('mousemove', e => {
                if (!isDraggingScrollbar) return;

                const deltaX = e.pageX - startDragX;
                const trackWidth = track.clientWidth;
                const thumbWidth = thumb.offsetWidth;
                const maxThumbLeft = trackWidth - thumbWidth;

                let targetLeft = startThumbLeft + deltaX;
                targetLeft = Math.max(0, Math.min(targetLeft, maxThumbLeft));

                const maxScrollLeft = scroller.scrollWidth - scroller.clientWidth;
                const pct = maxThumbLeft > 0 ? (targetLeft / maxThumbLeft) : 0;

                scroller.style.scrollBehavior = 'auto';
                scroller.scrollLeft = pct * maxScrollLeft;
                updateScrollbar();
            });

            document.addEventListener('mouseup', () => {
                if (isDraggingScrollbar) {
                    isDraggingScrollbar = false;
                    scroller.style.scrollBehavior = '';
                }
            });

            // Sinkronkan saat galeri di-scroll (baik via swipe, wheel, drag, dsb)
            scroller.addEventListener('scroll', updateScrollbar);

            // Inisialisasi awal & saat layar di-resize
            updateScrollbar();
            window.addEventListener('resize', updateScrollbar);

            // Tambahkan timeout kecil untuk memastikan kalkulasi setelah DOM siap sepenuhnya
            setTimeout(updateScrollbar, 100);
        })();
        </script>

    </body>
</html>
