<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= new ContactUs;
        $data=$data->paginate(20);
        // $data=course::paginate(20);
        return view('backend.contact.main',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= new ContactUs;
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required | email',
            ]
            );
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return redirect('/contact')->with('msg', 'Your massage  has been send successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $arr=ContactUs::where('id',$id)->first();
        return view('backend.contact.view',['data'=>$arr]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(ContactUs $contactUs)
    public function destroy($id)
    {
        ContactUs::find($id)->delete();
        return redirect()->back()->with('msg', 'Message has been deleted successfully');
    }
}
