<?php

namespace App\Http\Controllers;

use App\Models\CourseContent;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeHero;
use App\models\SiteConfig;
use App\Models\AboutUs;
use App\models\SiteContact;
use App\Models\Course;
use App\Models\CoursesInstructor;

class FrontendController extends Controller
{
    public function index(){
        $courses=Course::has('teachers')->with('teachers')->get();
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        return view('frontend.home',compact('home','courses','siteContact','siteConfig'));

    }
    public function user()
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        return view('frontend.user_dashboard',compact('home','siteContact','siteConfig'));
    }
    public function about(){
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first ();
        return view('frontend.about',compact('home','siteContact','siteConfig','aboutUs'));
    }
    public function contact(){
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first ();
        $course_instructor=CoursesInstructor::first();
        return view('frontend.contact',compact('home','siteContact','siteConfig','aboutUs','course_instructor'));
    }
    public function courses(Request $request){
        $courses = Course::has('teachers')->paginate(10);
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        if ($request->search) {
            $courses = Course::where('title', 'like', "%$request->search%")->has('teachers')->paginate(10);
            // $courses = optional($courses);
        }
        // return $courses;
        return view('frontend.courses', compact('home','siteContact','courses','siteConfig','aboutUs','course_instructor'));
    }
    public function courses_details(Request $request, string $id)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $course = Course::where('id', $id)->with('teachers')->first();
        return view('frontend.course_details', compact('course','home','siteContact','siteConfig'));
    }
    public function discussion()
    {
        return view('frontend.discussionForums');
    }
    public function team(){
        $instructor = User::where('role', 'i')->get();
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        return view('frontend.team',compact('home','siteContact','siteConfig','aboutUs','course_instructor','instructor'));
    }
}
