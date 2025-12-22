<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BenefitStoreRequest;
use App\Http\Requests\BenefitUpdateRequest;
use App\Models\Benefit;
use Illuminate\Support\Facades\Storage;

class BenefitController extends Controller
{
   
    public function index()
    {
        $benefits = Benefit::select('id', 'short_description', 'icon')
            ->orderBy('sort_order')
            ->get();

        return view('backend.basics-benefits.index', compact('benefits'));
    }

   
    public function create()
    {
        $benefits = Benefit::orderBy('sort_order')->get();

        return view('backend.basics-benefits.create', compact('benefits'));
    }

   
    public function store(BenefitStoreRequest $request)
    {
        $validated = $request->validated();

        foreach ($validated['benefifts'] as $index => $benefitData) {

            $iconPath = null;

            // Handle icon upload
            if (! empty($benefitData['icon'])) {
                $iconPath = $benefitData['icon']->store('benefits', 'public');
            }

            Benefit::create([
                'short_description' => $benefitData['short_description'],
                'icon' => $iconPath,
                'sort_order' => $index, 
            ]);
        }

        return redirect()
            ->route('admin.basics-benefits.index')
            ->with('success', 'Benefits saved successfully.');
    }

    public function edit($id)
    {
        $benefit = Benefit::findOrFail($id);
        return view('backend.basics-benefits.edit', compact('benefit'));
    }

    public function update(BenefitUpdateRequest $request, $id)
    {
        $validated = $request->validated();

        $benefit = Benefit::findOrFail($id);

        // Handle icon upload
        if (! empty($validated['icon'])) {
            if ($benefit->icon && Storage::disk('public')->exists($benefit->icon)) {
                Storage::disk('public')->delete($benefit->icon);
            }

            $iconPath = $validated['icon']->store('benefits', 'public');
            $benefit->icon = $iconPath;
        }

        $benefit->short_description = $validated['short_description'];
        $benefit->save();

        return redirect()
            ->route('admin.basics-benefits.index')
            ->with('success', 'Benefit updated successfully.');
    }

  
    public function destroy($id)
    {
        $benefit = Benefit::findOrFail($id);
        if ($benefit->icon && Storage::disk('public')->exists($benefit->icon)) {
            Storage::disk('public')->delete($benefit->icon);
        }

        $benefit->delete();

        return redirect()->route('admin.basics-benefits.index')
            ->with('success', 'Benefit deleted successfully.');
    }
}
