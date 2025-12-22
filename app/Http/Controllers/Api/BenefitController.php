<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Benefit;

class BenefitController extends Controller
{
   
    public function index()
    {
       $benefits = Benefit::select('id', 'short_description', 'icon')
        ->orderBy('sort_order', 'asc')
        ->get();

    $benefits = $benefits->map(function ($benefit) {
        $benefit->icon_url = $benefit->icon 
            ? asset('storage/' . $benefit->icon) 
            : null;
        
        return $benefit;
    });

    return response()->json([
        'success' => true,
        'data'    => $benefits,
        'message' => 'Benefits retrieved successfully'
    ]);
    }

}
