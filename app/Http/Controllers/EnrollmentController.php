<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseContent;
use App\Models\CourseRelation;
use Illuminate\Http\Request;
use App\Models\enroll;
use App\Models\SiteConfig;
use App\Models\SiteContact;
use App\Models\HomeHero;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function enroll(){
        $enroll=enroll::with('course')->where('user_id',auth::user()->id)->get();
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        return view('frontend.enrollment_course.enroll_courses',compact('enroll','home','siteConfig','siteContact'));
    }
    public function enroll_course_tutorial(Request $request,string $id){
        $home=HomeHero::first();
        $siteContact=SiteContact::first();

        $courseContent=CourseContent::where('id',$id)->first();
        $siteConfig=SiteConfig::first();
        $enroll=enroll::where('id',$id)->first();
        return view('frontend.enrollment_course.enroll_coursetutorial',compact('enroll','courseContent','home','siteConfig','siteContact'));
    }
    public function enroll_innercourses(Request $request,string $id){
        $home=HomeHero::first();
        $courseContent=CourseRelation::with('courseContent')->where('course_id',$id)->get();
        // $courseContent=CourseContent::with('course_relations')->where('course_id',$id)->get();
        $course=Course::where('id',$id)->first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        return view('frontend.enrollment_course.enroll_innercourses',compact('home','course','courseContent','siteConfig','siteContact'));
    }
    // public function live_session(){
    //     return view('frontend.enrollment_course.enroll_courses');
    // }
}
