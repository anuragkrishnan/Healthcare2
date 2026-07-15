<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speciality;


class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $specialities = Speciality::where('status',  Speciality::ACTIVE)
                    ->orderBy('speciality_name')
                    ->get();
            }
        } catch (\Throwable $e) {

            $specialities = collect();
        }
        return view('speciality.index', compact('specialities'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'speciality_short_code' => 'nullable|max:20',
            'speciality_name' => 'required|max:100|unique:speciality,speciality_name',
        ]);

        Speciality::create([
            'speciality_short_code' => $validated['speciality_short_code'],
            'speciality_name'       => $validated['speciality_name'],
            'status'                => Speciality::ACTIVE
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Speciality added successfully.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $speciality = Speciality::findOrFail($id);

        return response()->json($speciality);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'speciality_short_code_edit' =>
            'nullable|max:20,' . $id,
            'speciality_name_edit' =>
            'required|max:100|unique:speciality,speciality_name,' . $id,
        ]);

        $speciality = Speciality::findOrFail($id);

        $speciality->update([
            'speciality_short_code' => $request->speciality_short_code_edit,
            'speciality_name' => $request->speciality_name_edit
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Speciality updated successfully.'
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $speciality = Speciality::findOrFail($id);

        $speciality->update([
            'status' => Speciality::INACTIVE
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Speciality deleted successfully.'
        ]);
    }
}
