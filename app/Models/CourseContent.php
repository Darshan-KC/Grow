<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;
    protected $fillable = ['title','video'];
    public function course_relations(){
        return $this->hasMany(CourseRelation::class,'course_content_id','id');
    }
}
