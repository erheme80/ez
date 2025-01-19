<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $table = 'universities';

    protected $fillable = [
        'name',
        'thumbnail',
        'description',
        'location',
        'established_at',
        'ranking',
        'student_population',
        'faculty_count',
        'contact_email',
        'contact_phone',
        'website',
        'address',
        'admission_requirements',
        'status',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
