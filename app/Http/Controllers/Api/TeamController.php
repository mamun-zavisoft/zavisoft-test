<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
   public function index()
    {
        try {
           $teams = Team::select('id', 'name', 'designation', 'image', 'linkedin', 'status', 'sl_no')
                    ->where('status', 1)
                    ->orderBy('sl_no', 'asc')
                    ->get();
            
            // Fix image URL if stored in storage
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
  
}
