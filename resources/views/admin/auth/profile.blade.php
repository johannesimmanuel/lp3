@extends('admin.layout')

@section('title', 'Profil & Keamanan Akun')
@section('header_title', 'Profil & Keamanan Akun')
@section('header_subtitle', 'Kelola informasi identitas administrator dan pembaruan kata sandi sistem')

@section('content')
<div class="max-w-3xl mx-auto space-y-8">
    
    <!-- Profile Info Form -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
        <div class="p-5 border-b border-slate-800 bg-[#20050B]/40 flex items-center gap-2">
            <i class="fa-solid fa-user-pen text-[#E2BC6A]"></i>
            <h3 class="text-sm font-bold text-white uppercase tracking-wider">Informasi Profil Administrator</h3>
        </div>

        <form action="{{ route('admin.profile.update') }}" method="POST" class="p-6 md:p-8 space-y-5">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                    Nama Administrator
                </label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name', $user->name) }}" 
                       required 
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                    Alamat Email
                </label>
                <input type="email" 
                       name="email" 
                       value="{{ old('email', $user->email) }}" 
                       required 
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
            </div>

            <div class="pt-2 flex justify-end">
                <button type="submit" 
                        class="px-5 py-2.5 rounded-xl bg-[#7A0C22] hover:bg-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider transition border border-[#E2BC6A]/30">
                    Simpan Perubahan Profil
                </button>
            </div>
        </form>
    </div>

    <!-- Change Password Form -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
        <div class="p-5 border-b border-slate-800 bg-[#20050B]/40 flex items-center gap-2">
            <i class="fa-solid fa-key text-[#E2BC6A]"></i>
            <h3 class="text-sm font-bold text-white uppercase tracking-wider">Perbarui Kata Sandi</h3>
        </div>

        <form action="{{ route('admin.password.update') }}" method="POST" class="p-6 md:p-8 space-y-5">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                    Kata Sandi Saat Ini
                </label>
                <input type="password" 
                       name="current_password" 
                       required 
                       placeholder="••••••••"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Kata Sandi Baru (Min. 8 Karakter)
                    </label>
                    <input type="password" 
                           name="password" 
                           required 
                           placeholder="••••••••"
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Konfirmasi Kata Sandi Baru
                    </label>
                    <input type="password" 
                           name="password_confirmation" 
                           required 
                           placeholder="••••••••"
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>
            </div>

            <div class="pt-2 flex justify-end">
                <button type="submit" 
                        class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider transition border border-[#E2BC6A]/30">
                    Perbarui Kata Sandi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
