<?php

namespace App\Http\Controllers;

use App\Models\enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enroll=enroll::with('course')->paginate(20);
        return view('frontend.enrollment_course.enroll_courses');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('fron')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $site=new SiteConfig;
        // $validate=$request->validate([
        //     'sitename'=>'required|string',
        //     'sitelink'=>'required|url'
        // ]);
        // $site->sitename=$request->sitename;
        // $site->sitelink=$request->sitelink;
        // $site->save();
        // return redirect()->route('enroll')->with('msg','Successfully created');
            $enroll=new enroll;
            $enroll->course_id=$request->course_id;
            $enroll->user_id=Auth::user()->id;
            $enroll->save();
            return redirect()->route('enroll');

    }

    /**
     * Display the specified resource.
     */
    public function show(enroll $enroll)
    {
        return view('frontend.enrollment_course.enroll_coursetutorial',compact('enroll'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, enroll $enroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enroll $enroll)
    {
        $enroll->delete();
        return redirect()->route('enroll')->with('msg','Site deleted successfully');
    }
}
