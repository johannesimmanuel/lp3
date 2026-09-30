<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-950">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrator | PT Vlex Reinsurance</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800&family=Cormorant+Garamond:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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
                        }
                    }
                }
            }
        }
    </script>

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="h-full flex items-center justify-center p-4 bg-[#140206] text-slate-100 font-sans relative overflow-hidden">
    
    <!-- Background Luxury Ornaments -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-[#7A0C22]/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-[#E2BC6A]/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10">
        
        <!-- Brand Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#7A0C22] to-[#20050B] border-2 border-[#E2BC6A]/50 shadow-2xl shadow-black/80 mb-4">
                <span class="font-serif font-bold text-3xl text-[#E2BC6A]">V</span>
            </div>
            <h1 class="text-2xl font-bold tracking-wider text-white uppercase">PT Vlex Reinsurance</h1>
            <p class="text-xs font-medium tracking-widest text-[#E2BC6A]/80 uppercase mt-1">Portal CMS & Administrasi Konten</p>
        </div>

        <!-- Login Card -->
        <div class="bg-slate-900/90 border border-[#7A0C22]/40 rounded-2xl p-8 shadow-2xl shadow-black/70 backdrop-blur-xl">
            
            @if(session('status'))
                <div class="mb-5 p-3 rounded-lg bg-blue-950/70 border border-blue-500/40 text-blue-200 text-xs flex items-center gap-2">
                    <i class="fa-solid fa-circle-info text-blue-400"></i>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-5 p-3 rounded-lg bg-rose-950/70 border border-rose-500/40 text-rose-200 text-xs flex items-center gap-2">
                    <i class="fa-solid fa-circle-exclamation text-rose-400"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if (isset($errors) && $errors->any())
                <div class="mb-5 p-3 rounded-lg bg-rose-950/70 border border-rose-500/40 text-rose-200 text-xs">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                        Alamat Email Resmi
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-regular fa-envelope text-sm"></i>
                        </div>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autocomplete="email" 
                               autofocus
                               placeholder="nama@vlexre.co.id"
                               class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-slate-950/80 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] focus:ring-1 focus:ring-[#E2BC6A] transition placeholder:text-slate-400">
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </div>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               required 
                               placeholder="••••••••"
                               class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-slate-950/80 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] focus:ring-1 focus:ring-[#E2BC6A] transition placeholder:text-slate-400">
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded bg-slate-950 border-slate-700 text-[#7A0C22] focus:ring-[#E2BC6A]">
                        <span class="text-xs text-slate-400 select-none">Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full py-3 px-4 rounded-xl bg-gradient-to-r from-[#7A0C22] via-[#9E1B32] to-[#7A0C22] text-white font-semibold text-sm tracking-wider uppercase shadow-lg shadow-[#7A0C22]/40 hover:shadow-[#7A0C22]/60 hover:brightness-110 active:scale-[0.99] transition-all border border-[#E2BC6A]/30">
                    Masuk ke Sistem CMS
                </button>
            </form>
        </div>

        <!-- Back to Website -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-xs text-slate-400 hover:text-[#E2BC6A] transition inline-flex items-center gap-1.5">
                <i class="fa-solid fa-arrow-left text-[10px]"></i>
                <span>Kembali ke Beranda Website Publik</span>
            </a>
        </div>
    </div>
</body>
</html>
