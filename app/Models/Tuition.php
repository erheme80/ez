<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    use HasFactory;
    
    protected $table = 'tuition_fees';

    protected $fillable = [
        'university_id', // Changed department_id to university_id
        'amount',
        'currency',  // If you need to store the currency as well, include it in the fillable
        'description',
    ];

    // Relationship with the University model
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}