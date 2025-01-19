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
        $uni = University::whereIn('id', [1, 2, 3])->get();

        return view('welcome', compact('universities','uni'));
    }
    public function show($id)
    {
        $university = University::with('departments')->findOrFail($id);
        return view('university', compact('university'));

        $university = University::findOrFail($id);

        return view('universities.show', compact('university'));
    }

}