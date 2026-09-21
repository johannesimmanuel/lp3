@extends('admin.layout')

@section('title', 'Kotak Masuk Pesan')
@section('header_title', 'Kotak Masuk Kontak (Inbox)')
@section('header_subtitle', 'Kelola seluruh permohonan konsultasi dan pesan institusional yang masuk dari formulir Contact Us')

@section('content')
<div class="space-y-6">
    
    <!-- Top Filter and Search Bar -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 p-5 shadow-xl flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
        
        <!-- Status Filter Tabs -->
        <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0">
            <a href="{{ route('admin.enquiries.index', ['status' => 'all', 'search' => request('search')]) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-semibold transition {{ $filter === 'all' ? 'bg-[#7A0C22] text-white border border-[#E2BC6A]/40 shadow-md' : 'bg-slate-950 text-slate-400 hover:text-white border border-slate-800' }}">
                Semua Pesan ({{ $totalCount }})
            </a>
            <a href="{{ route('admin.enquiries.index', ['status' => 'unread', 'search' => request('search')]) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-semibold transition inline-flex items-center gap-1.5 {{ $filter === 'unread' ? 'bg-amber-500 text-slate-950 font-bold border border-amber-400 shadow-md' : 'bg-slate-950 text-slate-400 hover:text-white border border-slate-800' }}">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                <span>Belum Dibaca ({{ $unreadCount }})</span>
            </a>
            <a href="{{ route('admin.enquiries.index', ['status' => 'read', 'search' => request('search')]) }}" 
               class="px-3.5 py-2 rounded-xl text-xs font-semibold transition {{ $filter === 'read' ? 'bg-slate-800 text-white border border-slate-700' : 'bg-slate-950 text-slate-400 hover:text-white border border-slate-800' }}">
                Sudah Dibaca ({{ $totalCount - $unreadCount }})
            </a>
        </div>

        <!-- Search Form -->
        <form action="{{ route('admin.enquiries.index') }}" method="GET" class="flex items-center gap-2">
            <input type="hidden" name="status" value="{{ $filter }}">
            <div class="relative w-full md:w-72">
                <input type="text" 
                       name="search" 
                       value="{{ $search }}" 
                       placeholder="Cari nama, email, institusi..." 
                       class="w-full pl-9 pr-4 py-2 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-[#E2BC6A] focus:ring-1 focus:ring-[#E2BC6A] transition placeholder:text-slate-400">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <i class="fa-solid fa-magnifying-glass text-xs"></i>
                </div>
            </div>
            @if($search)
                <a href="{{ route('admin.enquiries.index', ['status' => $filter]) }}" 
                   class="px-3 py-2 rounded-xl bg-slate-800 text-slate-300 hover:text-white text-xs border border-slate-700" 
                   title="Reset pencarian">
                    <i class="fa-solid fa-rotate-left"></i>
                </a>
            @endif
            <button type="submit" class="px-4 py-2 rounded-xl bg-[#7A0C22] hover:bg-[#9E1B32] text-white text-xs font-semibold transition border border-[#E2BC6A]/30">
                Cari
            </button>
        </form>
    </div>

    <!-- Enquiries Table -->
    <div class="bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-300">
                <thead class="bg-slate-950/80 text-xs uppercase font-semibold text-slate-400 border-b border-slate-800">
                    <tr>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Pengirim & Institusi</th>
                        <th class="px-6 py-4">Kontak</th>
                        <th class="px-6 py-4">Minat Layanan</th>
                        <th class="px-6 py-4">Ringkasan Pesan</th>
                        <th class="px-6 py-4">Diterima</th>
                        <th class="px-6 py-4 text-right">Tindakan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/80">
                    @forelse($enquiries as $enquiry)
                        <tr class="hover:bg-slate-800/40 transition {{ !$enquiry->is_read ? 'bg-amber-500/[0.04]' : '' }}">
                            
                            <!-- Status Badge -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(!$enquiry->is_read)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-amber-500/20 text-[#E2BC6A] border border-amber-500/40">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#E2BC6A] animate-pulse"></span>
                                        <span>Belum Dibaca</span>
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium bg-slate-800 text-slate-400 border border-slate-700">
                                        <i class="fa-solid fa-check text-[10px]"></i>
                                        <span>Dibaca</span>
                                    </span>
                                @endif
                            </td>

                            <!-- Sender & Institution -->
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="font-bold text-white hover:text-[#E2BC6A] transition block">
                                    {{ $enquiry->contact_name }}
                                </a>
                                <span class="text-xs text-[#E2BC6A]/90 font-medium block mt-0.5">
                                    <i class="fa-regular fa-building text-[10px] mr-1"></i>
                                    {{ $enquiry->institution_name ?: 'Institusi Privat / Perorangan' }}
                                </span>
                            </td>

                            <!-- Contact (Email & Phone) -->
                            <td class="px-6 py-4 whitespace-nowrap text-xs">
                                <div class="text-slate-300 font-mono">{{ $enquiry->email }}</div>
                                @if($enquiry->phone)
                                    <div class="text-slate-400 mt-0.5">{{ $enquiry->phone }}</div>
                                @endif
                            </td>

                            <!-- Service Interest -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 rounded-lg text-xs font-medium bg-slate-950 border border-slate-800 text-slate-300">
                                    {{ ucwords(str_replace('-', ' ', $enquiry->service_interest ?: 'General Enquiry')) }}
                                </span>
                            </td>

                            <!-- Message Snippet -->
                            <td class="px-6 py-4 max-w-xs">
                                <p class="text-xs text-slate-400 truncate" title="{{ $enquiry->message }}">
                                    {{ Str::limit($enquiry->message, 80) }}
                                </p>
                            </td>

                            <!-- Timestamp -->
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-400">
                                <div class="text-slate-300">{{ $enquiry->created_at ? $enquiry->created_at->format('d M Y') : '-' }}</div>
                                <div class="text-[11px] text-slate-400">{{ $enquiry->created_at ? $enquiry->created_at->format('H:i') : '' }} WIB</div>
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <!-- View Detail -->
                                    <a href="{{ route('admin.enquiries.show', $enquiry) }}" 
                                       class="p-2 rounded-lg bg-slate-800 hover:bg-[#7A0C22] text-slate-300 hover:text-white transition border border-slate-700" 
                                       title="Buka Detail Pesan">
                                        <i class="fa-regular fa-eye text-xs"></i>
                                    </a>

                                    <!-- Toggle Read/Unread -->
                                    <form action="{{ route('admin.enquiries.toggle-read', $enquiry) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" 
                                                class="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition border border-slate-700"
                                                title="{{ $enquiry->is_read ? 'Tandai Belum Dibaca' : 'Tandai Sudah Dibaca' }}">
                                            <i class="fa-solid {{ $enquiry->is_read ? 'fa-envelope' : 'fa-envelope-open' }} text-xs"></i>
                                        </button>
                                    </form>

                                    <!-- Delete -->
                                    <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" 
                                          method="POST" 
                                          class="inline" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan dari {{ $enquiry->contact_name }}? Tindakan ini tidak dapat dibatalkan.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="p-2 rounded-lg bg-rose-500/10 hover:bg-rose-500/30 text-rose-400 transition border border-rose-500/30"
                                                title="Hapus Pesan">
                                            <i class="fa-regular fa-trash-can text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-16 text-center text-slate-400">
                                <i class="fa-regular fa-folder-open text-4xl mb-3 text-slate-400 block"></i>
                                <span class="text-sm">Tidak ada pesan kontak yang ditemukan.</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($enquiries->hasPages())
            <div class="p-4 border-t border-slate-800 bg-slate-950/60">
                {{ $enquiries->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
