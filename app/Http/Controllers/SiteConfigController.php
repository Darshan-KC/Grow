<?php

namespace App\Http\Controllers;

use App\Models\SiteConfig;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site=SiteConfig::all();
        return view('backend.Frontend_Rendering.site-config.main',compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sitename=SiteConfig::select('sitename')->get();
        return view('backend.Frontend_Rendering.site-config.create',compact('sitename'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siteConfig=new SiteConfig;
        $validate=$request->validate([
            'facebook'=>'required|url',
            'youtube'=>'required|url',
            'linkedin'=>'required|url',
            'twitter'=>'required|url',
            'instagram'=>'required|url'
        ]);
        $siteConfig->facebook=$request->facebook;
        $siteConfig->youtube=$request->youtube;
        $siteConfig->twitter=$request->twitter;
        $siteConfig->instagram=$request->instagram;
        $siteConfig->linkedin=$request->linkedin;
        $siteConfig->save();
        return redirect()->route('admin.site-config.index')->with('msg','Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(SiteConfig $siteConfig)
    {
        return view('backend.Frontend_Rendering.site-config.main',compact('siteConfig'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteConfig $siteConfig)
    {
        return view('backend.Frontend_Rendering.site-config.edit',compact('siteConfig'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteConfig $siteConfig)
    {
        $validate=$request->validate([
            'facebook'=>'required|url',
            'youtube'=>'required|url',
            'linkedin'=>'required|url',
            'twitter'=>'required|url',
            'instagram'=>'required|url'
        ]);
        $siteConfig->facebook=$request->facebook;
        $siteConfig->youtube=$request->youtube;
        $siteConfig->twitter=$request->twitter;
        $siteConfig->instagram=$request->instagram;
        $siteConfig->linkedin=$request->linkedin;
        $siteConfig->update();
        return redirect()->route('admin.site-config.index')->with('msg','Site updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteConfig $siteConfig)
    {
        $siteConfig->delete();
        return redirect()->route('admin.site-config.index')->with('msg','Site deleted successfully');
    }
}
