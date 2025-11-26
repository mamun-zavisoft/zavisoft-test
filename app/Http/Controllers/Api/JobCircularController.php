<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobCircular;
use Illuminate\Http\JsonResponse;

class JobCircularController extends Controller
{
    public function index(): JsonResponse
    {
        try {
        $careers = JobCircular::select([
            'id', 
            'name',
            'type',
            'location_type',
            'experience',
            'salary_range',
            'address',
            'description',
            'responsibilities',
            'requirement',
            'about_company',
            'created_at'
        ])->get();
        
        return response()->json([
            'success' => true,
            'data' => $careers,
            'message' => 'Careers retrieved successfully.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to retrieve careers.',
            'error' => $e->getMessage()
        ], $e->getCode());
    }
    }

    public function show($id): JsonResponse
    {
        try {
            $career = JobCircular::find($id);
            
            if (!$career) {
                return response()->json([
                    'success' => false,
                    'message' => 'Career not found.'
                ], 404);
            }
            
            return response()->json([
                'success' => true,
                'data' => $career,
                'message' => 'Career retrieved successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve career.',
                'error' => $e->getMessage()
            ], $e->getCode());
        }
    }

}
