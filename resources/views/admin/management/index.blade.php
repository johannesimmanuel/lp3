@extends('admin.layout')

@section('title', 'Dewan Pimpinan & Manajemen')
@section('header_title', 'Dewan Manajemen (Leadership)')
@section('header_subtitle', 'Kelola profil Dewan Komisaris dan Direksi PT Vlex Reinsurance')

@section('content')
<div class="space-y-8">
    
    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-slate-900 p-5 rounded-2xl border border-slate-800 shadow-xl">
        <div>
            <h2 class="text-base font-bold text-white">Profil Eksekutif & Kepemimpinan</h2>
            <p class="text-xs text-slate-400 mt-0.5">Ditampilkan pada halaman `/about#leadership`</p>
        </div>
        <a href="{{ route('admin.management.create') }}" 
           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gradient-to-r from-[#7A0C22] to-[#9E1B32] text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-[#7A0C22]/40 hover:brightness-110 transition border border-[#E2BC6A]/30">
            <i class="fa-solid fa-user-plus"></i>
            <span>Tambah Anggota Dewan</span>
        </a>
    </div>

    <!-- Section: Board of Commissioners -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
        <div class="p-5 border-b border-slate-800 bg-[#20050B]/30 flex items-center justify-between">
            <h3 class="text-sm font-bold text-white uppercase tracking-wider flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#E2BC6A]"></span>
                <span>Dewan Komisaris (Board of Commissioners)</span>
            </h3>
            <span class="text-xs text-[#E2BC6A] font-semibold">{{ count($commissioners) }} Anggota</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/80 text-xs uppercase font-semibold text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="px-6 py-4 w-16 text-center">Urutan</th>
                        <th class="px-6 py-4">Foto & Nama</th>
                        <th class="px-6 py-4">Jabatan</th>
                        <th class="px-6 py-4">Biografi Singkat</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($commissioners as $c)
                        <tr class="hover:bg-slate-800/40 transition">
                            <td class="px-6 py-4 text-center font-mono font-bold text-[#E2BC6A]">
                                {{ $c->sort_order }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-slate-800 overflow-hidden flex-shrink-0 border border-slate-700">
                                        @if($c->photo)
                                            <img src="{{ asset($c->photo) }}" alt="{{ $c->name }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center font-bold text-slate-400 text-xs">
                                                {{ substr($c->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="font-bold text-white">{{ $c->name }}</div>
                                        <div class="text-[11px] text-slate-400 font-mono">{{ $c->photo }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-semibold text-[#E2BC6A]">{{ $c->role }}</div>
                                @if($c->role_id)
                                    <div class="text-xs text-slate-400">{{ $c->role_id }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 max-w-xs">
                                <p class="text-xs text-slate-400 truncate" title="{{ $c->bio }}">
                                    {{ Str::limit($c->bio, 80) }}
                                </p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                @if($c->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/30">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        <span>Aktif</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                        <span>Non-Aktif</span>
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.management.edit', $c) }}" 
                                       class="p-2 rounded-lg bg-[#7A0C22]/80 hover:bg-[#7A0C22] text-white transition border border-[#E2BC6A]/30" 
                                       title="Sunting Profil">
                                        <i class="fa-regular fa-pen-to-square text-xs"></i>
                                    </a>
                                    <form action="{{ route('admin.management.destroy', $c) }}" 
                                          method="POST" 
                                          class="inline" 
                                          onsubmit="return confirm('Hapus profil {{ $c->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 rounded-lg bg-rose-500/10 hover:bg-rose-500/30 text-rose-400 transition border border-rose-500/30" 
                                                title="Hapus">
                                            <i class="fa-regular fa-trash-can text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-slate-400">
                                Belum ada data Dewan Komisaris.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Section: Board of Directors -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
        <div class="p-5 border-b border-slate-800 bg-[#20050B]/30 flex items-center justify-between">
            <h3 class="text-sm font-bold text-white uppercase tracking-wider flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#E2BC6A]"></span>
                <span>Dewan Direksi (Board of Directors)</span>
            </h3>
            <span class="text-xs text-[#E2BC6A] font-semibold">{{ count($directors) }} Anggota</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/80 text-xs uppercase font-semibold text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="px-6 py-4 w-16 text-center">Urutan</th>
                        <th class="px-6 py-4">Foto & Nama</th>
                        <th class="px-6 py-4">Jabatan</th>
                        <th class="px-6 py-4">Biografi Singkat</th>
                        <th class="px-6 py-4 text-center">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($directors as $d)
                        <tr class="hover:bg-slate-800/40 transition">
                            <td class="px-6 py-4 text-center font-mono font-bold text-[#E2BC6A]">
                                {{ $d->sort_order }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-slate-800 overflow-hidden flex-shrink-0 border border-slate-700">
                                        @if($d->photo)
                                            <img src="{{ asset($d->photo) }}" alt="{{ $d->name }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center font-bold text-slate-400 text-xs">
                                                {{ substr($d->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="font-bold text-white">{{ $d->name }}</div>
                                        <div class="text-[11px] text-slate-400 font-mono">{{ $d->photo }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-semibold text-[#E2BC6A]">{{ $d->role }}</div>
                                @if($d->role_id)
                                    <div class="text-xs text-slate-400">{{ $d->role_id }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4 max-w-xs">
                                <p class="text-xs text-slate-400 truncate" title="{{ $d->bio }}">
                                    {{ Str::limit($d->bio, 80) }}
                                </p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                @if($d->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/30">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        <span>Aktif</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                        <span>Non-Aktif</span>
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('admin.management.edit', $d) }}" 
                                       class="p-2 rounded-lg bg-[#7A0C22]/80 hover:bg-[#7A0C22] text-white transition border border-[#E2BC6A]/30" 
                                       title="Sunting Profil">
                                        <i class="fa-regular fa-pen-to-square text-xs"></i>
                                    </a>
                                    <form action="{{ route('admin.management.destroy', $d) }}" 
                                          method="POST" 
                                          class="inline" 
                                          onsubmit="return confirm('Hapus profil {{ $d->name }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 rounded-lg bg-rose-500/10 hover:bg-rose-500/30 text-rose-400 transition border border-rose-500/30" 
                                                title="Hapus">
                                            <i class="fa-regular fa-trash-can text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-slate-400">
                                Belum ada data Dewan Direksi.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
