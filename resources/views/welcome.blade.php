<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nevermind — Jasa Booking Edit Video Profesional</title>

        <!-- Panggil CSS Pusat -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-slate-50 text-nvmd-black font-body min-h-screen overflow-x-hidden">

        <!-- MANGGIL HEADER YANG UDAH DIPISAH -->
        @include('profile.partials.header')

        <!-- BINGKAI MAJALAH -->
        <div class="max-w-[1400px] mx-auto border-x-2 border-nvmd-line bg-nvmd-bg">
            
            <!-- 1. HERO SECTION -->
            <section class="grid grid-cols-1 lg:grid-cols-12 min-h-[calc(100vh-4rem)] border-b-2 border-nvmd-line">
                
                <!-- SISI KIRI: RED BOX PORTFOLIO KATAKANA -->
                <a href="{{ Request::getBaseUrl() }}/portfolio" class="lg:col-span-5 bg-nvmd-red p-8 flex flex-col justify-between relative overflow-hidden min-h-[450px] lg:min-h-0 border-b-2 border-nvmd-line lg:border-b-0 lg:border-r-2 text-white group cursor-pointer">
                    <div class="font-tech text-xs tracking-widest opacity-90 uppercase transition-transform group-hover:translate-x-1 duration-200">
                        // CLICK_TO_ENTER_GALLERY // ギャラリー
                    </div>
                    
                    <div class="my-auto font-black flex flex-col tracking-tighter leading-none select-none text-left">
                        <div class="text-7xl sm:text-8xl lg:text-[6.5rem] text-nvmd-black group-hover:text-white transition-colors duration-300">ポート</div>
                        <div class="text-7xl sm:text-8xl lg:text-[6.5rem] text-white group-hover:text-nvmd-black transition-colors duration-300">フォリオ</div>
                        <div class="text-3xl font-tech tracking-widest text-nvmd-black/70 group-hover:text-white/90 mt-4 duration-300">[ PORT-FOLIO. ]</div>
                    </div>

                    <div class="font-tech text-[10px] flex justify-between tracking-wider opacity-90">
                        <span>[ SYSTEM: ONLINE - PORT: 3306 ]</span>
                        <span>EST. 2026 // nevermind.</span>
                    </div>
                </a>

                <!-- SISI KANAN: TEXT TYPOGRAPHY -->
                <div class="lg:col-span-7 flex flex-col justify-between bg-nvmd-bg">
                    <div class="p-8 sm:p-12 md:p-16">
                        <div class="flex items-center font-tech text-xs">
                            <span class="text-nvmd-red">LOG_002</span>
                            <span>-//-</span>
                            <span>LANDING_PAGE</span>
                            
                        </div>

                        <h1 class="font-bold text-5xl sm:text-6xl lg:text-7xl text-nvmd-black uppercase tracking-tighter leading-none mb-8">
                            Materi<br>
                            <span class="inline-block bg-nvmd-red text-white border-2">MENTAH</span><br>
                            Eksekusi<br>
                            <span class="text-nvmd-red">Tanpa Batas</span>
                            <span>* </span>
                        </h1>


                        <!-- TOMBOL CTA PINDAH KE SINI DAN DI BIKIN KE TENGAH -->
                        <div class="mt-12 flex justify-center w-full">
                            <div class="w-full max-w-md">
                                @auth
                                    <a href="{{ route('orders.create') }}" class="inline-block w-full py-4 bg-white-500 text-nvmd-red font-tech font-bold text-xs text-center uppercase border-2 border-black transition-all hover:text-nvmd-red hover:bg-nvmd-black hover:scale-110">
                                        BOOKING PROJECT SEKARANG !
                                    </a>
                                @else
                                    <a href="{{ route('register') }}" class="inline-block w-full py-4 bg-white-500 text-nvmd-red font-tech font-bold text-xs text-center uppercase border-2 border-black transition-all hover:text-nvmd-red hover:bg-nvmd-black hover:scale-110">
                                        MULAI LANGKAH PERTAMA ->
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 font-tech border-t-2 border-nvmd-line">
                        <div class="p-8 bg-slate-50 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-nvmd-muted uppercase tracking-widest">// ESTIMASI PENGIRIMAN GLOBAL</span>
                                <span class="block text-4xl font-bold text-nvmd-black mt-1 tracking-tight">24 JAM*</span>
                            </div>
                            <div clas="p-8 bg-slate-50 flex items-center justify-between">
                            <span class="text[10px] text-nvmd-muted uppercase tracking-widest">// DIKERJAKAN OLEH EDITOR</span>
                            <span class="block text-4xl font-bold text-nvmd-black mt-1 tracking-tight">PROFESIONAL</span>

                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2. SERVICES SECTION -->
            <section id="services" class="border-b-2 border-nvmd-line bg-nvmd-bg">
                <div class="border-b-2 border-nvmd-line px-6 py-4 bg-slate-50 flex justify-between items-center font-tech text-xs">
                    <span class="text-nvmd-muted uppercase tracking-widest">[ SECTION_01 // KAPABILITAS_STUDIO ]</span>
                    <span class="text-nvmd-red">✦ ✦ ✦</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 font-tech divide-y-2 md:divide-y-0 md:divide-x-2 divide-nvmd-line">
                    <div class="p-8 flex flex-col justify-between hover:bg-slate-50 transition-colors group">
                        <div>
                            <span class="text-[10px] text-nvmd-red font-bold uppercase tracking-widest">SHORT_FORM // 01</span>
                            <h3 class="text-2xl font-black text-nvmd-black uppercase mt-2 group-hover:text-nvmd-red transition-colors tracking-tight">TIKTOK & REELS</h3>
                            <p class="font-body text-sm text-nvmd-muted mt-4 leading-relaxed">Video vertikal dinamis dengan pop-up subtitle estetik dan transisi ketat untuk memicu grafik engagement penonton.</p>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col justify-between hover:bg-slate-50 transition-colors group">
                        <div>
                            <span class="text-[10px] text-nvmd-red font-bold uppercase tracking-widest">LONG_FORM // 02</span>
                            <h3 class="text-2xl font-black text-nvmd-black uppercase mt-2 group-hover:text-nvmd-red transition-colors tracking-tight">VLOG & YOUTUBE</h3>
                            <p class="font-body text-sm text-nvmd-muted mt-4 leading-relaxed">Penataan video panjang dengan storytelling alur matang, cinematic color grading, serta eliminasi dead-air presisi.</p>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col justify-between hover:bg-slate-50 transition-colors group">
                        <div>
                            <span class="text-[10px] text-nvmd-red font-bold uppercase tracking-widest">CORPORATE // 03</span>
                            <h3 class="text-2xl font-black text-nvmd-black uppercase mt-2 group-hover:text-nvmd-red transition-colors tracking-tight">PROFILE & ADS</h3>
                            <p class="font-body text-sm text-nvmd-muted mt-4 leading-relaxed">Iklan komersial maupun presentasi formal instansi dengan penataan rapi dan visual aset logo dinamis.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 3. WORKFLOW SECTION -->
            <section id="workflow" class="bg-nvmd-bg border-b-2 border-nvmd-line">
                <div class="border-b-2 border-nvmd-line px-6 py-4 bg-slate-50 flex justify-between items-center font-tech text-xs">
                    <span class="text-nvmd-muted uppercase tracking-widest">[ SECTION_02 // ARSITEKTUR_PROSES ]</span>
                    <span class="font-bold text-nvmd-black">*</span>
                </div>

                <div class="p-8 sm:p-12 md:p-16 max-w-4xl">
                    <h2 class="text-3xl sm:text-5xl font-black uppercase text-nvmd-black mb-4 tracking-tighter">EMPAT LANGKAH EKSEKUSI VISI.</h2>
                    <div class="space-y-6 font-tech mt-8">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 border-2 border-nvmd-line bg-nvmd-bg nvmd-shadow-black">
                            <div class="flex items-center space-x-4">
                                <span class="bg-nvmd-black text-white w-8 h-8 flex items-center justify-center font-bold text-xs">01</span>
                                <span class="font-bold text-nvmd-black uppercase">REGISTRASI IDENTITAS CLIENT</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 border-2 border-nvmd-line bg-nvmd-bg nvmd-shadow-black">
                            <div class="flex items-center space-x-4">
                                <span class="bg-nvmd-red text-white w-8 h-8 flex items-center justify-center font-bold text-xs">02</span>
                                <span class="font-bold text-nvmd-black uppercase">INPUT LINK FOOTAGE & BRIEF</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 border-2 border-nvmd-line bg-nvmd-bg nvmd-shadow-black">
                            <div class="flex items-center space-x-4">
                                <span class="bg-nvmd-black text-white w-8 h-8 flex items-center justify-center font-bold text-xs">03</span>
                                <span class="font-bold text-nvmd-black uppercase">PROSES EDITING REAL-TIME</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 border-2 border-nvmd-line bg-nvmd-bg nvmd-shadow-black">
                            <div class="flex items-center space-x-4">
                                <span class="bg-nvmd-red text-white w-8 h-8 flex items-center justify-center font-bold text-xs">04</span>
                                <span class="font-bold text-nvmd-black uppercase">SERAH TERIMA FILE FINAL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. FOOTER -->
            <footer class="bg-nvmd-black text-slate-400 py-12 px-8 font-tech text-xs">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center space-x-2 text-white">
                        <span class="text-nvmd-red text-base">✦</span>
                        <span class="font-bold uppercase tracking-widest text-white">NEVERMIND.</span>
                    </div>
                    <div class="text-[11px] text-nvmd-muted font-body">
                        &copy; 2026 Nevermind Group.
                    </div>
                </div>
            </footer>

        </div>
    </body>
</html>