<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speciality;
use Illuminate\Validation\Rule;


class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $specialities = Speciality::all();

            return view('speciality.index', compact('specialities'));
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'speciality_short_code' => 'required|max:20|unique:speciality,speciality_short_code',
            'speciality_name' => 'required|max:100|unique:speciality,speciality_name',
        ]);

        Speciality::create([
            'speciality_short_code' => $validated['speciality_short_code'],
            'speciality_name'       => $validated['speciality_name'],
            'status'                => 1
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

        response()->json($speciality);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
