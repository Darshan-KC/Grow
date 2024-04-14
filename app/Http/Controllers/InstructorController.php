<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\SiteConfig;
use App\Models\SiteContact;
use App\Models\CoursesInstructor;
use App\Models\AboutUs;
use App\Models\User;
use App\Models\HomeHero;

class InstructorController extends Controller
{
    //
    public function dashboard()
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        return view('frontend.instructor.instructor_dashboard',compact('home','siteContact','siteConfig','aboutUs'));
    }
    public function course(Request $request, string $id)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        $course = Course::where('id', $id)->with('teachers')->first();
        return view('frontend.instructor.view_course', compact('course','home','siteContact','siteConfig','aboutUs','course_instructor'));
    }
    /*
    Route::get('/', function () {
        return view('frontend.instructor.instructor_dashboard');
    })->name('instructor');
    Route::get('/profile-update', function () {
        return view('frontend.instructor.instructorprofile_update');
    })->name('instructor-update');
    */
}
