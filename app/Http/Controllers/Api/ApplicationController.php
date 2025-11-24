<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
   public function store(ApplicationRequest $request)
    {
        // Handle file upload
        $cvPath = null;

        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv', 'public');
        }

        // Store in database
        $application = Application::create([
            'name' => $request->name,
            'email' => $request->email,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
            'about' => $request->about,
            'cv' => $cvPath
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Your application has been received. We will contact you shortly regarding the next steps.',
            'data' => $application
        ]);
    }
}
