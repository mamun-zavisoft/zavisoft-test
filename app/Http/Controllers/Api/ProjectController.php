<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Project::select( 'id','category_id','title', 'about_project', 'business_result', 'banner_image', 'gallery_image', 'challenge', 'solution', 'final_impact', 'contributors', 'platforms')->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Projects retrieved successfully.'
        ]);
    }

    public function projectCategories()
    {
        $data = ProjectCategory::select('id', 'name')->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Project category retrieved successfully.'
        ]);
    }

    public function categoryWiseProjects($id)
    {
        $data = Project::select( 'category_id','title', 'about_project', 'business_result', 'banner_image', 'gallery_image', 'challenge', 'solution', 'final_impact', 'contributors', 'platforms')
            ->where('category_id', $id)->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Category wise project  retrieved successfully.'
        ]);
    }

    public function ProjectsDetails($id)
{
    $project = Project::select(
        'id',
        'title',
        'category_id',
        'about_project',
        'business_result',
        'banner_image',
        'gallery_image',
        'challenge',
        'solution',
        'final_impact',
        'contributors',
        'platforms'
    )
    ->where('id', $id)
    ->first();

    if (!$project) {
        return response()->json([
            'success' => false,
            'message' => 'Project not found.'
        ], 404);
    }

    return response()->json([
        'success' => true,
        'data' => $project,
        'message' => 'Project details retrieved successfully.'
    ]);
}

}
