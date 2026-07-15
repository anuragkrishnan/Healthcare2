<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function index()
    {
        $consultants = Consultant::orderBy('doctorId', 'DESC')->get();

        return view('consultants.index', compact('consultants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'nullable|email',
            'contactNo' => 'nullable|max:20',
            'speciality' => 'nullable|max:100',
        ]);

        Consultant::addConsultant($request);

        return redirect()
            ->route('master.consultants.index')
            ->with('success', 'Consultant added successfully.');
    }
}