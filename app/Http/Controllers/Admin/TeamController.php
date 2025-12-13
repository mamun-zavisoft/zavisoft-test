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
        $teams = Team::latest()->get();
        return view('backend.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('backend.teams.create');
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
         $data = $request->validated();
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

    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();
        return redirect()->route('admin.teams.index')->with('success', 'Team deleted successfully.');
    }
}
