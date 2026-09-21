@extends('admin.layout')

@section('title', 'Detail Pesan: ' . $enquiry->contact_name)
@section('header_title', 'Rincian Pesan Kontak')
@section('header_subtitle', 'Permohonan konsultasi reasuransi resmi dari ' . $enquiry->contact_name)

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    
    <!-- Top Action Bar -->
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.enquiries.index') }}" 
           class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-slate-900 text-slate-300 hover:text-white hover:bg-slate-800 transition text-xs font-semibold border border-slate-800 shadow-sm">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Kembali ke Kotak Masuk</span>
        </a>

        <div class="flex items-center gap-2">
            <!-- Toggle Read/Unread Form -->
            <form action="{{ route('admin.enquiries.toggle-read', $enquiry) }}" method="POST" class="inline">
                @csrf
                <button type="submit" 
                        class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-200 text-xs font-semibold transition border border-slate-800">
                    <i class="fa-solid {{ $enquiry->is_read ? 'fa-envelope' : 'fa-envelope-open' }} text-[#E2BC6A]"></i>
                    <span>{{ $enquiry->is_read ? 'Tandai Belum Dibaca' : 'Tandai Sudah Dibaca' }}</span>
                </button>
            </form>

            <!-- Delete Form -->
            <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" 
                  method="POST" 
                  class="inline" 
                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini secara permanen?');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-rose-500/10 hover:bg-rose-500/20 text-rose-300 text-xs font-semibold transition border border-rose-500/30">
                    <i class="fa-regular fa-trash-can"></i>
                    <span>Hapus Pesan</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Message Card -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 shadow-2xl overflow-hidden">
        
        <!-- Card Header Info -->
        <div class="p-6 md:p-8 bg-[#20050B]/60 border-b border-[#7A0C22]/30 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-[#E2BC6A] text-[#20050B] uppercase tracking-wider">
                        {{ ucwords(str_replace('-', ' ', $enquiry->service_interest ?: 'General Enquiry')) }}
                    </span>
                    <span class="text-xs text-slate-400">
                        <i class="fa-regular fa-clock mr-1"></i>
                        {{ $enquiry->created_at ? $enquiry->created_at->translatedFormat('d F Y, H:i') : '-' }} WIB
                    </span>
                </div>
                <h2 class="text-2xl font-bold text-white">{{ $enquiry->contact_name }}</h2>
                <div class="text-sm font-medium text-[#E2BC6A] mt-1 flex items-center gap-2">
                    <i class="fa-solid fa-building"></i>
                    <span>{{ $enquiry->institution_name ?: 'Institusi Privat / Perorangan' }}</span>
                </div>
            </div>

            <!-- Email Reply Quick CTA -->
            <div>
                <a href="mailto:{{ $enquiry->email }}?subject=Re:%20Institutional%20Reinsurance%20Enquiry%20-%20PT%20Vlex%20Reinsurance&body=Yth.%20{{ rawurlencode($enquiry->contact_name) }},%0D%0A%0D%0ATerima%20kasih%20telah%20menghubungi%20PT%20Vlex%20Reinsurance..." 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-[#7A0C22]/40 hover:brightness-110 transition border border-[#E2BC6A]/30">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Balas Melalui Email</span>
                </a>
            </div>
        </div>

        <!-- Meta Contact Rail -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-6 bg-slate-950/70 border-b border-slate-800 text-xs">
            <div>
                <span class="block text-slate-400 font-semibold uppercase tracking-wider mb-1">Email Pengirim</span>
                <a href="mailto:{{ $enquiry->email }}" class="text-white hover:text-[#E2BC6A] font-mono font-medium flex items-center gap-1.5 truncate">
                    <i class="fa-regular fa-envelope text-slate-400"></i>
                    <span>{{ $enquiry->email }}</span>
                </a>
            </div>
            <div>
                <span class="block text-slate-400 font-semibold uppercase tracking-wider mb-1">Nomor Telepon</span>
                <div class="text-white font-mono font-medium flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-slate-400"></i>
                    <span>{{ $enquiry->phone ?: 'Tidak dicantumkan' }}</span>
                </div>
            </div>
            <div>
                <span class="block text-slate-400 font-semibold uppercase tracking-wider mb-1">Status Keterbacaan</span>
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full {{ $enquiry->is_read ? 'bg-emerald-400' : 'bg-amber-400 animate-pulse' }}"></span>
                    <span class="text-white font-medium">{{ $enquiry->is_read ? 'Sudah Ditinjau' : 'Pesan Baru' }}</span>
                </div>
            </div>
        </div>

        <!-- Full Message Body -->
        <div class="p-6 md:p-8">
            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">
                Isi Pesan / Permohonan Konsultasi:
            </h3>
            <div class="p-6 rounded-xl bg-slate-950/90 border border-slate-800/90 text-slate-200 text-sm md:text-base leading-relaxed whitespace-pre-line font-sans select-text">
{{ $enquiry->message }}
            </div>
        </div>

        <!-- Card Footer -->
        <div class="p-6 bg-slate-950/40 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
            <span>ID Pesan: #{{ $enquiry->id }}</span>
            <span>Diterima melalui formulir resmi PT Vlex Reinsurance</span>
        </div>
    </div>
</div>
@endsection
