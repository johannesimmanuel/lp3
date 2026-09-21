<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Portal') | PT Vlex Reinsurance</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800&family=Cormorant+Garamond:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', 'sans-serif'],
                        serif: ['"Cormorant Garamond"', 'serif'],
                    },
                    colors: {
                        vlex: {
                            deep: '#20050B',
                            maroon: '#7A0C22',
                            crimson: '#9E1B32',
                            gold: '#E2BC6A',
                            goldDark: '#C5A059',
                            goldLight: '#F3DFC1',
                        }
                    }
                }
            }
        }
    </script>

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #0f172a;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 9999px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #7A0C22;
        }
    </style>
</head>
<body class="h-full font-sans text-slate-100 bg-slate-950 antialiased" x-data="{ sidebarOpen: false }">
    <div class="min-h-full flex flex-col lg:flex-row">
        
        <!-- Mobile Sidebar Overlay Backdrop -->
        <div x-show="sidebarOpen" 
             x-cloak
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="sidebarOpen = false"
             class="fixed inset-0 bg-black/75 z-40 lg:hidden">
        </div>

        <!-- Sidebar Navigation -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
               class="fixed inset-y-0 left-0 z-50 w-72 bg-[#1A0307] border-r border-[#7A0C22]/30 flex flex-col transition-transform duration-300 ease-in-out">
            
            <!-- Brand Header -->
            <div class="h-20 flex items-center justify-between px-6 border-b border-[#7A0C22]/30 bg-[#20050B]">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-[#7A0C22] to-[#20050B] border border-[#E2BC6A]/40 flex items-center justify-center shadow-lg shadow-black/40 group-hover:border-[#E2BC6A] transition-all">
                        <span class="font-serif font-bold text-xl text-[#E2BC6A]">V</span>
                    </div>
                    <div>
                        <span class="block text-sm font-bold tracking-wider text-white uppercase">Vlex Reinsurance</span>
                        <span class="block text-[11px] font-medium tracking-widest text-[#E2BC6A]/80 uppercase">Administrative CMS</span>
                    </div>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white p-2">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Navigation Links -->
            @php
                $unreadInboxCount = \App\Models\ContactEnquiry::unread()->count();
            @endphp
            <div class="flex-1 overflow-y-auto px-4 py-6 space-y-1.5 custom-scrollbar">
                <div class="px-3 pb-2 text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                    Navigasi Utama
                </div>

                <!-- Dashboard -->
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-[#7A0C22] text-white shadow-md shadow-[#7A0C22]/30 border border-[#E2BC6A]/30' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-chart-pie w-5 text-center {{ request()->routeIs('admin.dashboard') ? 'text-[#E2BC6A]' : 'text-slate-400' }}"></i>
                        <span>Dashboard</span>
                    </div>
                </a>

                <!-- Inbox Pesan / Enquiries -->
                <a href="{{ route('admin.enquiries.index') }}" 
                   class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('admin.enquiries.*') ? 'bg-[#7A0C22] text-white shadow-md shadow-[#7A0C22]/30 border border-[#E2BC6A]/30' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-inbox w-5 text-center {{ request()->routeIs('admin.enquiries.*') ? 'text-[#E2BC6A]' : 'text-slate-400' }}"></i>
                        <span>Pesan Masuk (Inbox)</span>
                    </div>
                    @if($unreadInboxCount > 0)
                        <span class="px-2 py-0.5 text-xs font-bold bg-[#E2BC6A] text-[#20050B] rounded-full shadow-sm">
                            {{ $unreadInboxCount }}
                        </span>
                    @endif
                </a>

                <div class="pt-5 px-3 pb-2 text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                    Kelola Konten Web
                </div>

                <!-- Layanan Reasuransi -->
                <a href="{{ route('admin.services.index') }}" 
                   class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('admin.services.*') ? 'bg-[#7A0C22] text-white shadow-md shadow-[#7A0C22]/30 border border-[#E2BC6A]/30' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-shield-halved w-5 text-center {{ request()->routeIs('admin.services.*') ? 'text-[#E2BC6A]' : 'text-slate-400' }}"></i>
                        <span>Layanan Reasuransi</span>
                    </div>
                </a>

                <!-- Dewan Manajemen -->
                <a href="{{ route('admin.management.index') }}" 
                   class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('admin.management.*') ? 'bg-[#7A0C22] text-white shadow-md shadow-[#7A0C22]/30 border border-[#E2BC6A]/30' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-users-line w-5 text-center {{ request()->routeIs('admin.management.*') ? 'text-[#E2BC6A]' : 'text-slate-400' }}"></i>
                        <span>Dewan Manajemen</span>
                    </div>
                </a>

                <!-- Pengaturan Website -->
                <a href="{{ route('admin.settings.index') }}" 
                   class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('admin.settings.*') ? 'bg-[#7A0C22] text-white shadow-md shadow-[#7A0C22]/30 border border-[#E2BC6A]/30' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-sliders w-5 text-center {{ request()->routeIs('admin.settings.*') ? 'text-[#E2BC6A]' : 'text-slate-400' }}"></i>
                        <span>Pengaturan Website</span>
                    </div>
                </a>

                <div class="pt-5 px-3 pb-2 text-[10px] font-bold tracking-widest text-slate-400 uppercase">
                    Akun & Akses
                </div>

                <!-- Profil Admin -->
                <a href="{{ route('admin.profile') }}" 
                   class="flex items-center justify-between px-3.5 py-2.5 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('admin.profile') ? 'bg-[#7A0C22] text-white shadow-md shadow-[#7A0C22]/30 border border-[#E2BC6A]/30' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-user-gear w-5 text-center {{ request()->routeIs('admin.profile') ? 'text-[#E2BC6A]' : 'text-slate-400' }}"></i>
                        <span>Profil & Sandi</span>
                    </div>
                </a>
            </div>

            <!-- Sidebar Footer User Profile -->
            <div class="p-4 border-t border-[#7A0C22]/30 bg-[#20050B]/80 flex items-center justify-between">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-full bg-[#7A0C22] border border-[#E2BC6A]/40 flex items-center justify-center font-bold text-sm text-[#E2BC6A] flex-shrink-0">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="truncate">
                        <div class="text-xs font-semibold text-white truncate">{{ Auth::user()->name ?? 'Administrator' }}</div>
                        <div class="text-[11px] text-slate-400 truncate">{{ Auth::user()->email ?? 'admin@vlexre.co.id' }}</div>
                    </div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" title="Keluar" class="p-2 text-slate-400 hover:text-rose-400 transition-colors">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div class="flex-1 lg:pl-72 flex flex-col min-h-screen">
            
            <!-- Top Bar Header -->
            <header class="h-20 bg-slate-900/90 backdrop-blur border-b border-slate-800 px-6 flex items-center justify-between sticky top-0 z-30">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = true" class="lg:hidden text-slate-400 hover:text-white p-2 -ml-2">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                    <div>
                        <h1 class="text-lg font-bold text-white tracking-tight">@yield('header_title', 'Administrative Overview')</h1>
                        <p class="text-xs text-slate-400 hidden sm:block">@yield('header_subtitle', 'PT Vlex Reinsurance Corporate CMS Management')</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <!-- Public Website Link -->
                    <a href="{{ route('home') }}" target="_blank" 
                       class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-800 text-slate-300 hover:text-white hover:bg-slate-700 transition border border-slate-700">
                        <i class="fa-solid fa-arrow-up-right-from-square text-[11px] text-[#E2BC6A]"></i>
                        <span class="hidden md:inline">Buka Website Publik</span>
                    </a>

                    <!-- Logout Button -->
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" 
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium text-rose-300 bg-rose-500/10 hover:bg-rose-500/20 border border-rose-500/30 transition">
                            <i class="fa-solid fa-power-off text-xs"></i>
                            <span class="hidden sm:inline">Logout</span>
                        </button>
                    </form>
                </div>
            </header>

            <!-- Main Page Content Body -->
            <main class="flex-1 p-6 md:p-8 bg-slate-950">
                
                <!-- Flash Notification Banners -->
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-950/60 border border-emerald-500/40 text-emerald-200 flex items-start gap-3 shadow-lg shadow-emerald-950/20">
                        <i class="fa-solid fa-circle-check text-emerald-400 mt-0.5 text-lg"></i>
                        <div class="flex-1 text-sm font-medium leading-relaxed">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                @if(session('status'))
                    <div class="mb-6 p-4 rounded-xl bg-blue-950/60 border border-blue-500/40 text-blue-200 flex items-start gap-3 shadow-lg shadow-blue-950/20">
                        <i class="fa-solid fa-circle-info text-blue-400 mt-0.5 text-lg"></i>
                        <div class="flex-1 text-sm font-medium leading-relaxed">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 rounded-xl bg-rose-950/60 border border-rose-500/40 text-rose-200 flex items-start gap-3 shadow-lg shadow-rose-950/20">
                        <i class="fa-solid fa-circle-exclamation text-rose-400 mt-0.5 text-lg"></i>
                        <div class="flex-1 text-sm font-medium leading-relaxed">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-rose-950/60 border border-rose-500/40 text-rose-200 shadow-lg">
                        <div class="flex items-center gap-2 mb-2 font-semibold text-sm">
                            <i class="fa-solid fa-triangle-exclamation text-rose-400"></i>
                            <span>Harap periksa kembali isian formulir:</span>
                        </div>
                        <ul class="list-disc list-inside text-xs space-y-1 text-rose-300">
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </main>

            <!-- Admin Footer -->
            <footer class="py-4 px-6 border-t border-slate-800/80 bg-slate-900/60 text-center text-xs text-slate-400 flex flex-col sm:flex-row items-center justify-between gap-2">
                <div>
                    &copy; {{ date('Y') }} <span class="text-[#E2BC6A] font-semibold">PT Vlex Reinsurance</span>. Terdaftar & Diawasi oleh OJK.
                </div>
                <div class="flex items-center gap-4 text-slate-400">
                    <span>Internal Enterprise CMS</span>
                    <span>&bull;</span>
                    <span>v2.4 Secure Build</span>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
