<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobCircularRequest;
use App\Models\JobCircular;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use PhpParser\Node\Stmt\TryCatch;

class JobCircularController extends Controller
{
     public function index(): View
    {
        // $careers=JobCircular::all();
        $careers=JobCircular::select('id','name','type','experience','salary_range','address','description','responsibilities','requirement','about_company')->get();
        return view('backend.settings.careers.index',compact('careers'));
    }

    public function create(): View
    {
        return view('backend.settings.careers.create');
    }
   public function store(JobCircularRequest $request): RedirectResponse
    {  

        try {
                $data = $request->validated();

                JobCircular::create($data);
                return redirect()->route('admin.settings.careers.index')->with('success', 'Job posted successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

     
    }

}
