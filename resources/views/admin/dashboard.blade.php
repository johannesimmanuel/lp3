@extends('admin.layout')

@section('title', 'Dashboard Overview')
@section('header_title', 'Dashboard Eksekutif')
@section('header_subtitle', 'Ringkasan aktivitas pesan masuk kontak dan status manajemen konten website')

@section('content')
<div class="space-y-8">
    
    <!-- Top Metrics Row -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        
        <!-- Metric 1: Pesan Masuk / Inbox -->
        <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 shadow-lg relative overflow-hidden group hover:border-[#E2BC6A]/40 transition">
            <div class="flex items-center justify-between">
                <div>
                    <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Kotak Masuk Kontak</span>
                    <span class="block text-3xl font-extrabold text-white mt-1.5">{{ $totalEnquiries }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/30 text-[#E2BC6A] flex items-center justify-center text-xl">
                    <i class="fa-solid fa-inbox"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-between text-xs pt-3 border-t border-slate-800/80">
                <span class="text-amber-300/90 font-medium">
                    <i class="fa-solid fa-envelope mr-1"></i> {{ $unreadEnquiries }} pesan belum dibaca
                </span>
                <a href="{{ route('admin.enquiries.index') }}" class="text-slate-400 hover:text-white inline-flex items-center gap-1 font-semibold">
                    <span>Lihat</span> <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
            </div>
        </div>

        <!-- Metric 2: Layanan Reasuransi -->
        <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 shadow-lg relative overflow-hidden group hover:border-[#7A0C22]/60 transition">
            <div class="flex items-center justify-between">
                <div>
                    <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Layanan Reasuransi</span>
                    <span class="block text-3xl font-extrabold text-white mt-1.5">{{ $totalServices }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-400 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-between text-xs pt-3 border-t border-slate-800/80">
                <span class="text-emerald-400 font-medium">
                    <i class="fa-solid fa-circle-check mr-1"></i> {{ $activeServices }} lini aktif di web
                </span>
                <a href="{{ route('admin.services.index') }}" class="text-slate-400 hover:text-white inline-flex items-center gap-1 font-semibold">
                    <span>Kelola</span> <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
            </div>
        </div>

        <!-- Metric 3: Dewan Manajemen -->
        <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 shadow-lg relative overflow-hidden group hover:border-[#E2BC6A]/40 transition">
            <div class="flex items-center justify-between">
                <div>
                    <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Dewan Pimpinan</span>
                    <span class="block text-3xl font-extrabold text-white mt-1.5">{{ $totalManagement }}</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-sky-500/10 border border-sky-500/30 text-sky-400 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-users-line"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-between text-xs pt-3 border-t border-slate-800/80">
                <span class="text-slate-400">Komisaris & Direksi</span>
                <a href="{{ route('admin.management.index') }}" class="text-slate-400 hover:text-white inline-flex items-center gap-1 font-semibold">
                    <span>Kelola</span> <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
            </div>
        </div>

        <!-- Metric 4: Regulasi OJK & Keamanan -->
        <div class="p-5 rounded-2xl bg-slate-900 border border-slate-800 shadow-lg relative overflow-hidden group hover:border-[#7A0C22]/60 transition">
            <div class="flex items-center justify-between">
                <div>
                    <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Izin Pialang OJK</span>
                    <span class="block text-xl font-bold text-white mt-2 font-mono">KEP-418/2018</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-award"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center justify-between text-xs pt-3 border-t border-slate-800/80">
                <span class="text-emerald-400 font-medium">
                    <i class="fa-solid fa-check-double mr-1"></i> Solvabilitas 100%
                </span>
                <a href="{{ route('admin.settings.index') }}" class="text-slate-400 hover:text-white inline-flex items-center gap-1 font-semibold">
                    <span>Setting</span> <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions Banner -->
    <div class="p-6 rounded-2xl bg-gradient-to-r from-[#20050B] via-[#380814] to-slate-900 border border-[#7A0C22]/40 shadow-xl flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
            <h2 class="text-lg font-bold text-white flex items-center gap-2">
                <i class="fa-solid fa-bolt text-[#E2BC6A]"></i>
                <span>Tindakan Cepat Administrasi</span>
            </h2>
            <p class="text-xs text-slate-300 mt-1">
                Kelola konten publik dan respon pertanyaan calon klien reasuransi dengan cepat.
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-2.5">
            <a href="{{ route('admin.enquiries.index', ['status' => 'unread']) }}" 
               class="px-4 py-2 rounded-xl bg-[#E2BC6A] text-[#20050B] font-bold text-xs hover:bg-[#F3DFC1] transition shadow-md inline-flex items-center gap-2">
                <i class="fa-solid fa-envelope-open-text"></i>
                <span>Buka Pesan Belum Dibaca ({{ $unreadEnquiries }})</span>
            </a>
            <a href="{{ route('admin.services.create') }}" 
               class="px-4 py-2 rounded-xl bg-[#7A0C22] text-white font-semibold text-xs hover:bg-[#9E1B32] transition border border-[#E2BC6A]/30 inline-flex items-center gap-2">
                <i class="fa-solid fa-plus"></i>
                <span>Tambah Layanan</span>
            </a>
            <a href="{{ route('admin.settings.index') }}" 
               class="px-4 py-2 rounded-xl bg-slate-800 text-slate-200 font-semibold text-xs hover:bg-slate-700 transition border border-slate-700 inline-flex items-center gap-2">
                <i class="fa-solid fa-gear"></i>
                <span>Pengaturan Situs</span>
            </a>
        </div>
    </div>

    <!-- Recent Enquiries Section -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
        <div class="p-6 border-b border-slate-800 flex items-center justify-between">
            <div>
                <h3 class="text-base font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-inbox text-[#E2BC6A]"></i>
                    <span>Pesan Kontak Masuk Terbaru</span>
                </h3>
                <p class="text-xs text-slate-400 mt-0.5">5 pesan terbaru yang dikirimkan institusi via formulir Contact Us</p>
            </div>
            <a href="{{ route('admin.enquiries.index') }}" class="text-xs font-semibold text-[#E2BC6A] hover:underline inline-flex items-center gap-1">
                <span>Lihat Seluruh Pesan</span> <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/60 text-xs uppercase font-semibold text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="px-6 py-3.5">Status</th>
                        <th class="px-6 py-3.5">Pengirim & Perusahaan</th>
                        <th class="px-6 py-3.5">Minat Layanan</th>
                        <th class="px-6 py-3.5">Pesan</th>
                        <th class="px-6 py-3.5">Waktu</th>
                        <th class="px-6 py-3.5 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($recentEnquiries as $item)
                        <tr class="hover:bg-slate-800/40 transition {{ !$item->is_read ? 'bg-amber-500/[0.03]' : '' }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(!$item->is_read)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-500/20 text-[#E2BC6A] border border-amber-500/40">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#E2BC6A] animate-pulse"></span>
                                        <span>Baru</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                        <i class="fa-solid fa-check text-[10px]"></i>
                                        <span>Dibaca</span>
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-white">{{ $item->contact_name }}</div>
                                <div class="text-xs text-[#E2BC6A]/90 font-medium">{{ $item->institution_name ?: 'Institusi Privat' }}</div>
                                <div class="text-xs text-slate-400">{{ $item->email }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 rounded-lg text-xs font-semibold bg-slate-800 border border-slate-700 text-slate-200">
                                    {{ ucwords(str_replace('-', ' ', $item->service_interest ?: 'General')) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 max-w-xs">
                                <p class="text-xs text-slate-300 truncate" title="{{ $item->message }}">
                                    {{ Str::limit($item->message, 70) }}
                                </p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-400">
                                {{ $item->created_at ? $item->created_at->diffForHumans() : '-' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-xs">
                                <a href="{{ route('admin.enquiries.show', $item) }}" 
                                   class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg font-semibold bg-[#7A0C22]/80 hover:bg-[#7A0C22] text-white transition border border-[#E2BC6A]/30">
                                    <i class="fa-regular fa-eye"></i>
                                    <span>Buka</span>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                <i class="fa-regular fa-folder-open text-3xl mb-3 text-slate-400 block"></i>
                                <span>Belum ada pesan kontak yang masuk.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Active Services Grid Overview -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 p-6 shadow-xl">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h3 class="text-base font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-shield-halved text-[#E2BC6A]"></i>
                    <span>Portofolio Layanan Reasuransi Aktif</span>
                </h3>
                <p class="text-xs text-slate-400 mt-0.5">Daftar produk reasuransi yang tampil di halaman `/services`</p>
            </div>
            <a href="{{ route('admin.services.index') }}" class="text-xs font-semibold text-[#E2BC6A] hover:underline">
                Kelola Semua
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($services as $s)
                <div class="p-4 rounded-xl bg-slate-950/70 border border-slate-800 hover:border-[#7A0C22]/50 transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-[11px] font-bold text-[#E2BC6A] uppercase tracking-wider">{{ $s->category }}</span>
                            <span class="inline-flex items-center gap-1 text-[11px] font-semibold {{ $s->is_active ? 'text-emerald-400' : 'text-slate-400' }}">
                                <span class="w-2 h-2 rounded-full {{ $s->is_active ? 'bg-emerald-400' : 'bg-slate-600' }}"></span>
                                {{ $s->is_active ? 'Aktif' : 'Non-aktif' }}
                            </span>
                        </div>
                        <h4 class="text-sm font-bold text-white mb-1">{{ $s->title }}</h4>
                        <p class="text-xs text-slate-400 line-clamp-2">{{ $s->tagline }}</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-800/80 flex items-center justify-between text-xs">
                        <span class="text-[11px] text-slate-400 font-mono">/services/{{ $s->slug }}</span>
                        <a href="{{ route('admin.services.edit', $s) }}" class="text-[#E2BC6A] hover:text-white font-medium">
                            <i class="fa-regular fa-pen-to-square mr-1"></i> Edit
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
