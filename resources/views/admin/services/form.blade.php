@extends('admin.layout')

@section('title', ($isEdit ? 'Sunting' : 'Tambah') . ' Layanan Reasuransi')
@section('header_title', ($isEdit ? 'Sunting Layanan: ' . $service->title : 'Tambah Layanan Reasuransi Baru'))
@section('header_subtitle', 'Kelola informasi deskriptif, pemodelan treaty, dan poin fitur proteksi risiko')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.services.index') }}" 
           class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900 text-slate-300 hover:text-white hover:bg-slate-800 transition text-xs font-semibold border border-slate-800">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke Daftar Layanan</span>
        </a>
    </div>

    <form action="{{ $isEdit ? route('admin.services.update', $service) : route('admin.services.store') }}" 
          method="POST" 
          class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="p-6 md:p-8 space-y-6">
            
            <!-- Section 1: Basic Identifiers -->
            <div class="pb-6 border-b border-slate-800">
                <h3 class="text-sm font-bold text-[#E2BC6A] uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Informasi Identitas & Kategori</span>
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Title (EN) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Judul Layanan (Bahasa Inggris) <span class="text-rose-400">*</span>
                        </label>
                        <input type="text" 
                               name="title" 
                               value="{{ old('title', $service->title) }}" 
                               required 
                               placeholder="e.g. Property Treaty & Catastrophe XOL"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <!-- Title (ID) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Judul Layanan (Bahasa Indonesia)
                        </label>
                        <input type="text" 
                               name="title_id" 
                               value="{{ old('title_id', $service->title_id) }}" 
                               placeholder="e.g. Treaty Properti & Catastrophe XOL"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <!-- Slug -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            URL Slug (Identifier)
                        </label>
                        <input type="text" 
                               name="slug" 
                               value="{{ old('slug', $service->slug) }}" 
                               placeholder="e.g. property (otomatis dibuat jika kosong)"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
                        <span class="block text-[11px] text-slate-400 mt-1">Akan menjadi URL: /services/nama-slug</span>
                    </div>

                    <!-- Image Asset -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Path Gambar / Asset
                        </label>
                        <input type="text" 
                               name="image" 
                               value="{{ old('image', $service->image) }}" 
                               placeholder="assets/img/service-property.jpg"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <!-- Category (EN) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Kategori (EN) <span class="text-rose-400">*</span>
                        </label>
                        <input type="text" 
                               name="category" 
                               value="{{ old('category', $service->category) }}" 
                               required 
                               placeholder="e.g. Property & Catastrophe"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <!-- Category (ID) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Kategori (ID)
                        </label>
                        <input type="text" 
                               name="category_id" 
                               value="{{ old('category_id', $service->category_id) }}" 
                               placeholder="e.g. Properti & Katastrofe"
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>
                </div>
            </div>

            <!-- Section 2: Tagline & Descriptions -->
            <div class="pb-6 border-b border-slate-800">
                <h3 class="text-sm font-bold text-[#E2BC6A] uppercase tracking-wider mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-align-left"></i>
                    <span>Tagline & Deskripsi Detail</span>
                </h3>

                <div class="space-y-4">
                    <!-- Tagline (EN) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Tagline Ringkas (EN)
                        </label>
                        <input type="text" 
                               name="tagline" 
                               value="{{ old('tagline', $service->tagline) }}" 
                               placeholder="Tagline dalam bahasa Inggris..."
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <!-- Tagline (ID) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Tagline Ringkas (ID)
                        </label>
                        <input type="text" 
                               name="tagline_id" 
                               value="{{ old('tagline_id', $service->tagline_id) }}" 
                               placeholder="Tagline dalam bahasa Indonesia..."
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <!-- Description (EN) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Deskripsi Lengkap (EN)
                        </label>
                        <textarea name="description" 
                                  rows="4" 
                                  placeholder="Uraian komprehensif solusi reasuransi dalam bahasa Inggris..."
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('description', $service->description) }}</textarea>
                    </div>

                    <!-- Description (ID) -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Deskripsi Lengkap (ID)
                        </label>
                        <textarea name="description_id" 
                                  rows="4" 
                                  placeholder="Uraian komprehensif solusi reasuransi dalam bahasa Indonesia..."
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('description_id', $service->description_id) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section 3: Features List (One per line) -->
            <div class="pb-6 border-b border-slate-800">
                <h3 class="text-sm font-bold text-[#E2BC6A] uppercase tracking-wider mb-2 flex items-center gap-2">
                    <i class="fa-solid fa-list-check"></i>
                    <span>Poin Fitur & Proteksi Cakupan</span>
                </h3>
                <p class="text-xs text-slate-400 mb-4">Tuliskan setiap fitur proteksi per baris baru (Enter untuk memisahkan fitur).</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Fitur Cakupan (EN) - Satu per baris
                        </label>
                        <textarea name="features_raw" 
                                  rows="6" 
                                  placeholder="Multi-Layer Catastrophe Excess of Loss (Cat XOL)&#10;Proportional Quota Share Treaty syndication&#10;Property All Risks (PAR) slips..."
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs font-mono focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('features_raw', is_array($service->features) ? implode("\n", $service->features) : $service->features) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Fitur Cakupan (ID) - Satu per baris
                        </label>
                        <textarea name="features_id_raw" 
                                  rows="6" 
                                  placeholder="Penyusunan Multi-Layer Catastrophe Excess of Loss (Cat XOL)&#10;Sindikasi Treaty Proporsional Quota Share & Surplus&#10;Slip fakultatif Property All Risks (PAR)..."
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs font-mono focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('features_id_raw', is_array($service->features_id) ? implode("\n", $service->features_id) : $service->features_id) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Section 4: Ordering & Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Urutan Tampil (Sort Order)
                    </label>
                    <input type="number" 
                           name="sort_order" 
                           value="{{ old('sort_order', $service->sort_order) }}" 
                           min="1"
                           class="w-32 px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>

                <div class="flex items-center pt-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" 
                               name="is_active" 
                               value="1" 
                               {{ old('is_active', $service->is_active) ? 'checked' : '' }}
                               class="w-5 h-5 rounded bg-slate-950 border-slate-700 text-[#7A0C22] focus:ring-[#E2BC6A]">
                        <div>
                            <span class="text-sm font-semibold text-white block">Status Layanan Aktif</span>
                            <span class="text-xs text-slate-400 block">Tampilkan produk ini di website publik</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <!-- Form Submit Bar -->
        <div class="p-6 bg-slate-950/80 border-t border-slate-800 flex items-center justify-between">
            <a href="{{ route('admin.services.index') }}" class="text-xs font-semibold text-slate-400 hover:text-white transition">
                Batal
            </a>
            <button type="submit" 
                    class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-[#7A0C22]/40 hover:brightness-110 transition border border-[#E2BC6A]/30 inline-flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i>
                <span>{{ $isEdit ? 'Perbarui Layanan' : 'Simpan Layanan Baru' }}</span>
            </button>
        </div>
    </form>
</div>
@endsection
