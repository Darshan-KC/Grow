@extends('backend.layouts.main')
@section('page-title')
   User Information
@endsection
@section('s-title')
    Add User
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Add  New User</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">

                <form action="{{route('admin.admin_user.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter  Fullname">
                        <div class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter  Email Address" name="email" id="email">
                        <div class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Select a role :</label><br>
                        <select class="form-select w-100 p-2 ps-0 form-control" id="category" name="role">
                            <option value="a">Admin</option>
                            <option value="i">Instructor</option>
                            <option value="u" selected>User</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Upload photo:</label>
                        <input type="file" class="form-control p-2 h-25" id="photo" name="photo">
                        <div class="text-danger">
                            @error('photo')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label" >Address:</label>
                        <input type="text" class="form-control " name="address" placeholder="Enter Current Address" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label" >Contact:</label>
                        <input type="text" class="form-control" name="contact" placeholder="Enter contact Number" id="contact">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
                        <div class="text-danger">
                            @error('text-danger')
                                {{$messge}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="conform_password" class="form-label">Comform Password:</label>
                        <input type="password" class="form-control" placeholder="Enter the same password" name="password_confirmation" id="password_confirmation">
                        <div class="text-danger">
                            @error('password_confirmation')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
