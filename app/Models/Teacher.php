<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=['course_id','instructor_id','category'];
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'instructor_id','id');
    }
}
