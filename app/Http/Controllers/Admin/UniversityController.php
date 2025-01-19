<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;

class UniversityController extends Controller
{
    public function index()
    {
        $universities=University::all();
        return view('admin.university.index',compact('universities'));
    }


    public function create()
    {
        return view('admin.university.create');
    }
    public function show($id)
    {
        $university = University::findOrFail($id);  // Find the university by its ID
        return view('admin.university.show', compact('university'));  // Pass the university to the view
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData =request()->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'established_at' => 'nullable|date',
            'ranking' => 'nullable|integer',
            'tuition_fee' => 'nullable|numeric|min:0',
            'student_population' => 'nullable|integer|min:0',
            'faculty_count' => 'nullable|integer|min:0',
            'courses_offered' => 'nullable|string',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'address' => 'nullable|string|max:255',
            'admission_requirements' => 'nullable|string',
            'scholarships' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);
  

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/university/thumbnail/'), $filename);
            $data['thumbnail'] = 'uploads/university/thumbnail/' . $filename;
        } else {
            $data['thumbnail'] = null;
        }

        University::create([
            'name' => $validatedData['name'],
            'thumbnail' => $data['thumbnail'], 
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'established_at' => $validatedData['established_at'] ?? null,
            'ranking' => $validatedData['ranking'] ?? null,
            'tuition_fee' => $validatedData['tuition_fee'] ?? null,
            'student_population' => $validatedData['student_population'] ?? null,
            'faculty_count' => $validatedData['faculty_count'] ?? null,
            'courses_offered' => $validatedData['courses_offered'] ?? null,
            'contact_email' => $validatedData['contact_email'] ?? null,
            'contact_phone' => $validatedData['contact_phone'] ?? null,
            'website' => $validatedData['website'] ?? null,
            'address' => $validatedData['address'] ?? null,
            'admission_requirements' => $validatedData['admission_requirements'] ?? null,
            'scholarships' => $validatedData['scholarships'] ?? null,
            'status' => $validatedData['status'],
        ]);
     
        return redirect()->route('admin.university.index')->with('success', 'University added successfully.');
    }
    
}
