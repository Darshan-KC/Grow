<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesInstructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_head',
        'meet_instruction',
    ];
}
