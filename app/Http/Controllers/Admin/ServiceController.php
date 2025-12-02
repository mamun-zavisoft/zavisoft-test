<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->select('id', 'category_id','heading', 'short_description', 'service_image')->get();

        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::select('id', 'name')->orderBy('name')->get();
        return view('backend.services.create', compact('categories'));
    }

    public function edit($id)
    {
        $service = Service::select('id', 'category_id', 'heading', 'short_description', 'service_image')->where('id', $id)->first();
        $categories = ServiceCategory::select('id', 'name')->orderBy('name')->get();
        return view('backend.services.edit', compact('service', 'categories'));
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('service_image')) {
            $folder = 'services';

            if (!Storage::disk('public')->exists($folder)) {
                Storage::disk('public')->makeDirectory($folder);
            }

            $data['service_image'] = $request->file('service_image')->store($folder, 'public');
        }

        Service::create($data);

        return redirect()->route('admin.service.index')->with('success', 'Service created successfully.');
    }

    public function update(ServiceRequest $request, $id)
    {
        $data = $request->validated();

        $service = Service::findOrFail($id);

        if ($request->hasFile('service_image')) {
            $folder = 'services';

            // Ensure folder exists
            if (!Storage::disk('public')->exists($folder)) {
                Storage::disk('public')->makeDirectory($folder);
            }

            // Delete old image if exists
            if ($service->service_image) {
                Storage::disk('public')->delete($service->service_image);
            }

            // Store new image
            $data['service_image'] = $request->file('service_image')->store($folder, 'public');
        }

        $service->update($data);

        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }
}
