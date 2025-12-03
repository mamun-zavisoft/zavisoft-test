<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\ContactUs;
use App\Models\JobCircular;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index', [
            'jobCount'     => JobCircular::count(),
            'cvCount'      => JobApplication::count(),
            'messageCount' => ContactUs::count(),
            'projectCount' => 30,
        ]);
    }
}
