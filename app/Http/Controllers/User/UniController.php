<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;

class Unicontroller extends Controller
{

    public function index()
    {
        $universities = University::all();
        return view('welcome', compact('universities'));
    }
    public function show($id)
    {
        // Find the university by ID
        $university = University::findOrFail($id);

        // Return the view and pass the university data
        return view('universities.show', compact('university'));
    }

}