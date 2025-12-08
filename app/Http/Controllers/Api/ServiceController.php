<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    public function serviceCategories()
    {
        $data = ServiceCategory::select('id', 'name','slug')->orderBy('name')->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Service categories retrieved successfully.'
        ]);
    }

    public function services()
    {
        $data = Service::select('id','slug','category_id','heading','short_description','service_image')->with(['Category' => fn($q) => $q->select('id','slug')])->get();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Services retrieved successfully.'
        ]);
    }

    public function categoryWiseServices($slug)
    {
        $categorySlug = ServiceCategory::select( 'id','slug')->where('slug', $slug)->first();

        $data = Service::select('id', 'category_id','heading', 'slug','short_description', 'service_image')->where('category_id',$categorySlug->id)->first();

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Services retrieved successfully.'
        ]);
    }
}
