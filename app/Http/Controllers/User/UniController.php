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

        $university = University::findOrFail($id);

        return view('universities.show', compact('university'));
    }

}