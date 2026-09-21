<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.form', [
            'service' => new Service([
                'is_active' => true,
                'sort_order' => (Service::max('sort_order') ?? 0) + 1,
            ]),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateService($request);

        $validated['slug'] = Str::slug($validated['slug'] ?: $validated['title']);
        $validated['features'] = $this->parseLines($request->input('features_raw'));
        $validated['features_id'] = $this->parseLines($request->input('features_id_raw'));
        $validated['is_active'] = $request->boolean('is_active');

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan reasuransi baru berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', [
            'service' => $service,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $validated = $this->validateService($request, $service->id);

        $validated['slug'] = Str::slug($validated['slug'] ?: $validated['title']);
        $validated['features'] = $this->parseLines($request->input('features_raw'));
        $validated['features_id'] = $this->parseLines($request->input('features_id_raw'));
        $validated['is_active'] = $request->boolean('is_active');

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', "Layanan '{$service->title}' berhasil diperbarui.");
    }

    public function destroy(Service $service)
    {
        $title = $service->title;
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', "Layanan '{$title}' berhasil dihapus.");
    }

    protected function validateService(Request $request, ?int $id = null): array
    {
        return $request->validate([
            'slug' => 'nullable|string|max:100|unique:services,slug,' . $id,
            'category' => 'required|string|max:255',
            'category_id' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'title_id' => 'nullable|string|max:255',
            'tagline' => 'nullable|string|max:500',
            'tagline_id' => 'nullable|string|max:500',
            'image' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'description_id' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);
    }

    protected function parseLines(?string $text): array
    {
        if (empty($text)) {
            return [];
        }

        return array_values(array_filter(array_map('trim', explode("\n", str_replace("\r", "", $text)))));
    }
}
