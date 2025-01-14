<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    
    protected $table = 'departments';

    protected $fillable = [
        'name',
        'university_id',
        'description',
    ];

    // Relationship with University
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}