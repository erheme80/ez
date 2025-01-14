<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\University;  // Import University model

class ScholarshipController extends Controller
{
    public function index()
    {
        $scholarships = Scholarship::with('university')->get();  // Eager load 'university'
        return view('admin.scholarship.index', compact('scholarships'));
    }

    public function create()
    {
        $universities = University::all();  // Fetch all universities
        return view('admin.scholarship.create', compact('universities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',  // Validate university_id
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'eligibility' => 'nullable|string',
            'deadline' => 'nullable|date',
        ]);

        Scholarship::create([
            'university_id' => $request->university_id,  // Save university_id
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'eligibility' => $request->eligibility,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('admin.scholarship.index')->with('success', 'Scholarship added successfully.');
    }

    public function edit(Scholarship $scholarship)
    {
        $universities = University::all();  // Fetch all universities
        return view('admin.scholarship.edit', compact('scholarship', 'universities'));
    }

    public function update(Request $request, Scholarship $scholarship)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',  // Validate university_id
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'eligibility' => 'nullable|string',
            'deadline' => 'nullable|date',
        ]);

        $scholarship->update([
            'university_id' => $request->university_id,  // Update university_id
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'eligibility' => $request->eligibility,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('admin.scholarship.index')->with('success', 'Scholarship updated successfully.');
    }

    public function destroy(Scholarship $scholarship)
    {
        $scholarship->delete();
        return redirect()->route('admin.scholarship.index')->with('success', 'Scholarship deleted successfully.');
    }
}