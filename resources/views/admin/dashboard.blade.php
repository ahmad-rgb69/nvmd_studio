<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin Dashboard — nevermind.</title>

        <!-- Panggil CSS Pusat -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/png" href="{{ asset('mini.png') }}">
    </head>
    <body class="antialiased bg-slate-50 text-nvmd-black font-body min-h-screen overflow-x-hidden">

        <!-- MANGGIL HEADER YANG UDAH DIPISAH -->
        @include('profile.partials.header')

        <!-- BINGKAI MAJALAH -->
        <div class="max-w-[1400px] mx-auto border-x-2 border-nvmd-line bg-nvmd-bg min-h-[calc(100vh-4rem)]">
            
            <!-- HEADER SECTION -->
            <div class="border-b-2 border-nvmd-line p-8 bg-slate-50 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <div class="flex items-center font-tech text-xs text-nvmd-red mb-2">
                        <span>LOG_003</span>
                        <span>-//-</span>
                        <span>ADMIN_DASHBOARD</span>
                        <span>*</span>
                    </div>
                    <h1 class="text-4xl font-bold uppercase tracking-tighter text-nvmd-black leading-none">
                        KELOLA ANTRIAN VIDEO
                    </h1>
                    <p class="text-sm text-nvmd-muted font-tech mt-2">// total_antrean: {{ count($orders) }} project(s)</p>
                </div>
                <div class="flex items-center space-x-2 text-xs font-tech font-bold text-white bg-nvmd-black py-2.5 px-4 border-2 border-nvmd-line nvmd-shadow-red">
                    <span class="w-2.5 h-2.5 bg-nvmd-red rounded-full animate-pulse"></span>
                    <span>SYSTEM_ONLINE_SECURE</span>
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
                            <p class="text-[10px] lowercase text-emerald-700 mt-1">// database_record_updated</p>
                        </div>
                    </div>
                @endif

                <!-- Error/Validation Notification -->
                @if ($errors->any())
                    <div class="p-4 bg-rose-50 border-2 border-rose-500 text-rose-800 font-tech text-xs uppercase tracking-wider mb-6">
                        <div class="font-bold mb-2">[ ERROR_VALIDATION ]</div>
                        <ul class="list-disc list-inside text-[11px] space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <!-- TABLE CONTENT -->
            <div class="p-8">
                @if($orders->isEmpty())
                    <div class="text-center py-20 border-2 border-dashed border-nvmd-line bg-slate-50">
                        <span class="text-4xl">🫙</span>
                        <h3 class="text-lg font-bold text-nvmd-black font-tech uppercase mt-4">// ANTRIAN_KOSONG</h3>
                        <p class="text-nvmd-muted text-sm mt-2 font-tech">// saat_ini_tidak_ada_project_antrean</p>
                    </div>
                @else
                    <div class="overflow-x-auto border-2 border-nvmd-line bg-white shadow-[6px_6px_0px_0px_rgba(15,23,42,1)]">
                        <table class="min-w-full divide-y-2 divide-nvmd-line font-tech text-xs text-left">
                            <thead class="bg-slate-50 uppercase font-bold tracking-wider">
                                <tr class="divide-x-2 divide-nvmd-line">
                                    <th scope="col" class="px-6 py-4">Client</th>
                                    <th scope="col" class="px-6 py-4">Detail Project</th>
                                    <th scope="col" class="px-6 py-4">Deadline & Mentahan</th>
                                    <th scope="col" class="px-6 py-4">Kelola Status & Hasil</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y-2 divide-nvmd-line bg-white font-body">
                                @foreach($orders as $order)
                                    <tr class="hover:bg-slate-50/50 transition duration-150 divide-x-2 divide-nvmd-line">
                                        <!-- Client Details -->
                                        <td class="px-6 py-5 whitespace-nowrap font-tech">
                                            <div class="flex flex-col">
                                                <span class="text-sm font-bold text-nvmd-black uppercase">{{ $order->user->name ?? 'Guest User' }}</span>
                                                <span class="text-[10px] text-nvmd-muted mt-1 select-all">{{ $order->user->email ?? 'N/A' }}</span>
                                            </div>
                                        </td>

                                        <!-- Project Title & Brief -->
                                        <td class="px-6 py-5">
                                            <div class="flex flex-col max-w-xs">
                                                <span class="text-sm font-bold text-nvmd-black uppercase">{{ $order->title }}</span>
                                                <span class="text-xs text-nvmd-muted mt-2 line-clamp-2 leading-relaxed" title="{{ $order->description }}">
                                                    {{ $order->description }}
                                                </span>
                                            </div>
                                        </td>

                                        <!-- Deadline & Raw video link -->
                                        <td class="px-6 py-5 whitespace-nowrap font-tech">
                                            <div class="flex flex-col space-y-2">
                                                <div class="flex items-center text-xs text-nvmd-black font-bold">
                                                    <svg class="w-3.5 h-3.5 mr-1.5 text-nvmd-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                    {{ \Carbon\Carbon::parse($order->deadline)->translatedFormat('d M Y') }}
                                                </div>
                                                <div>
                                                    <a href="{{ $order->raw_video_link }}" target="_blank" class="inline-flex items-center text-nvmd-red hover:underline font-tech font-bold uppercase tracking-wider text-[10px]">
                                                        [ UNDUH_MENTAHAN -> ]
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Update Status & Link Form -->
                                        <td class="px-6 py-5 whitespace-nowrap">
                                            <form method="POST" action="{{ route('admin.orders.update', $order) }}" class="flex flex-col sm:flex-row items-start sm:items-center gap-3">
                                                @csrf
                                                @method('PATCH')

                                                <!-- Dropdown Status -->
                                                <div class="flex flex-col">
                                                    <select name="status" onchange="toggleLinkInput(this, '{{ $order->id }}')" class="text-xs font-tech font-bold uppercase bg-nvmd-bg border-2 border-nvmd-line py-1.5 px-3 focus:outline-none focus:ring-0">
                                                        <option value="pending" @selected($order->status === 'pending')>PENDING</option>
                                                        <option value="on progress" @selected($order->status === 'on progress')>ON PROGRESS</option>
                                                        <option value="completed" @selected($order->status === 'completed')>COMPLETED</option>
                                                    </select>
                                                </div>

                                                <!-- Input Link Video Final -->
                                                <div id="link-container-{{ $order->id }}" class="{{ $order->status === 'completed' ? 'block' : 'hidden' }}">
                                                    <input 
                                                        type="url" 
                                                        name="final_video_link" 
                                                        value="{{ $order->final_video_link }}" 
                                                        placeholder="https://link-video-jadi.com" 
                                                        class="text-xs font-tech bg-nvmd-bg border-2 border-nvmd-line w-52 py-1.5 px-3 placeholder-nvmd-muted/65 focus:outline-none focus:ring-0" 
                                                    />
                                                </div>

                                                <!-- Button Submit -->
                                                <button type="submit" class="bg-nvmd-black text-white px-4 py-2 font-tech text-xs font-bold uppercase border-2 border-nvmd-line nvmd-btn-interactive-black">
                                                    SIMPAN
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

        </div>

        <!-- Script to toggle the Visibility of Final Video Link input based on Status Selection -->
        <script>
            function toggleLinkInput(selectElement, orderId) {
                const container = document.getElementById('link-container-' + orderId);
                const inputField = container.querySelector('input[name="final_video_link"]');
                
                if (selectElement.value === 'completed') {
                    container.classList.remove('hidden');
                    container.classList.add('block');
                    inputField.setAttribute('required', 'required');
                } else {
                    container.classList.remove('block');
                    container.classList.add('hidden');
                    inputField.removeAttribute('required');
                }
            }
        </script>
    </body>
</html>
