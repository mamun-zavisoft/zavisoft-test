<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
   public function index()
    {
        try {
             $teams = Team::select('id', 'name', 'designation', 'image', 'linkedin')
                ->where('status', 1)
                ->where('sl_no', '!=', 0)
                ->orderBy('sl_no', 'asc')
                ->get();
            $teams->transform(function ($team) {
                if ($team->image) {
                    $team->image = asset('storage/' . $team->image);
                }
                return $team;
            });

            return response()->json([
                'success' => true,
                'data' => $teams,
                'message' => 'Team members data retrieved successfully.'
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve team members.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


   public function ceoInfo() 
{
    try {
        // Get CEO where sl_no = 0
        $ceo = Team::select('id', 'name', 'designation', 'image', 'linkedin', 'title', 'short_description')
            ->where('status', 1)
            ->where('sl_no', 0) 
            ->first();
        
        if (!$ceo) {
            return response()->json([
                'success' => false,
                'message' => 'CEO information not found.',
                'data' => null
            ], 404);
        }
        
        // Transform image URL
        if ($ceo->image) {
            $ceo->image = asset('storage/' . $ceo->image);
        }

        return response()->json([
            'success' => true,
            'data' => $ceo,
            'message' => 'CEO data retrieved successfully.'
        ], 200);
        
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to retrieve CEO data.',
            'error' => $e->getMessage()
        ], 500);
    }
}
  }
