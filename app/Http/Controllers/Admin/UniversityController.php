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
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
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
        $data = $request->except('thumbnail');  

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/university/thumbnail/'), $filename);
            $data['thumbnail'] = 'uploads/university/thumbnail/' . $filename;
        } else {
            $data['thumbnail'] = null;
        }

        University::create($data);
     
        return redirect()->route('admin.university.index')->with('success', 'University added successfully.');
    }
    
}
