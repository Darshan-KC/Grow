<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeHero;
use App\Models\SiteConfig;
use App\Models\SiteContact;

class ProfileUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home=HomeHero::first();
        $siteContact=SiteContact::first();
        $siteConfig=SiteConfig::first();
        $user=User::where('id',$id)->first();
        return view('frontend.profile_update',compact('user','home','siteContact','siteConfig'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        $user=User::where('id',$id)->first();
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'unique:users,email,'.$user->id, 'max:255'],
            'photo' => 'image',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->photo)) {
            $photo = str_replace(" ", "_", "$request->name");
            $photoname = $photo . time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads/profile'), $photoname);
            $user->photo = $photoname;
        }
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
