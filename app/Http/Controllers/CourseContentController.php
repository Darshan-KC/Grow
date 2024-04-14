<?php

namespace App\Http\Controllers;

use App\Models\CourseContent;
use App\Models\CourseRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\HomeHero;
use App\Models\SiteContact;
use App\Models\SiteConfig;
use App\Models\AboutUs;
use App\Models\Course;
use App\Models\CoursesInstructor;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        $content = CourseContent::paginate(20);
        return view('frontend.instructor.course_content.main', compact('home','siteContact','siteConfig','aboutUs','content'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id=$request->id;
        $home=HomeHero::first();
        $course=Course::where('id',$id)->first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        return view('frontend.instructor.course_content.create',compact('home','course','siteContact','siteConfig','aboutUs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        $validator = $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4'
        ]);
        $courseContent = new CourseContent;
        $courseContent->title = $request->title;
        $titlename = str_replace(" ", "", $request->title);
        $filename = $request->id . '_' . $titlename . time() . '.' . $request->video->extension();
        $request->video->move(public_path('uploads/videos/course'), $filename);
        $courseContent->video = $filename;
        $courseContent->save();
        $course_relation= new CourseRelation;
        $course_relation->course_id=$request->course_id;
        $course_relation->course_content_id=$courseContent->id;
        $course_relation->save();
        return redirect()->route('instructor.course-content.index',compact('home','siteContact','siteConfig','aboutUs','courseContent'))->with('msg', 'Course content created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseContent $courseContent)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        return view('frontend.instructor.course_content.view', compact('home','siteContact','siteConfig','aboutUs','courseContent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseContent $courseContent)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        return view('frontend.instructor.course_content.edit', compact('home','siteContact','siteConfig','aboutUs','courseContent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseContent $courseContent)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        $validator = $request->validate([
            'title' => 'required',
            'video' => 'mimes:mp4'
        ]);
        $courseContent->title = $request->title;
        if (isset($courseContent->video)) {
            $titlename = str_replace(" ", "", $request->title);
            File::delete(public_path('uploads/videos/course/' . $courseContent->video));
            $filename = $request->id . '_' . $titlename . time() . '.' . $request->video->extension();
            $request->video->move(public_path('uploads/videos/course'), $filename);
            $courseContent->video = $filename;
        }
        $courseContent->update();
        return redirect()->route('instructor.course-content.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseContent $courseContent)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $aboutUs=AboutUs::first();
        $course_instructor=CoursesInstructor::first();
        File::delete(public_path('uploads/videos/course/' . $courseContent->video));
        $courseContent->delete();
        return redirect()->route('instructor.course-content.index',compact('home','siteContact','siteConfig','aboutUs','courseContent'))->with('msg', 'Successfully deleted');
    }
}
