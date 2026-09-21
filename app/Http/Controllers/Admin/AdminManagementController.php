<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ManagementMember;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function index()
    {
        $commissioners = ManagementMember::commissioners()->orderBy('sort_order')->get();
        $directors = ManagementMember::directors()->orderBy('sort_order')->get();

        return view('admin.management.index', compact('commissioners', 'directors'));
    }

    public function create()
    {
        return view('admin.management.form', [
            'member' => new ManagementMember([
                'type' => 'director',
                'is_active' => true,
                'sort_order' => (ManagementMember::max('sort_order') ?? 0) + 1,
            ]),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateMember($request);
        $validated['is_active'] = $request->boolean('is_active');

        ManagementMember::create($validated);

        return redirect()->route('admin.management.index')
            ->with('success', 'Profil pimpinan/dewan manajemen baru berhasil ditambahkan.');
    }

    public function edit(ManagementMember $management)
    {
        return view('admin.management.form', [
            'member' => $management,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, ManagementMember $management)
    {
        $validated = $this->validateMember($request);
        $validated['is_active'] = $request->boolean('is_active');

        $management->update($validated);

        return redirect()->route('admin.management.index')
            ->with('success', "Profil {$management->name} berhasil diperbarui.");
    }

    public function destroy(ManagementMember $management)
    {
        $name = $management->name;
        $management->delete();

        return redirect()->route('admin.management.index')
            ->with('success', "Profil {$name} berhasil dihapus.");
    }

    protected function validateMember(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'role_id' => 'nullable|string|max:255',
            'type' => 'required|in:commissioner,director',
            'bio' => 'nullable|string',
            'bio_id' => 'nullable|string',
            'photo' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);
    }
}
