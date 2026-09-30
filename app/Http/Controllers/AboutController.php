<?php

namespace App\Http\Controllers;

use App\Models\ManagementMember;

class AboutController extends Controller
{
    public function index()
    {
        try {
            $commissioners = ManagementMember::active()->commissioners()->orderBy('sort_order')->get();
            $directors = ManagementMember::active()->directors()->orderBy('sort_order')->get();
        } catch (\Throwable $e) {
            $commissioners = collect([]);
            $directors = collect([]);
        }

        return view('about', compact('commissioners', 'directors'));
    }
}
