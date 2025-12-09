<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->select('category_id', 'id', 'title')->orderByDesc('id')->get();
        return view('backend.projects.index', compact('projects'));
    }

    public function create()
    {
        $categories = ProjectCategory::select('id', 'name')->orderBy('name')->get();
        return view('backend.projects.create', compact('categories'));
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('projects/banners', 'public');
        }

        if ($request->hasFile('gallery_image')) {
            $galleryPaths = [];

            foreach ($request->file('gallery_image') as $image) {
                $galleryPaths[] = $image->store('projects/galleries', 'public');
            }

            $data['gallery_image'] = json_encode($galleryPaths);
        }

        Project::create($data);

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::select('id', 'category_id', 'title', 'about_project', 'business_result', 'banner_image', 'gallery_image', 'challenge', 'solution', 'final_impact', 'contributors', 'platforms')
            ->where('id', $id)
            ->first();

        $categories = ProjectCategory::select('id', 'name')->orderBy('name')->get();

        return view('backend.projects.edit', compact('project', 'categories'));
    }

    public function update(ProjectRequest $request, $id)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $project = Project::findOrFail($id);

        // Delete and replace banner image
        if ($request->hasFile('banner_image')) {
            if ($project->banner_image && Storage::disk('public')->exists($project->banner_image)) {
                Storage::disk('public')->delete($project->banner_image);
            }
            $data['banner_image'] = $request->file('banner_image')->store('projects/banners', 'public');
        }

        if ($request->hasFile('gallery_image') || $request->filled('remove_gallery_images')) {
            // Start with existing images
            $existingImages = json_decode($project->gallery_image, true) ?? [];

            // Remove selected old images
            if ($request->filled('remove_gallery_images')) {
                foreach ($request->input('remove_gallery_images') as $removeImage) {
                    if (Storage::disk('public')->exists($removeImage)) {
                        Storage::disk('public')->delete($removeImage);
                    }
                    $existingImages = array_diff($existingImages, [$removeImage]);
                }
            }

            // Add new uploaded images
            if ($request->hasFile('gallery_image')) {
                foreach ($request->file('gallery_image') as $image) {
                    $existingImages[] = $image->store('projects/galleries', 'public');
                }
            }

            // Save merged set
            $data['gallery_image'] = json_encode(array_values($existingImages));
        }

        $project->update($data);

        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }
}
