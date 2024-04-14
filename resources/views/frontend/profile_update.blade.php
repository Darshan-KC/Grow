@extends('frontend.layouts.main')
@section('title', 'Grow - User Dashboard')
@section('main-section')
    <div class="container">
        <div class="main-body">

            <nav aria-label="breadcrumb" class="main-breadcrumb mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                </ol>
            </nav>
            <h3 class="text-center text-primary m-4"> Update Your Profile</h3>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if (Auth::user()->photo != '')
                                            <a href="{{ asset('uploads/profile/' . Auth::user()->photo) }}">
                                                <img src="{{ asset('uploads/profile/' . Auth::user()->photo) }}" class="rounded-circle" style="object-fit: cover;" width="150px" height="150px" alt="profile"
                                                    srcset="">
                                            </a>
                                            @else
                                            <a href="{{asset('uploads/profile/default.png')}}">
                                                <img src="{{asset('uploads/profile/default.png')}}" class="rounded-circle" style="object-fit: cover;" width="150px" height="150px" alt="profile"
                                                    srcset="">
                                            </a>
                                        @endif
                                <div class="mt-3">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-muted font-size-sm">{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-1">
                        <div class="card-body">
                            <form action="{{ route('update_profile.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row ">
                                    <div class="col-sm-3">
                                        <div class="mb-1">
                                            <label for="name" class="form-label">
                                                <h6 class="mb-0">Full Name</h6>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <input type="text" name="name" id="name" class="w-100  btn text-left"
                                            value="{{ Auth::user()->name }}">
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="photo" class="form-label">
                                            <h6 class="mb-0">Photo</h6>
                                        </label>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <input type="file" name="photo" id="photo" class="w-100  btn text-left">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="name" class="form-label">
                                            <h6 class="mb-0">Email</h6>
                                        </label>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <input type="email" name="name" id="name" class="w-100  btn text-left"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="name" class="form-label">
                                            <h6 class="mb-0">Phone</h6>
                                        </label>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <input type="text" name="name" id="name" class="w-100  btn text-left"
                                            value="{{ Auth::user()->contact }}">
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="name" class="form-label">
                                            <h6 class="mb-0">Address</h6>
                                        </label>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <input type="text" name="name" id="name" class="w-100  btn text-left"
                                            value="{{ Auth::user()->address }}">
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
