@extends('admin.layout')

@section('title', 'Kelola Layanan Reasuransi')
@section('header_title', 'Layanan Reasuransi')
@section('header_subtitle', 'Kelola produk treaty, katastrofe, maritim, energi, retakaful syariah, dan risiko khusus')

@section('content')
<div class="space-y-6">
    
    <!-- Header Bar with Add Button -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-slate-900 p-5 rounded-2xl border border-slate-800 shadow-xl">
        <div>
            <h2 class="text-base font-bold text-white">Daftar Lini & Solusi Reasuransi</h2>
            <p class="text-xs text-slate-400 mt-0.5">Seluruh produk yang tampil di navigasi dan halaman `/services`</p>
        </div>
        <a href="{{ route('admin.services.create') }}" 
           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-[#7A0C22]/40 hover:brightness-110 transition border border-[#E2BC6A]/30">
            <i class="fa-solid fa-plus"></i>
            <span>Tambah Layanan Baru</span>
        </a>
    </div>

    <!-- Services Table -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/80 text-xs uppercase font-semibold text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="px-6 py-4 w-16 text-center">Urutan</th>
                        <th class="px-6 py-4">Layanan & Slug</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Fitur Cakupan</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($services as $service)
                        <tr class="hover:bg-slate-800/40 transition">
                            <td class="px-6 py-4 text-center font-mono font-bold text-[#E2BC6A]">
                                {{ $service->sort_order }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-bold text-white text-base">{{ $service->title }}</div>
                                @if($service->title_id)
                                    <div class="text-xs text-[#E2BC6A]/80">{{ $service->title_id }}</div>
                                @endif
                                <div class="text-xs text-slate-400 font-mono mt-0.5">/services/{{ $service->slug }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 rounded-lg text-xs font-semibold bg-slate-950 border border-slate-800 text-slate-300">
                                    {{ $service->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-400">
                                <span class="text-white font-semibold">{{ count($service->features ?? []) }}</span> poin proteksi
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                @if($service->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/30">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        <span>Aktif</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span>
                                        <span>Non-Aktif</span>
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('services.show', $service->slug) }}" target="_blank" 
                                       class="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition border border-slate-700" 
                                       title="Lihat di Web Publik">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                    </a>
                                    <a href="{{ route('admin.services.edit', $service) }}" 
                                       class="p-2 rounded-lg bg-[#7A0C22]/80 hover:bg-[#7A0C22] text-white transition border border-[#E2BC6A]/30" 
                                       title="Sunting Layanan">
                                        <i class="fa-regular fa-pen-to-square text-xs"></i>
                                    </a>
                                    <form action="{{ route('admin.services.destroy', $service) }}" 
                                          method="POST" 
                                          class="inline" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan {{ $service->title }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 rounded-lg bg-rose-500/10 hover:bg-rose-500/30 text-rose-400 transition border border-rose-500/30" 
                                                title="Hapus Layanan">
                                            <i class="fa-regular fa-trash-can text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-slate-400">
                                Belum ada data layanan reasuransi.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
