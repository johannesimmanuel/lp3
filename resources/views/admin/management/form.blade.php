@extends('admin.layout')

@section('title', ($isEdit ? 'Sunting' : 'Tambah') . ' Anggota Dewan Manajemen')
@section('header_title', ($isEdit ? 'Sunting Profil: ' . $member->name : 'Tambah Anggota Dewan Manajemen'))
@section('header_subtitle', 'Kelola data identitas, jabatan, dan biografi eksekutif')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.management.index') }}" 
           class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900 text-slate-300 hover:text-white hover:bg-slate-800 transition text-xs font-semibold border border-slate-800">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke Dewan Manajemen</span>
        </a>
    </div>

    <form action="{{ $isEdit ? route('admin.management.update', $member) : route('admin.management.store') }}" 
          method="POST" 
          class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="p-6 md:p-8 space-y-5">
            
            <!-- Type Selector -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">
                    Kategori Dewan <span class="text-rose-400">*</span>
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-slate-800 bg-slate-950/70 cursor-pointer hover:border-[#E2BC6A]/40 transition">
                        <input type="radio" 
                               name="type" 
                               value="commissioner" 
                               {{ old('type', $member->type) === 'commissioner' ? 'checked' : '' }}
                               class="text-[#7A0C22] focus:ring-[#E2BC6A]">
                        <div>
                            <span class="block text-sm font-bold text-white">Dewan Komisaris</span>
                            <span class="block text-[11px] text-slate-400">Board of Commissioners</span>
                        </div>
                    </label>

                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-slate-800 bg-slate-950/70 cursor-pointer hover:border-[#E2BC6A]/40 transition">
                        <input type="radio" 
                               name="type" 
                               value="director" 
                               {{ old('type', $member->type) === 'director' ? 'checked' : '' }}
                               class="text-[#7A0C22] focus:ring-[#E2BC6A]">
                        <div>
                            <span class="block text-sm font-bold text-white">Dewan Direksi</span>
                            <span class="block text-[11px] text-slate-400">Board of Directors</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Name -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                    Nama Lengkap & Gelar Akademik / Sertifikasi <span class="text-rose-400">*</span>
                </label>
                <input type="text" 
                       name="name" 
                       value="{{ old('name', $member->name) }}" 
                       required 
                       placeholder="e.g. Victor L. Panjaitan, AAIK, ANZIIF"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
            </div>

            <!-- Roles EN & ID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Jabatan Resmi (EN) <span class="text-rose-400">*</span>
                    </label>
                    <input type="text" 
                           name="role" 
                           value="{{ old('role', $member->role) }}" 
                           required 
                           placeholder="e.g. President Director"
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Jabatan Resmi (ID)
                    </label>
                    <input type="text" 
                           name="role_id" 
                           value="{{ old('role_id', $member->role_id) }}" 
                           placeholder="e.g. Direktur Utama"
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>
            </div>

            <!-- Photo Asset Path -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                    Path File Foto Eksekutif
                </label>
                <input type="text" 
                       name="photo" 
                       value="{{ old('photo', $member->photo) }}" 
                       placeholder="assets/img/mgmt-victor.jpg"
                       class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
                <span class="block text-[11px] text-slate-400 mt-1">Dapat menggunakan file yang tersedia di `assets/img/`</span>
            </div>

            <!-- Bio EN & ID -->
            <div class="space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Biografi Ringkas & Rekam Jejak (EN)
                    </label>
                    <textarea name="bio" 
                              rows="3" 
                              placeholder="Biografi dalam bahasa Inggris..."
                              class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('bio', $member->bio) }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Biografi Ringkas & Rekam Jejak (ID)
                    </label>
                    <textarea name="bio_id" 
                              rows="3" 
                              placeholder="Biografi dalam bahasa Indonesia..."
                              class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('bio_id', $member->bio_id) }}</textarea>
                </div>
            </div>

            <!-- Ordering & Active Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center pt-2">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Urutan Tampil (Sort Order)
                    </label>
                    <input type="number" 
                           name="sort_order" 
                           value="{{ old('sort_order', $member->sort_order) }}" 
                           min="1"
                           class="w-32 px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>

                <div class="flex items-center pt-2">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" 
                               name="is_active" 
                               value="1" 
                               {{ old('is_active', $member->is_active) ? 'checked' : '' }}
                               class="w-5 h-5 rounded bg-slate-950 border-slate-700 text-[#7A0C22] focus:ring-[#E2BC6A]">
                        <div>
                            <span class="text-sm font-semibold text-white block">Profil Aktif</span>
                            <span class="text-xs text-slate-400 block">Tampilkan di halaman About Website</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <!-- Form Submit Bar -->
        <div class="p-6 bg-slate-950/80 border-t border-slate-800 flex items-center justify-between">
            <a href="{{ route('admin.management.index') }}" class="text-xs font-semibold text-slate-400 hover:text-white transition">
                Batal
            </a>
            <button type="submit" 
                    class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-[#7A0C22]/40 hover:brightness-110 transition border border-[#E2BC6A]/30 inline-flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i>
                <span>{{ $isEdit ? 'Perbarui Anggota' : 'Simpan Anggota Baru' }}</span>
            </button>
        </div>
    </form>
</div>
@endsection
