<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
       $teams = Team::select('id', 'sl_no', 'name', 'designation', 'image', 'linkedin', 'status')
        ->orderBy('status', 'desc') // 1 first, 0 last
        ->orderBy('sl_no', 'asc')
        ->get();
        return view('backend.teams.index', compact('teams'));
    }

    public function create()
    {
        $lastSlNo = Team::max('sl_no');
        $nextSlNo = $lastSlNo ? $lastSlNo + 1 : 0;

        return view('backend.teams.create',compact('nextSlNo'));
    }

    public function store(TeamRequest $request)
    {
        $data = $request->validated();

      

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('teams', 'public');
        }

        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member created successfully.');
    }

    public function edit(int $id)
    {
        $team = Team::findOrFail($id);
        return view('backend.teams.edit', compact('team'));
    }

    public function update(TeamRequest $request, $id)
    {
         $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        $team = Team::findOrFail($id);

        if ($request->hasFile('image')) {
            $folder = 'teams';

            // Ensure folder exists
            if (!Storage::disk('public')->exists($folder)) {
                Storage::disk('public')->makeDirectory($folder);
            }

            // Delete old image if exists
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store($folder, 'public');
        }

        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team updated successfully.');
    }



    public function toggleStatus( Team $team): \Illuminate\Http\JsonResponse
    {
        $team->status = $team->status == 1 ? 0 : 1;
        $team->save();

        return response()->json([
            'success' => true,
            'status' => $team->status,
        ]);
    }
}
