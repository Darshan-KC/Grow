<?php

namespace App\Http\Controllers;

use App\Models\SiteContact;
use Illuminate\Http\Request;

class SiteContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siteContact=SiteContact::all();
        return view('backend.Frontend_Rendering.site-contact.main',compact('siteContact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Frontend_Rendering.site-contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sitecontact=new SiteContact;
        $validate=$request->validate([
            'number_heading'=>'required|string',
            'number'=>'required|alpha_num|max:15|min:6',
            'email_heading'=>'required',
            'email'=>'required|email|unique:site_contacts,email',
            'location_heading'=>'required',
            'location_name'=>'required',
            'location_value'=>'required',
            'contact_message_heading'=>'required',
            'contact_message_subhead'=>'required'
        ]);
        $sitecontact->number_heading = $request->number_heading;
        $sitecontact->number = $request->number;
        $sitecontact->email_heading = $request->email_heading;
        $sitecontact->email = $request->email;
        $sitecontact->location_heading = $request->location_heading;
        $sitecontact->location_name = $request->location_name;
        $sitecontact->location_value = $request->location_value;
        $sitecontact->contact_message_heading = $request->contact_message_heading;
        $sitecontact->contact_message_subhead = $request->contact_message_subhead;
        $sitecontact->save();
        return redirect()->route('admin.site-contact.index')->with('msg','Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteContact $siteContact)
    {
        return view('backend.Frontend_Rendering.site-contact.view',compact('siteContact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteContact $siteContact)
    {
        return view('backend.Frontend_Rendering.site-contact.edit',compact('siteContact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteContact $siteContact)
    {
        $validate=$request->validate([
            'number_heading'=>'required|string',
            'number'=>'required|alpha_num|max:15|min:6',
            'email_heading'=>'required',
            'email'=>"required|email|unique:site_contacts,email,$siteContact->id",
            'location_heading'=>'required',
            'location_name'=>'required',
            'location_value'=>'required',
            'contact_message_heading'=>'required',
            'contact_message_subhead'=>'required'
        ]);
        $siteContact->number_heading = $request->number_heading;
        $siteContact->number = $request->number;
        $siteContact->email_heading = $request->email_heading;
        $siteContact->email = $request->email;
        $siteContact->location_heading = $request->location_heading;
        $siteContact->location_name = $request->location_name;
        $siteContact->location_value = $request->location_value;
        $siteContact->contact_message_heading = $request->contact_message_heading;
        $siteContact->contact_message_subhead = $request->contact_message_subhead;
        $siteContact->update();
        return redirect()->route('admin.site-contact.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteContact $siteContact)
    {
        $siteContact->delete();
        return redirect()->route('admin.site-contact.index')->with('msg','Successfully Deleted');
    }
}
