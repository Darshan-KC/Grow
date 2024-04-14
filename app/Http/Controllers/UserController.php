<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(20);
        return view('backend.users.main', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if (isset($request->photo)) {
            $photo = str_replace(" ", "_", "$request->name");
            $photoname = $photo . time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads/profile'), $photoname);
            $user->photo = $photoname;
        }
        $user->contact = $request->contact;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('admin.admin_user.index')->with('msg', 'User has been created successfully');;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('backend.users.view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::where('id',$id)->first();
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'unique:users,email,'.$user->id, 'max:255'],
            'photo' => 'image|mimes:png,jpg,jpeg|max:2048',
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
        $user->role = $request->role;
        // echo $user->name . "<br/>";
        // echo $user->email . "<br/>";
        // echo $user->photo . "<br/>";
        // echo $user->role . "<br/>";
        // echo $user->contact . "<br/>" ;

        // $user->update();
        $user->update();
        return redirect()->route('admin.admin_user.index')->with('msg', 'User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::where('id',$id)->first();
        if(!is_null($user)){
            $user->delete();
            return redirect()->route('admin.admin_user.index')->with('msg', ' User has been deleted successfully');
        }
        return redirect()->route('admin.admin_user.index')->with('msg', 'User not found');
       }
}
