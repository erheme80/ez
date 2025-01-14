<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tuition;
use App\Models\University; // Use University instead of Department

class TuitionController extends Controller
{
    public function index()
    {
        $tuitionFees = Tuition::with('university')->get(); // Eager load 'university'
        return view('admin.tuition.index', compact('tuitionFees'));
    }
    public function create()
    {
        $universities = University::all(); // Fetch all universities
        return view('admin.tuition.create', compact('universities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id', // Validate university_id
            'amount' => 'required|numeric|min:0',
            'currency' => 'required|string|max:3',
            'description' => 'nullable|string',
        ]);

        Tuition::create([
            'university_id' => $request->university_id, // Save university_id
            'amount' => $request->amount,
            'currency' => $request->currency,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.tuition.index')->with('success', 'Tuition added successfully.');
    }

    public function edit(Tuition $tuition)
    {
        $universities = University::all(); // Fetch all universities
        return view('admin.tuition.edit', compact('tuition', 'universities'));
    }

    public function update(Request $request, Tuition $tuition)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id', // Validate university_id
            'amount' => 'required|numeric|min:0',
            'currency' => 'required|string|max:3',
            'description' => 'nullable|string',
        ]);

        $tuition->update([
            'university_id' => $request->university_id, // Update university_id
            'amount' => $request->amount,
            'currency' => $request->currency,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.tuition.index')->with('success', 'Tuition updated successfully.');
    }

    public function destroy(Tuition $tuition)
    {
        $tuition->delete();
        return redirect()->route('admin.tuition.index')->with('success', 'Tuition deleted successfully.');
    }
}