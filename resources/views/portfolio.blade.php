<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio — Nevermind Studio</title>
        <meta name="description" content="Koleksi karya edit video terbaik dari Nevermind Studio. Lihat portofolio kami dari berbagai proyek YouTube, Reels, dan konten komersial.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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

                            <p class="font-body text-nvmd-muted text-base max-w-lg leading-relaxed mt-4">
                                Ini hasil kerja nyata kami — bukan mockup, bukan simulasi.
                                Tiap karya punya ceritanya sendiri. Klik untuk lihat detail lengkapnya.
                            </p>
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

                <div class="portfolio-scroll-container overflow-x-auto py-6 cursor-grab active:cursor-grabbing select-none" id="portfolioScroller">
                    <div class="flex gap-6" style="width: max-content;" id="portfolioCards">

                        {{-- KARYA 01 --}}
                        <button type="button" id="card-0"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="0"
                            data-title="Vlog Jogja Trip 3 Hari 2 Malam | Eps. 01"
                            data-channel="Hanan Attaki" data-channel-icon="HA"
                            data-views="2.4M" data-likes="87K" data-comments="3.2K" data-duration="14:32"
                            data-category="VLOG // LONG_FORM"
                            data-thumbnail="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/dQw4w9WgXcQ"
                            data-desc="Full vlog liburan 3 hari ke Jogja bareng tim. Editing landscape cinematic, color grading hangat, dan montage B-roll yang ketat. Reach organik tembus 2.4 juta dalam 2 minggu.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Vlog Jogja" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">14:32</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">VLOG // LONG_FORM</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Vlog Jogja Trip 3 Hari 2 Malam | Eps. 01</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">HA</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Hanan Attaki</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 2.4M</span>&nbsp;&nbsp;
                                    <span>♥ 87K</span>&nbsp;&nbsp;
                                    <span>💬 3.2K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 02 --}}
                        <button type="button" id="card-1"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="1"
                            data-title="Kulineran di Pasar Lama Tangerang — Hidden Gem!"
                            data-channel="Raditya Dika" data-channel-icon="RD"
                            data-views="1.1M" data-likes="54K" data-comments="1.8K" data-duration="10:15"
                            data-category="KULINER // VLOG"
                            data-thumbnail="https://img.youtube.com/vi/9bZkp7q19f0/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/9bZkp7q19f0"
                            data-desc="Eksplorasi jajanan malam legendaris di Pasar Lama Tangerang. Kamera handheld dinamis, grading kontras tinggi yang colorful, dan speed ramp transisi yang lincah khas anak muda.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/9bZkp7q19f0/maxresdefault.jpg" alt="Pasar Lama" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">10:15</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">KULINER // VLOG</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Kulineran di Pasar Lama Tangerang — Hidden Gem!</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">RD</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Raditya Dika</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 1.1M</span>&nbsp;&nbsp;
                                    <span>♥ 54K</span>&nbsp;&nbsp;
                                    <span>💬 1.8K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 03 --}}
                        <button type="button" id="card-2"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="2"
                            data-title="Review Jujur iPhone 15 Pro Max Setelah 3 Bulan"
                            data-channel="GadgetIn" data-channel-icon="GI"
                            data-views="3.1M" data-likes="120K" data-comments="9.4K" data-duration="18:45"
                            data-category="TECH // REVIEW"
                            data-thumbnail="https://img.youtube.com/vi/kJQP7kiw5Fk/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/kJQP7kiw5Fk"
                            data-desc="Review mendalam performa dan kamera iPhone 15 Pro Max. Pencahayaan studio presisi 3-point lighting, makro shot yang tajam, grading clean minimalis, dan grafis visual perbandingan specs.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/kJQP7kiw5Fk/maxresdefault.jpg" alt="Review iPhone" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">18:45</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">TECH // REVIEW</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Review Jujur iPhone 15 Pro Max Setelah 3 Bulan</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">GI</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">GadgetIn</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 3.1M</span>&nbsp;&nbsp;
                                    <span>♥ 120K</span>&nbsp;&nbsp;
                                    <span>💬 9.4K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 04 --}}
                        <button type="button" id="card-3"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="3"
                            data-title="Tutorial Setup Docker dari Nol Sampai Production"
                            data-channel="Web Programming UNPAS" data-channel-icon="WP"
                            data-views="450K" data-likes="28K" data-comments="2.1K" data-duration="24:10"
                            data-category="EDU // PROGRAMMING"
                            data-thumbnail="https://img.youtube.com/vi/JGwWNGJdvx8/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/JGwWNGJdvx8"
                            data-desc="Panduan lengkap Docker untuk pemula. Rekaman layar resolusi tinggi, audio super jernih dengan noise reduction tingkat lanjut, penanda bab chapter (timestamps) presisi, dan overlay kode yang terbaca.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/JGwWNGJdvx8/maxresdefault.jpg" alt="Docker Setup" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">24:10</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">EDU // PROGRAMMING</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Tutorial Setup Docker dari Nol Sampai Production</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">WP</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Web Programming UNPAS</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 450K</span>&nbsp;&nbsp;
                                    <span>♥ 28K</span>&nbsp;&nbsp;
                                    <span>💬 2.1K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 05 --}}
                        <button type="button" id="card-4"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="4"
                            data-title="Ngobrol Santai Tentang Masa Depan AI & Manusia"
                            data-channel="Deddy Corbuzier" data-channel-icon="DC"
                            data-views="5.2M" data-likes="340K" data-comments="42K" data-duration="45:12"
                            data-category="TALKSHOW // PODCAST"
                            data-thumbnail="https://img.youtube.com/vi/OPf0YbXqDm0/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/OPf0YbXqDm0"
                            data-desc="Podcast multi-camera angle switching yang mulus, audio recording profesional dual-host, dynamic lower-thirds banner, serta color grading cozy/warm studio vibes.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/OPf0YbXqDm0/maxresdefault.jpg" alt="Podcast AI" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">45:12</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">TALKSHOW // PODCAST</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Ngobrol Santai Tentang Masa Depan AI & Manusia</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">DC</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Deddy Corbuzier</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 5.2M</span>&nbsp;&nbsp;
                                    <span>♥ 340K</span>&nbsp;&nbsp;
                                    <span>💬 42K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 06 --}}
                        <button type="button" id="card-5"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="5"
                            data-title="Short Film — Perpisahan di Stasiun Besar Gubeng"
                            data-channel="Layar Pendek ID" data-channel-icon="LP"
                            data-views="720K" data-likes="48K" data-comments="3.9K" data-duration="06:55"
                            data-category="FILM // SHORT_FILM"
                            data-thumbnail="https://img.youtube.com/vi/tPEE9ZwTmy0/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/tPEE9ZwTmy0"
                            data-desc="Short film drama dengan editing naratif emosional, sfx ambience natural, grading monokromatik dengan highlight merah simbolis, dan title card tipografi kuat di awal dan akhir film.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/tPEE9ZwTmy0/maxresdefault.jpg" alt="Short Film Gubeng" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">06:55</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">FILM // SHORT_FILM</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Short Film — Perpisahan di Stasiun Besar Gubeng</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">LP</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Layar Pendek ID</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 720K</span>&nbsp;&nbsp;
                                    <span>♥ 48K</span>&nbsp;&nbsp;
                                    <span>💬 3.9K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 07 --}}
                        <button type="button" id="card-6"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="6"
                            data-title="ASMR Memasak Wagyu A5 Meltique di Hutan"
                            data-channel="Survival Chef" data-channel-icon="SC"
                            data-views="950K" data-likes="72K" data-comments="5.4K" data-duration="12:05"
                            data-category="ASMR // COOKING"
                            data-thumbnail="https://img.youtube.com/vi/fRh_vgS2dFE/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/fRh_vgS2dFE"
                            data-desc="Sensasi ASMR outdoor cooking super imersif. Perekaman audio stereo binaural (suara gemercik air, api membakar kayu, desisan daging wagyu di atas wajan baja), grading moody dark forest.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/fRh_vgS2dFE/maxresdefault.jpg" alt="ASMR Cooking" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">12:05</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">ASMR // COOKING</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">ASMR Memasak Wagyu A5 Meltique di Hutan</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">SC</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Survival Chef</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 950K</span>&nbsp;&nbsp;
                                    <span>♥ 72K</span>&nbsp;&nbsp;
                                    <span>💬 5.4K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 08 --}}
                        <button type="button" id="card-7"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="7"
                            data-title="Behind The Scenes Project Ads Pepsi Terbaru 2026"
                            data-channel="Creative Director ID" data-channel-icon="CD"
                            data-views="1.8M" data-likes="96K" data-comments="6.2K" data-duration="15:40"
                            data-category="BEHIND_SCENES // ADS"
                            data-thumbnail="https://img.youtube.com/vi/09R8_2nJtjg/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/09R8_2nJtjg"
                            data-desc="Dokumentasi proses syuting iklan Pepsi komersial. Teknik lighting studio skala besar, pemasangan rig kamera kustom, wawancara kru balik layar dengan overlay text box dinamis.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/09R8_2nJtjg/maxresdefault.jpg" alt="BTS Pepsi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">15:40</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">BEHIND_SCENES // ADS</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Behind The Scenes Project Ads Pepsi Terbaru 2026</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">CD</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Creative Director ID</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 1.8M</span>&nbsp;&nbsp;
                                    <span>♥ 96K</span>&nbsp;&nbsp;
                                    <span>💬 6.2K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 09 --}}
                        <button type="button" id="card-8"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="8"
                            data-title="Solo Backpacking ke Lombok — Budget 500 Ribu All In"
                            data-channel="Jerome Polin" data-channel-icon="JP"
                            data-views="4.8M" data-likes="275K" data-comments="11K" data-duration="22:17"
                            data-category="TRAVEL // VLOG"
                            data-thumbnail="https://img.youtube.com/vi/OPf0YbXqDm0/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/OPf0YbXqDm0"
                            data-desc="Perjalanan backpacker hemat menyusuri keindahan Lombok. Stabilisasi B-roll cinematic terjal, transisi musik beat-matching dinamis, serta color grading teal-and-orange khas travel vlog.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/OPf0YbXqDm0/maxresdefault.jpg" alt="Backpacking Lombok" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">22:17</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">TRAVEL // VLOG</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Solo Backpacking ke Lombok — Budget 500 Ribu All In</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-red text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">JP</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Jerome Polin</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 4.8M</span>&nbsp;&nbsp;
                                    <span>♥ 275K</span>&nbsp;&nbsp;
                                    <span>💬 11K</span>
                                </div>
                            </div>
                        </button>

                        {{-- KARYA 10 --}}
                        <button type="button" id="card-9"
                            class="portfolio-card group relative flex-shrink-0 w-64 sm:w-72 border-2 border-nvmd-line bg-nvmd-bg hover:border-nvmd-red transition-all duration-200 text-left focus:outline-none nvmd-shadow-black hover:shadow-[6px_6px_0px_0px_var(--aksen-merah)]"
                            data-index="9"
                            data-title="Short Film — Perpisahan di Stasiun Besar Gubeng"
                            data-channel="Layar Pendek ID" data-channel-icon="LP"
                            data-views="720K" data-likes="48K" data-comments="3.9K" data-duration="06:55"
                            data-category="FILM // SHORT_FILM"
                            data-thumbnail="https://img.youtube.com/vi/tPEE9ZwTmy0/maxresdefault.jpg"
                            data-yt-url="https://youtu.be/tPEE9ZwTmy0"
                            data-desc="Short film drama dengan editing naratif emosional, sfx ambience natural, grading monokromatik dengan highlight merah simbolis, dan title card tipografi kuat di awal dan akhir film.">
                            <div class="relative overflow-hidden aspect-video bg-nvmd-black">
                                <img src="https://img.youtube.com/vi/tPEE9ZwTmy0/maxresdefault.jpg" alt="Short Film Gubeng" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <span class="absolute bottom-2 right-2 bg-nvmd-black/90 text-white font-tech text-[10px] px-2 py-0.5">06:55</span>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-nvmd-black/30">
                                    <div class="w-12 h-12 rounded-full bg-white/90 flex items-center justify-center"><span class="text-nvmd-black text-lg ml-1">▶</span></div>
                                </div>
                            </div>
                            <div class="p-4">
                                <span class="font-tech text-[10px] text-nvmd-red tracking-widest">FILM // SHORT_FILM</span>
                                <h3 class="font-bold text-sm text-nvmd-black mt-1 leading-snug line-clamp-2 group-hover:text-nvmd-red transition-colors">Short Film — Perpisahan di Stasiun Besar Gubeng</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-5 h-5 rounded-full bg-nvmd-black text-white font-bold font-tech text-[8px] flex items-center justify-center flex-shrink-0">LP</div>
                                    <span class="font-tech text-[10px] text-nvmd-muted truncate">Layar Pendek ID</span>
                                </div>
                                <div class="flex items-center gap-3 mt-2 font-tech text-[10px] text-nvmd-muted">
                                    <span>👁 720K</span>&nbsp;&nbsp;
                                    <span>♥ 48K</span>&nbsp;&nbsp;
                                    <span>💬 3.9K</span>
                                </div>
                            </div>
                        </button>

                    </div>{{-- /portfolioCards --}}
                </div>{{-- /portfolioScroller --}}

                {{-- Hint teks --}}
                <p class="mt-3 font-tech text-[10px] text-nvmd-muted tracking-wider">
                    ← GESER UNTUK LIHAT SEMUA KARYA →&nbsp;&nbsp;|&nbsp;&nbsp;KLIK KARTU UNTUK DETAIL
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
        })();
        </script>

    </body>
</html>
