<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizRelation extends Model
{
    use HasFactory;
    protected $fillable=['quiz_id','course_id','user_id'];
    public function quiz(){
        return $this->belongsTo(Course::class,'quiz_id','id');
    }
    public function course(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
