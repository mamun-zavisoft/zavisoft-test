<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobCircularRequest;
use App\Models\JobCircular;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class JobCircularController extends Controller
{
    public function index(): View
    {
        $careers = JobCircular::select('id', 'name', 'type', 'location_type', 'experience', 'salary_range',
            'description', 'responsibilities', 'requirement', 'about_company','status')->get();

        return view('backend.careers.index', compact('careers'));
    }

    public function create(): View
    {
        return view('backend.careers.create');
    }

    public function store(JobCircularRequest $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['name']);

            JobCircular::create($data);
            return redirect()->route('admin.careers.index')->with('success', 'Job posted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $data = JobCircular::findOrFail($id);

        return view('backend.careers.edit', compact('data'));
    }

    public function update(JobCircularRequest $request, $id): RedirectResponse
    {
        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['name']);

            // Update the existing record
            $jobCircular = JobCircular::findOrFail($id);
            $jobCircular->update($data);


            return redirect()
                ->route('admin.careers.index')
                ->with('success', 'Job updated successfully.');
        } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    public function toggleStatus(JobCircular $jobCircular): \Illuminate\Http\JsonResponse
    {
        $jobCircular->status = $jobCircular->status == 1 ? 0 : 1;
        $jobCircular->save();

        return response()->json([
            'success' => true,
            'status' => $jobCircular->status,
        ]);
    }
}
