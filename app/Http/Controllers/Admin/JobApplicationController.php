<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateJobApplicationRequest;
use App\Models\JobApplication;
use Illuminate\Support\Facades\File;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::with('job')->latest()->get()->map(function ($application) {
            return [
                'id' => $application->id,
                'job' => [
                    'id' => $application->job->id,
                    'name' => $application->job->name
                ],
                'name' => $application->name,
                'phone' => $application->phone,
                'email' => $application->email,
                'github' => $application->github,
                'linkedin' => $application->linkedin,
                'about' => $application->about,
                'cv' => $application->cv,
                'status' => $application->status,
                'interview_date' => $application->interview_date,
                'interview_mark' => $application->interview_mark
            ];
        });

        return view('backend.job-applications.index', [
            'applications' => $applications
        ]);
    }

   public function viewCV($name)
{
     $application = JobApplication::where('name', $name)->firstOrFail();
    $filePath = public_path($application->cv);

    if (!file_exists($filePath)) {
        abort(404, 'CV file not found.');
    }

    return response()->file($filePath, [
        'Content-Type' => mime_content_type($filePath),
        'Content-Disposition' => 'inline'
    ]);
}

    public function update(UpdateJobApplicationRequest $request, $id)
    {
        $application = JobApplication::findOrFail($id);
        $data = $request->validated();

        // Reset fields based on status
        /*switch ($data['status']) {
            case 'shortlisted':
                $data['interview_date'] = null;
                $data['interview_mark'] = null;
                $data['hired_date'] = null;
                break;
            case 'interview_scheduled':
                $data['interview_mark'] = null;
                $data['hired_date'] = null;
                break;
            case 'interviewed':
                $data['hired_date'] = null;
                break;
        }*/

        $application->update($data);

        return redirect()->route('admin.job-applications')->with('success', 'Application updated successfully.');
    }

    // delete job application logic
public function destroy($id)
{
    $application = JobApplication::findOrFail($id);

    if (!empty($application->cv)) {
        $fullPath = public_path($application->cv);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }

    $application->delete();

    return redirect()
        ->route('admin.job-applications')
        ->with('success', 'Application deleted successfully.');
}

}
