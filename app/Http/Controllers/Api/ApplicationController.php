<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function store(ApplicationRequest $request)
    {
        $cvPath = null;
        if ($request->hasFile('cv')) {

            $file = $request->file('cv');
            $fileName = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path('cv'), $fileName);
            $cvPath = 'cv/' . $fileName;
        }

        // Store in database
        $application = Application::create([
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
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
