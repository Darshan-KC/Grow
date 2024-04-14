<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::with('teachers')->paginate(20);
        return view('backend.course.main', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructor = new User;
        $instructor = $instructor->where('role', 'i')->get();
        return view('backend.course.create', compact('instructor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'feature_image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $course = new Course;
        $course->title = $request->title;
        $image = str_replace(" ", "_", "$request->title");
        $imagename = $image . time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/courses'), $imagename);
        $feature_img = str_replace(" ", "_", "$request->category");
        $feature_imgname = $feature_img . date('Y') . time() . '.' . $request->feature_image->extension();
        $request->feature_image->move(public_path('uploads/course_feature_imgs'), $feature_imgname);
        $course->image = $imagename;
        $course->feature_image = $feature_imgname;
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->save();

        $teach=new Teacher;
        $teach->course_id = $course->id;
        $teach->instructor_id=$request->i_id;
        $teach->category=strtoupper($request->category);
        $teach->save();
        return redirect()->route('admin.course.index')->with('msg', 'Your course has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $teacher = Teacher::where('id', $id)->first();
        $course = Course::where('id', $id)->first();
        return view('backend.course.view', compact('course', 'teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

        $course = Course::where('id', $id)->first();
        return view('backend.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'string',
            'category' => 'string',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'feature_image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $course->title = $request->title;
        if (isset($course->image)) {
            $image = str_replace(" ", "_", "$request->title");
            $imagename = $image . time() . '.' . $request->image->extension();
            File::delete(public_path('uploads/courses/' . $course->image));
            $request->image->move(public_path('uploads/courses'), $imagename);
            $course->image = $imagename;
        }
        if (isset($course->feature_image)) {
            $feature_img = str_replace(" ", "_", "$course->category");
            $feature_imgname = $feature_img . date('Y') . time() . '.' . $request->feature_image->extension();
            File::delete(public_path('uploads/courses/' . $course->feature_image));
            $request->feature_image->move(public_path('uploads/course_feature_imgs'), $feature_imgname);
            $course->feature_image = $feature_imgname;
        }
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->update();
        return redirect()->route('course.index')->with('msg', 'Your course has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        File::delete(public_path('uploads/courses/' . $course->image));
        File::delete(public_path('uploads/courses/' . $course->feature_image));
        if (!is_null($course)) {
            $course->delete();
            return redirect()->route('admin.course.index')->with('msg', ' Course has been deleted successfully');
        }
        return redirect()->route('admin.course.index')->with('msg', 'Course not found');
    }
}
