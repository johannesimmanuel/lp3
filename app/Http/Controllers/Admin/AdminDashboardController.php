<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use App\Models\ManagementMember;
use App\Models\Service;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalEnquiries = ContactEnquiry::count();
        $unreadEnquiries = ContactEnquiry::unread()->count();
        $totalServices = Service::count();
        $activeServices = Service::active()->count();
        $totalManagement = ManagementMember::count();

        $recentEnquiries = ContactEnquiry::latest()->take(5)->get();
        $services = Service::orderBy('sort_order')->get();

        return view('admin.dashboard', compact(
            'totalEnquiries',
            'unreadEnquiries',
            'totalServices',
            'activeServices',
            'totalManagement',
            'recentEnquiries',
            'services'
        ));
    }
}
