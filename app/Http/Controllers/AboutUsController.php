<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\File;


class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs= AboutUs::first();
        return view('backend.Frontend_Rendering.frontend_about.main', compact('aboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Frontend_Rendering.frontend_about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
               'hero_image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
               'title'=>'required',
               'title_description'=>'required',
               'heading_1_title'=>'required',
               'heading_2_title'=>'required',
               'heading_1_description'=>'required',
               'heading_2_description'=>'required',
               'engage_user_number_1'=>'required',
                'engage_user_title_1'=>'required',
               'engage_user_number_2'=>'required',
               'engage_user_title_2'=>'required',
               'engage_user_number_3'=>'required',
               'engage_user_title_3'=>'required',
               'engage_user_number_4'=>'required',
               'engage_user_title_4'=>'required',
               'aboutus_image'=>'required|image'
            ]);
            $about = new AboutUs;
            $about->title=$request->title;
            $about->title_description=$request->title_description;
            $about->heading_1_title=$request->heading_1_title;
            $about->heading_2_title=$request->heading_2_title;
            $about->heading_1_description=$request->heading_1_description;
            $about->heading_2_description=$request->heading_2_description;
            $about->engage_user_number_1=$request->engage_user_number_1;
            $about->engage_user_number_2=$request->engage_user_number_2;
            $about->engage_user_number_3=$request->engage_user_number_3;
            $about->engage_user_number_4=$request->engage_user_number_4;
            $about->engage_user_title_1=$request->engage_user_title_1;
            $about->engage_user_title_2=$request->engage_user_title_2;
            $about->engage_user_title_3=$request->engage_user_title_3;
            $about->engage_user_title_4=$request->engage_user_title_4;
            // for hero image
            $image=str_replace(" ","_","$request->title");
            $image_name=$image.time().'.'.$request->hero_image->extension();
            // File::delete(public_path('uploads/frontend/home'.$about->hero_image));
            $request->hero_image->move(public_path('uploads/frontend/about'),$image_name);
            $about->hero_image=$image_name;

            //for aboutus image
            $image_about=str_replace(" ","_","$request->title");
            $image_about_name=$image_about.time().'.'.$request->aboutus_image->extension();
            // File::delete(public_path('uploads/frontend/home'.$about->aboutus_image));
            $request->aboutus_image->move(public_path('uploads/frontend/about'),$image_about_name);
            $about->aboutus_image=$image_about_name;
             $about->save();

            return redirect()->route('admin.about.index')->with('msg','Data is Successfully Inserted');
    }

    /**
     * Display the specified resource.

     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutUs = AboutUs::find($id);
       return view('backend.Frontend_Rendering.frontend_about.edit',compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        return view('backend.Frontend_Rendering.frontend_about.view', compact('aboutUs'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutUs = AboutUs::find($id);
        $request->validate(
            [
                'title' => 'required',
                'title_description' => 'required',
                'heading_1_title' => 'required',
                'heading_2_title' => 'required',
                'heading_1_description' => 'required',
                'heading_2_description' => 'required',
                'engage_user_number_1' => 'required',
                'engage_user_title_1' => 'required',
                'engage_user_number_2' => 'required',
                'engage_user_title_2' => 'required',
                'engage_user_number_3' => 'required',
                'engage_user_title_3' => 'required',
                'engage_user_number_4' => 'required',
                'engage_user_title_4' => 'required',
            ]
        );
        $aboutUs->title = $request->title;
        $aboutUs->title_description = $request->title_description;
        $aboutUs->heading_1_title = $request->heading_1_title;
        $aboutUs->heading_2_title = $request->heading_2_title;
        $aboutUs->heading_1_description = $request->heading_1_description;
        $aboutUs->heading_2_description = $request->heading_2_description;
        $aboutUs->engage_user_number_1 = $request->engage_user_number_1;
        $aboutUs->engage_user_number_2 = $request->engage_user_number_2;
        $aboutUs->engage_user_number_3 = $request->engage_user_number_3;
        $aboutUs->engage_user_number_4 = $request->engage_user_number_4;
        $aboutUs->engage_user_title_1 = $request->engage_user_title_1;
        $aboutUs->engage_user_title_2 = $request->engage_user_title_2;
        $aboutUs->engage_user_title_3 = $request->engage_user_title_3;
        $aboutUs->engage_user_title_4 = $request->engage_user_title_4;
        // for hero image
        if (isset($request->hero_image)) {
            $image = str_replace(" ", "_", "$request->getClientOriginalName");
            $image_name = $image . time() . '.' . $request->hero_image->extension();
            File::delete(public_path('uploads/frontend/home/' . $aboutUs->hero_image));
            $request->hero_image->move(public_path('uploads/frontend/about'), $image_name);
            $aboutUs->hero_image = $image_name;
        }

        //for aboutus image
        if (isset($request->aboutus_image)) {
            $image_about = str_replace(" ", "_", "$request->title");
            $image_about_name = $image_about . time() . '.' . $request->aboutus_image->extension();
            File::delete(public_path('uploads/frontend/home/' . $aboutUs->aboutus_image));
            $request->aboutus_image->move(public_path('uploads/frontend/about'), $image_about_name);
            $aboutUs->aboutus_image = $image_about_name;
        }
        $aboutUs->update();
        return redirect()->route('admin.about.index')->with('msg', 'Successfully Updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        File::delete(public_path('uploads/frontend/home/'.$aboutUs->hero_image));
        File::delete(public_path('uploads/frontend/home/'.$aboutUs->aboutus_image));

        $aboutUs->delete();
        return redirect()->route('backend.Frontend_Rendering.frontend_about.index')->with('msg', 'Successfully Deleted');
    }
}
