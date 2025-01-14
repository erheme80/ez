<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    
    protected $table = 'scholarships';

    protected $fillable = [
        'university_id', 
        'name',
        'amount',
        'description',
        'eligibility',
        'deadline', // Add university_id to fillable properties
    ];

    // Define the relationship to the University model
    public function university()
    {
        return $this->belongsTo(University::class);  // A scholarship belongs to a university
    }
}