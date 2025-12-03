<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::select('id', 'title')->orderByDesc('id')->get();
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

        if ($request->hasFile('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('projects/banners', 'public');
        }

        if ($request->hasFile('gallery_image')) {
            $data['gallery_image'] = $request->file('gallery_image')->store('projects/galleries', 'public');
        }

        Project::create($data);

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::select('id', 'category_id','title', 'about_project', 'business_result', 'banner_image', 'gallery_image', 'challenge', 'solution', 'final_impact', 'contributors', 'platforms')
            ->where('id', $id)
            ->first();

        $categories = ProjectCategory::select('id', 'name')->orderBy('name')->get();

        return view('backend.projects.edit', compact('project','categories'));
    }

    public function update(ProjectRequest $request, $id)
    {
            $data = $request->validated();

            $project = Project::findOrFail($id);

            // Delete and replace banner image
            if ($request->hasFile('banner_image')) {
                if ($project->banner_image && Storage::disk('public')->exists($project->banner_image)) {
                    Storage::disk('public')->delete($project->banner_image);
                }
                $data['banner_image'] = $request->file('banner_image')->store('projects/banners', 'public');
            }

            // Delete and replace gallery image
            if ($request->hasFile('gallery_image')) {
                if ($project->gallery_image && Storage::disk('public')->exists($project->gallery_image)) {
                    Storage::disk('public')->delete($project->gallery_image);
                }
                $data['gallery_image'] = $request->file('gallery_image')->store('projects/galleries', 'public');
            }

            $project->update($data);

            return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }
}
