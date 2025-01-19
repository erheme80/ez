<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Scholarship;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('admin.university.index', compact('universities'));
    }

    public function create()
    {
        return view('admin.university.create');
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('admin.university.edit', compact('university'));
    }

    public function update(Request $request, $id)
    {
        // Find the university by its ID
        $university = University::findOrFail($id);
        
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'established_at' => 'nullable|date',
            'ranking' => 'nullable|integer',
            'student_population' => 'nullable|integer|min:0',
            'faculty_count' => 'nullable|integer|min:0',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'address' => 'nullable|string|max:255',
            'admission_requirements' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle the thumbnail file upload if it's present in the request
        if ($request->hasFile('thumbnail')) {
            // Delete the old thumbnail if it exists (optional but recommended for clean up)
            if ($university->thumbnail && file_exists(public_path($university->thumbnail))) {
                unlink(public_path($university->thumbnail));
            }

            // Upload the new thumbnail
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/university/thumbnail/'), $filename);
            $validatedData['thumbnail'] = 'uploads/university/thumbnail/' . $filename;
        }

        // Update the university record with the validated data
        $university->update($validatedData);

        // Redirect back to the index with a success message
        return redirect()->route('admin.university.index')->with('success', 'University updated successfully.');
    }
    public function show($id)
    {
        $university = University::find($id);

        // Check if the university is not found
        if (!$university) {
            return redirect()->route('universities.index')->with('error', 'University not found.');
        }

        return view('university', data: compact('university'));
    }
    public function showScholarships($id)
    {
        $university = University::findOrFail($id);
        $scholarships = Scholarship::where('university_id', $id)->get(); // Assuming Scholarship model has a university_id field
        
        return view('scholarship', compact('university', 'scholarships'));
    }
    public function showDepartments($id)
    {
        $university = University::find($id);
        $departments = $university->departments; // Assuming there is a relationship set up in your model
        return view('university.departments', compact('university', 'departments'));
    }

    public function showCourses($universityId, $departmentId)
    {
        // Find the university by its ID
        $university = University::findOrFail($universityId);

        // Find the department by its ID within the university
        $department = $university->departments()->findOrFail($departmentId);

        // Get the courses associated with the department, ensuring it's a collection
        $courses = $department->courses ?: collect(); // Fallback to an empty collection if null

        // Return the view with the university, department, and courses data
        return view('courses.index', compact('university', 'department', 'courses'));
    }



    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'established_at' => 'nullable|date',
            'ranking' => 'nullable|integer',
            'student_population' => 'nullable|integer|min:0',
            'faculty_count' => 'nullable|integer|min:0',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'address' => 'nullable|string|max:255',
            'admission_requirements' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        // Handle file upload for thumbnail
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/university/thumbnail/', $filename);
            $data['thumbnail'] = 'uploads/university/thumbnail/' . $filename;
        } else {
            $data['thumbnail'] = null;  // If no file uploaded, set as null
        }

        // Create the university entry
        University::create([
            'name' => $validatedData['name'],
            'thumbnail' => $data['thumbnail'],
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'established_at' => $validatedData['established_at'] ?? null,
            'ranking' => $validatedData['ranking'] ?? null,
            'student_population' => $validatedData['student_population'] ?? null,
            'faculty_count' => $validatedData['faculty_count'] ?? null,
            'contact_email' => $validatedData['contact_email'] ?? null,
            'contact_phone' => $validatedData['contact_phone'] ?? null,
            'website' => $validatedData['website'] ?? null,
            'address' => $validatedData['address'] ?? null,
            'admission_requirements' => $validatedData['admission_requirements'] ?? null,
            'status' => $validatedData['status'],
        ]);

        // Redirect back with success message
        return redirect()->route('admin.university.index')->with('success', 'University added successfully.');
    }
}
