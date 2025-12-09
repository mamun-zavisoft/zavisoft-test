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
        $categoryName = ProjectCategory::where('id', $request->category_id)->value('name');

        $data = $request->validated();
        $data['slug'] = Str::slug($categoryName). '-' . Str::slug($data['title']);



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

        dd( $data);

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
    
    if ($request->hasFile('banner_image')) {
        if ($project->banner_image && Storage::disk('public')->exists($project->banner_image)) {
            Storage::disk('public')->delete($project->banner_image);
        }
        $data['banner_image'] = $request->file('banner_image')->store('projects/banners', 'public');
    }

    

    // A) Load existing images
    $oldImages = json_decode($project->gallery_image ?? '[]', true);

    // B) Get removed image names from hidden field
    $removedImages = json_decode($request->removed_images ?? '[]', true);

    // C) Delete removed images from storage + remove from array
    if (!empty($removedImages)) {
        foreach ($removedImages as $img) {
            if (($key = array_search($img, $oldImages)) !== false) {
                unset($oldImages[$key]); 
                Storage::disk('public')->delete($img); 
            }
        }
    }

    // D) Re-index array
    $finalImages = array_values($oldImages);

    // E) Store new uploaded images
    if ($request->hasFile('new_gallery_images')) { 
        foreach ($request->file('new_gallery_images') as $file) {
            $path = $file->store('projects/galleries', 'public');
            $finalImages[] = $path;
        }
    }

    // F) Save merged old + new images
    $data['gallery_image'] = json_encode($finalImages);
    $project->update($data);

    return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
}
}
