<?php

namespace App\Http\Controllers;

use App\Models\HomeHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = HomeHero::first();
        return view('backend.Frontend_Rendering.frontend_home.main', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Frontend_Rendering.frontend_home.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo_image' => 'required|image|mimes:png,jpg,jpeg',
            'logo_name' => 'required|',
            'hero_image' => 'required|image|mimes:png,jpg,jpeg',
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'hero_description' => 'required',
            'course_info' => 'required',
            'footer_title_1' => 'required',
            'footer_title_2' => 'required',
            'footer_title_3' => 'required',
            'copyrighter' => 'required'
        ]);
        $home = new HomeHero;
        $home->logo_name = $request->logo_name;
        $home->hero_title = $request->hero_title;
        $home->hero_subtitle = $request->hero_subtitle;
        $home->hero_description = $request->hero_description;
        $home->course_info = $request->course_info;
        $home->footer_title_1 = $request->footer_title_1;
        $home->footer_title_2 = $request->footer_title_2;
        $home->footer_title_3 = $request->footer_title_3;
        $home->copyrighter = $request->copyrighter;
        //  for logo image
        $image_logo = str_replace(" ", "_", "$request->logo_name");
        $image_name_logo = $image_logo . time() . '.' . $request->logo_image->extension();
        $request->logo_image->move(public_path('uploads/frontend/home'), $image_name_logo);
        $home->logo_image = $image_name_logo;

        //for hero image
        $image = str_replace(" ", "_", "$request->hero_title");
        $image_name = $image . time() . '.' . $request->hero_image->extension();
        $request->hero_image->move(public_path('uploads/frontend/home'), $image_name);
        $home->hero_image = $image_name;
        $home->save();
        return redirect()->route('admin.home.index')->with('msg', 'Successfully Inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeHero $homeHero)
    {
        // return view('backend.Frontend_Rendering.frontend_home.view', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeHero $homeHero)
    {
        $home = $homeHero::first();
        return view('backend.Frontend_Rendering.frontend_home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $homeHero = HomeHero::find($id);
        $request->validate([
            'logo_name' => 'required',
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
            'hero_description' => 'required',
            'course_info' => 'required',
            'footer_title_1' => 'required',
            'footer_title_2' => 'required',
            'footer_title_3' => 'required',
            'copyrighter' => 'required',
            'logo_image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $homeHero->logo_name = $request->logo_name;
        $homeHero->hero_title = $request->hero_title;
        $homeHero->hero_subtitle = $request->hero_subtitle;
        $homeHero->hero_description = $request->hero_description;
        $homeHero->course_info = $request->course_info;
        $homeHero->footer_title_1 = $request->footer_title_1;
        $homeHero->footer_title_2 = $request->footer_title_2;
        $homeHero->footer_title_3 = $request->footer_title_3;
        $homeHero->copyrighter = $request->copyrighter;
        //for logo image
        if (isset($request->logo_image)) {
            $image_logo = str_replace(" ", "_", "$request->logo_name");
            $image_name_logo = $image_logo . time() . '.' . $request->logo_image->extension();
            File::delete(public_path('uploads/frontend/home/' . $homeHero->logo_image));
            $request->logo_image->move(public_path('uploads/frontend/home'), $image_name_logo);
            $homeHero->logo_image = $image_name_logo;
        }

        if (isset($request->hero_image)) {
            $image = str_replace(" ", "_", "$request->hero_title");
            $image_name = $image . time() . '.' . $request->hero_image->extension();
            File::delete(public_path('uploads/frontend/home/' . $homeHero->hero_image));
            $request->hero_image->move(public_path('uploads/frontend/home'), $image_name);
            $homeHero->hero_image = $image_name;
        }

        $homeHero->update();

        return redirect()->route('admin.home.index')->with('msg', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeHero $homeHero)
    {
        File::delete(public_path('uploads/frontend/home/' . $homeHero->logo_image));
        File::delete(public_path('uploads/frontend/home/' . $homeHero->hero_image));

        $homeHero->delete();
        return redirect()->route('admin.home.index')->with('msg', 'Successfully Deleted');
    }
}
