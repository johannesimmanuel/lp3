@extends('admin.layout')

@section('title', 'Pengaturan Website')
@section('header_title', 'Pengaturan Website & Korporat')
@section('header_subtitle', 'Kelola informasi identitas perusahaan, alamat kantor pusat, perizinan OJK, dan nomor kontak resmi')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-6">
        @csrf

        <!-- General Info Section -->
        <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
            <div class="p-5 border-b border-slate-800 bg-[#20050B]/40 flex items-center gap-2">
                <i class="fa-solid fa-building text-[#E2BC6A]"></i>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Identitas Korporasi & Perizinan OJK</h3>
            </div>
            <div class="p-6 md:p-8 space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Nama Perusahaan
                        </label>
                        <input type="text" 
                               name="site_name" 
                               value="{{ old('site_name', \App\Models\Setting::get('site_name', 'PT Vlex Reinsurance')) }}" 
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Nomor Izin Usaha Pialang OJK
                        </label>
                        <input type="text" 
                               name="ojk_license" 
                               value="{{ old('ojk_license', \App\Models\Setting::get('ojk_license', 'KEP-418/NB.1/2018')) }}" 
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Tagline Korporasi
                    </label>
                    <input type="text" 
                           name="site_tagline" 
                           value="{{ old('site_tagline', \App\Models\Setting::get('site_tagline', 'Institutional Reinsurance Intermediaries & Risk Advisors')) }}" 
                           class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition">
                </div>
            </div>
        </div>

        <!-- Contact Desk Section -->
        <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
            <div class="p-5 border-b border-slate-800 bg-[#20050B]/40 flex items-center gap-2">
                <i class="fa-solid fa-address-book text-[#E2BC6A]"></i>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Kontak Resmi & Alamat Kantor Pusat</h3>
            </div>
            <div class="p-6 md:p-8 space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Email Resmi Reasuransi (Treaty & Facultative)
                        </label>
                        <input type="email" 
                               name="site_email" 
                               value="{{ old('site_email', \App\Models\Setting::get('site_email', 'treaty@vlexre.co.id')) }}" 
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Nomor Telepon Kantor
                        </label>
                        <input type="text" 
                               name="site_phone" 
                               value="{{ old('site_phone', \App\Models\Setting::get('site_phone', '+62 21 5289 7800')) }}" 
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-mono focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                        Alamat Lengkap Kantor Pusat
                    </label>
                    <textarea name="site_address" 
                              rows="3" 
                              class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-[#E2BC6A] transition leading-relaxed">{{ old('site_address', \App\Models\Setting::get('site_address', 'World Trade Center 3, 18th Floor, Jl. Jend. Sudirman Kav. 29-31, Jakarta 12920, Indonesia')) }}</textarea>
                </div>
            </div>
        </div>

        <!-- Metrics & Stats Section -->
        <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
            <div class="p-5 border-b border-slate-800 bg-[#20050B]/40 flex items-center gap-2">
                <i class="fa-solid fa-chart-line text-[#E2BC6A]"></i>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Statistik Kinerja Utama</h3>
            </div>
            <div class="p-6 md:p-8 space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Total Insured Values Syndicated
                        </label>
                        <input type="text" 
                               name="stat_syndicated" 
                               value="{{ old('stat_syndicated', \App\Models\Setting::get('stat_syndicated', '$3.8B+')) }}" 
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-bold text-[#E2BC6A] focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">
                            Kepatuhan Regulasi Solvabilitas OJK
                        </label>
                        <input type="text" 
                               name="stat_solvency" 
                               value="{{ old('stat_solvency', \App\Models\Setting::get('stat_solvency', '100%')) }}" 
                               class="w-full px-4 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm font-bold text-emerald-400 focus:outline-none focus:border-[#E2BC6A] transition">
                    </div>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="flex items-center justify-end">
            <button type="submit" 
                    class="px-8 py-3 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider shadow-xl shadow-[#7A0C22]/40 hover:brightness-110 transition border border-[#E2BC6A]/30 inline-flex items-center gap-2">
                <i class="fa-solid fa-floppy-disk"></i>
                <span>Simpan Seluruh Pengaturan</span>
            </button>
        </div>
    </form>
</div>
@endsection
