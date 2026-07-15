<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Log In - NVMD_STUDIO*</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-nvmd-bg text-nvmd-black min-h-screen flex flex-col items-center justify-center p-2">

    <div class="mb-2">
        <a href="{{ url('/') }}" class="block cursor-pointer">
            <img src="{{ asset('icon.png') }}" alt="NVMD_STUDIO" class="w-100 h-50 object-contain hover:scale-110 transition-transform">
        </a>
    </div>

    <div class="w-full max-w-md bg-white border-2 border-nvmd-line p-8 shadow-[8px_8px_0px_0px_rgba(15,23,42,1)]">
        
        <div class="mb-6 border-b-2 border-nvmd-line pb-4 text-center">
            <h2 class="font-tech font-bold text-lg uppercase tracking-widest text-nvmd-red">LOG_IN // SYSTEM_ACCESS</h2>
        </div>

        <x-auth-session-status class="mb-4 font-tech text-xs text-nvmd-red font-bold uppercase text-center" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-5">
                <label for="email" class="block font-tech text-[10px] font-bold uppercase tracking-widest text-nvmd-muted mb-2">[ EMAIL_ADDRESS ]</label>
                <input id="email" class="block w-full border-2 border-nvmd-line bg-transparent p-2.5 font-tech text-xs font-bold focus:border-nvmd-red focus:ring-0 transition-colors outline-none" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-nvmd-red font-tech text-xs" />
            </div>

            <div class="mb-5">
                <label for="password" class="block font-tech text-[10px] font-bold uppercase tracking-widest text-nvmd-muted mb-2">[ PASSWORD ]</label>
                <input id="password" class="block w-full border-2 border-nvmd-line bg-transparent p-2.5 font-tech text-xs font-bold focus:border-nvmd-red focus:ring-0 transition-colors outline-none" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-nvmd-red font-tech text-xs" />
            </div>

            <div class="mb-8 flex items-center justify-between font-tech text-[10px] font-bold uppercase tracking-widest">
                <div class="flex items-center space-x-2">
                    <input id="remember_me" type="checkbox" name="remember" style="width: 16px; height: 16px; border: 2px solid #0f172a; border-radius: 0px; appearance: auto; -webkit-appearance: auto; cursor: pointer;" />
                    <label for="remember_me" class="text-nvmd-muted hover:text-nvmd-black cursor-pointer select-none transition-colors">
                        [ REMEMBER_ME ]
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-nvmd-muted hover:text-nvmd-red transition-colors" href="{{ route('password.request') }}">
                        // FORGOT_PWD?
                    </a>
                @endif
            </div>

            <div class="flex flex-col space-y-5 mt-4">
                <button type="submit" class="group relative w-full py-4 flex items-center justify-center gap-2 bg-black border border-white/50 transition duration-200 hover:bg-nvmd-red hover:scale-[1.02] hover:drop-shadow-[0_0_20px_rgba(255,255,255,0.9)] cursor-pointer">
                    
                    <span class="text-white text-xs font-bold font-tech tracking-[0.2em] uppercase transition-all duration-200 group-hover:text-nvmd-black">
                        LOG_IN
                    </span>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white transition-all duration-200 group-hover:translate-x-[10px] group-hover:text-nvmd-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>

                </button>
                
                <a class="font-tech text-[10px] text-center text-nvmd-muted hover:text-nvmd-black uppercase tracking-widest transition-all hover:text-nvmd-red hover:scale-105" href="{{ route('register') }}">
                    // NO_ACCOUNT? REGISTER
                </a>
            </div>
        </form>
    </div>

</body>
</html>