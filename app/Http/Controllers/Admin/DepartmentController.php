<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\University;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }

    public function create()
    {
        $universities = University::all();
        return view('admin.department.create', compact('universities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'university_id' => 'required|exists:universities,id',
            'description' => 'nullable|string',
        ]);

        Department::create([
            'name' => $request->name,
            'university_id' => $request->university_id,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.department.index')->with('success', 'Department added successfully.');
    }

    public function edit(Department $department)
    {
        $universities = University::all();
        return view('admin.department.edit', compact('department', 'universities'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'university_id' => 'required|exists:universities,id',
            'description' => 'nullable|string',
        ]);

        $department->update([
            'name' => $request->name,
            'university_id' => $request->university_id,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.department.index')->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('admin.department.index')->with('success', 'Department deleted successfully.');
    }
}