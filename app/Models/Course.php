<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'feature_image', 'duration', 'description'];

    public function course_relations()
    {
        return $this->hasMany(CourseRelation::class, 'course_id', 'id');
    }
    public function teachers()
    {
        return $this->hasOne(Teacher::class, 'course_id', 'id');
    }
    public function quiz_relations()
    {
        return $this->hasMany(QuizRelation::class, 'course_id', 'id');
    }
    public function notes()
    {
        return $this->hasMany(Note::class, 'course_id', 'id');
    }
}
