<header class="border-b-2 border-nvmd-line bg-nvmd-bg sticky top-0 z-50">
    <div class="max-w-[1400px] mx-auto flex items-center justify-between h-16 px-6 font-tech text-xs tracking-wider">
        
        {{-- LOGO: icon.png → kembali ke home --}}
        <a href="{{ Request::getBaseUrl() ?: '/' }}" class="logo-home-btn flex-shrink-0">
            <img src="{{ Request::getBaseUrl() }}/icon.png" alt="Nevermind Studio" class="logo-icon w-12 h-12 object-contain transition-all duration-300">
        </a>
        
        <div class="hidden md:flex space-x-8 text-nvmd-muted">
            @auth
                <a href="{{ url('/#services') }}" class="group inline-flex items-center font-bold tracking-wider hover:text-nvmd-black transition-colors duration-250 gap-1">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">01 // layanan</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>
                
                <a href="{{ url('/#workflow') }}" class="group inline-flex items-center font-bold tracking-wider hover:text-nvmd-black transition-colors duration-250 gap-1">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">02 // alur_kerja</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>

                <a href="{{ Request::getBaseUrl() }}/portfolio" class="group inline-flex items-center font-bold tracking-wider transition-colors duration-250 gap-1 {{ request()->is('*/portfolio') || request()->is('portfolio') ? 'text-nvmd-black' : 'hover:text-nvmd-black' }}">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">03 // portfolio</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>

                <a href="{{ url('/dashboard') }}" class="group inline-flex items-center font-bold tracking-wider transition-colors duration-250 gap-1 {{ request()->is('dashboard') ? 'text-nvmd-black' : 'hover:text-nvmd-black' }}">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">04 // dashboard</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>
                
                <a href="{{ url('/orders/create') }}" class="group inline-flex items-center font-bold tracking-wider transition-colors duration-250 gap-1 {{ request()->is('orders/create') ? 'text-nvmd-black' : 'hover:text-nvmd-black' }}">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">05 // booking_project</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>

                @if(auth()->user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="group inline-flex items-center font-bold tracking-wider text-nvmd-red transition-colors duration-250 gap-1 {{ request()->is('admin/*') ? 'opacity-100' : 'hover:opacity-85' }}">
                        <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                        <span class="group-hover:scale-105 transition-transform">06 // admin_panel</span>
                        <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                    </a>
                @endif
            @else
                <a href="{{ url('/#services') }}" class="group inline-flex items-center font-bold tracking-wider hover:text-nvmd-black transition-colors duration-250 gap-1">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">01 // layanan</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>
                
                <a href="{{ url('/#workflow') }}" class="group inline-flex items-center font-bold tracking-wider hover:text-nvmd-black transition-colors duration-250 gap-1">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">02 // alur_kerja</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>

                <a href="{{ Request::getBaseUrl() }}/portfolio" class="group inline-flex items-center font-bold tracking-wider transition-colors duration-250 gap-1 {{ request()->is('*/portfolio') || request()->is('portfolio') ? 'text-nvmd-black' : 'hover:text-nvmd-black' }}">
                    <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                    <span class="group-hover:scale-105 transition-transform">03 // portfolio</span>
                    <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                </a>
            @endauth
        </div>

        <div class="font-tech text-xs">
            @auth
                <div class="relative group">
                    <button class="flex items-center space-x-3 border-2 border-nvmd-line px-4 py-1.5 bg-nvmd-black text-white font-bold hover:bg-nvmd-red transition-all cursor-pointer">
                        <span>{{ Auth::user()->name }}</span>
                        <span>▾</span>
                    </button>
                    
                    <div class="absolute right-0 mt-2 w-52 bg-nvmd-bg border-2 border-nvmd-line shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all z-[999]">
                        <a href="{{ url('/profile') }}" class="block px-4 py-2 hover:bg-nvmd-red hover:text-white font-bold border-b-2 border-nvmd-line">profile</a>
                        
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-nvmd-red hover:text-white font-bold border-b-2 border-nvmd-line">admin_dashboard</a>
                        @endif
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-nvmd-red hover:text-white font-bold">log_out</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex items-center space-x-6">
                    <a href="{{ route('login') }}" class="group inline-flex items-center font-bold tracking-wider text-nvmd-black hover:text-nvmd-red transition-colors duration-250 gap-1">
                        <span class="group-hover:-translate-x-1.5 transition-transform">[</span>
                        <span class="group-hover:scale-110 transition-transform">log_in</span>
                        <span class="group-hover:translate-x-1.5 transition-transform">]</span>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-nvmd-red text-white px-4 py-1.5 font-bold border-2 border-nvmd-line">
                            sign_in
                        </a>
                    @endif
                </div>
            @endauth
        </div>
    </div>
</header>