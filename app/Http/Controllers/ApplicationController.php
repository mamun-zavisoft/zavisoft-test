<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;

class ApplicationController extends Controller
{


     public function index()
    {
        $applications = Application::with('job')->latest()->get()->map(function ($application) {
            return [
                'id' => $application->id,
                'job' => [
                    'id' => $application->job->id,
                    'name' => $application->job->name
                ],
                'name' => $application->name,
                'email' => $application->email,
                'github' => $application->github,
                'linkedin' => $application->linkedin,
                'about' => $application->about,
                'cv' => $application->cv
            ];
        });

        return view('backend.applications.index', [
            'applications' => $applications
        ]);
    }

   public function downloadCV($id)
{
    $application = Application::findOrFail($id);
    $filePath = public_path($application->cv);
    
    if (!file_exists($filePath)) {
        return redirect()->back()->with('error', 'CV file not found.');
    }
    
    $customName = $application->name . '_CV.pdf';
    
    return response()->download($filePath, $customName);
}

}
