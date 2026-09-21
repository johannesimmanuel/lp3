<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Illuminate\Http\Request;

class AdminEnquiryController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactEnquiry::query();

        // Filter by read status
        $filter = $request->query('status', 'all');
        if ($filter === 'unread') {
            $query->unread();
        } elseif ($filter === 'read') {
            $query->read();
        }

        // Search query
        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('contact_name', 'like', "%{$search}%")
                  ->orWhere('institution_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('service_interest', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $enquiries = $query->latest()->paginate(15)->withQueryString();
        $unreadCount = ContactEnquiry::unread()->count();
        $totalCount = ContactEnquiry::count();

        return view('admin.enquiries.index', compact('enquiries', 'unreadCount', 'totalCount', 'filter', 'search'));
    }

    public function show(ContactEnquiry $enquiry)
    {
        // Automatically mark as read on view
        if (!$enquiry->is_read) {
            $enquiry->markAsRead();
        }

        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function toggleRead(ContactEnquiry $enquiry)
    {
        $enquiry->update(['is_read' => !$enquiry->is_read]);

        $statusText = $enquiry->is_read ? 'ditandai sudah dibaca' : 'ditandai belum dibaca';
        return back()->with('success', "Pesan dari {$enquiry->contact_name} berhasil {$statusText}.");
    }

    public function destroy(ContactEnquiry $enquiry)
    {
        $senderName = $enquiry->contact_name;
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')
            ->with('success', "Pesan dari {$senderName} berhasil dihapus dari kotak masuk.");
    }
}
