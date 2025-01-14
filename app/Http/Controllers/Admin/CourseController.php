<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.course.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
        ]);

        Course::create([
            'name' => $request->name,
            'department_id' => $request->department_id,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.course.index')->with('success', 'Course added successfully.');
    }

    public function edit(Course $course)
    {
        $departments = Department::all();
        return view('admin.course.edit', compact('course', 'departments'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'description' => 'nullable|string',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
        ]);

        $course->update([
            'name' => $request->name,
            'department_id' => $request->department_id,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.course.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.course.index')->with('success', 'Course deleted successfully.');
    }
}