@extends('backend.layouts.main')
@section('page-title')
    User Information
@endsection
@section('s-title')
    Edit User
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Edit User</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">

                <form action="{{ route('admin.admin_user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="title" name="name" value="{{ $user->name }}"
                            required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="email"
                            required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Select a role :</label><br>
                        <select class="form-select w-100 p-2 ps-0 form-control" id="category" name="role" required>
                            <option value="a" {{ $user->role == 'a' ? 'selected' : '' }}>Admin</option>
                            <option value="i" {{ $user->role == 'i' ? 'selected' : '' }}>Instructor</option>
                            <option value="u" {{ $user->role == 'u' ? 'selected' : '' }}>User</option>
                            <!-- Add more categories as needed -->
                        </select>
                        @error('role')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                    <div class="d-flex mb-3">
                        <div class="row col-lg-12">
                            <div class="col-lg-9  col-sm-6 col-12">
                                <label for="image" class="form-label ">Upload Image:</label>
                                <input type="file" class="form-control p-2 h-50" id="image" name="photo">
                            </div>
                            <div class=" col-lg-3   col-sm-6 col-12">
                                <img src="{{ asset('uploads/profile/' . $user->photo) }}" class="m-auto d-block"
                                    alt="user profile" width="120" height="120">
                            </div>
                            @error('photo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control " value="{{ $user->address }}" name="address"
                            id="address">
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact:</label>
                        <input type="text" class="form-control " value="{{ $user->contact }}" name="contact"
                            id="contact">
                            @error('contact')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
