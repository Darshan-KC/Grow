<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRelation extends Model
{
    use HasFactory;
    protected $fillable=['course_id','course_content_id'];
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function CourseContent(){
        return $this->belongsTo(CourseContent::class,'course_content_id','id');
    }
}
