<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use Illuminate\Support\Facades\App;

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
    //  public function getJobApplications($jobId)
    // {
    //     try {
    //         $jobs = Application::where('job_id', $jobId)->get()->map(function ($application) {
    //             return [
    //                 'id' => $application->id,
    //                 'job' => ['id' => $application->job->id, 'name' => $application->job->name],
    //                 'name' => $application->name,
    //                 'email' => $application->email,
    //                 'github' => $application->github,
    //                 'linkedin' => $application->linkedin,
    //                 'about' => $application->about,
    //                 'cv' => $application->cv,
    //             ];
    //         });
    //         return response()->json([
    //             'status' => true,
    //             'data' => $jobs
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Job not found.',
    //             'error' => $e->getMessage()
    //         ], 404);
    //     }
    // }
}
