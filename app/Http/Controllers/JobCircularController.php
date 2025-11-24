<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobCircularRequest;
use App\Models\JobCircular;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JobCircularController extends Controller
{
     public function index(): View
    {
        $careers=JobCircular::all();
        return view('backend.settings.careers.index',compact('careers'));
    }

    public function create(): View
    {
        return view('backend.settings.careers.create');
    }
   public function store(JobCircularRequest $request): RedirectResponse
    {
        // validated() returns only the keys from rules()
        $data = $request->validated();

        JobCircular::create($data);

      return redirect()->route('admin.settings.careers.index')->with('success', 'Job posted successfully.');
    }

}
