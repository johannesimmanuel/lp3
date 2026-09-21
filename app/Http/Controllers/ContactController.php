<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'contact_name' => 'required|string|max:255',
            'institution_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'service_interest' => 'nullable|string|max:100',
            'message' => 'required|string|min:5|max:3000',
        ]);

        try {
            // Attempt saving if ContactEnquiry model / table exists
            if (class_exists(\App\Models\ContactEnquiry::class)) {
                \App\Models\ContactEnquiry::create($validated);
            }
        } catch (\Throwable $e) {
            Log::info('Vlex Re Contact Enquiry received: ' . json_encode($validated));
        }

        return redirect('/contact')->with(
            'status',
            'Your institutional enquiry has been registered securely. A licensed senior reinsurance broker from PT Vlex Reinsurance will reach out to your desk within one business day.'
        );
    }
}
