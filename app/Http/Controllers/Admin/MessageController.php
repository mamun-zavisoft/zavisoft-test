<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ContactUs;

class MessageController extends Controller
{
    public function index()
    {
        $data = ContactUs::select('name','email','service_name','project_details','created_at')->orderBy('id','desc')->get();

        return view('backend.message.index', [
            'data' => $data
        ]);
    }
}
