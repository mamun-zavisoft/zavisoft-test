<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    public function serviceCategories()
    {
        $data = ServiceCategory::select('id', 'name')->orderBy('name')->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Service categories retrieved successfully.'
        ]);
    }

    public function services()
    {
       $data = Service::select('id', 'category_id','heading', 'short_description', 'service_image')->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Services retrieved successfully.'
        ]);
    }

    public function categoryWiseServices($id)
    {
        $data = Service::select('id', 'category_id','heading', 'short_description', 'service_image')->where('category_id',$id)->first();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Services retrieved successfully.'
        ]);
    }
}
