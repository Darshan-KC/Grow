<?php

namespace App\Http\Controllers;

use App\Models\CoursesInstructor;
use Illuminate\Http\Request;

class CoursesInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $course_instructor = CoursesInstructor::first();
          $course_instructor = optional($course_instructor);
          return view('backend.Frontend_Rendering.frontend-courses-instructor.main', compact('course_instructor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Frontend_Rendering.frontend-courses-instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
              $request->validate(
                [
                    'course_head'=>'required',
                    'meet_instruction'=>'required'
                ]);
                $course_instructor = New  CoursesInstructor;
                $course_instructor->course_head = $request->course_head;
                $course_instructor->meet_instruction = $request->meet_instruction;
                $course_instructor->save();
                return redirect()->route('admin.course_instructor.index')->with('msg', 'Successfully Inserted');

    }

    /**
     * Display the specified resource.
     */
    public function show(CoursesInstructor $coursesInstructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coursesInstructor = CoursesInstructor::find($id);
        return view('backend.Frontend_Rendering.frontend-courses-instructor.edit',compact('coursesInstructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coursesInstructor = CoursesInstructor::find($id);
        $request->validate(
            [
                'course_head'=>'required|max:50',
                'meet_instruction'=>'required|max:50'
            ]);

           $coursesInstructor->course_head = $request->course_head;
           $coursesInstructor->meet_instruction = $request->meet_instruction;
           $coursesInstructor->update();
            return redirect()->route('admin.course_instructor.index')->with('msg', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoursesInstructor $coursesInstructor)
    {
        $coursesInstructor->delete();
        return redirect()->route('admin.course_instructor.index')->with('msg', 'Successfully Deleted');
    }
}
