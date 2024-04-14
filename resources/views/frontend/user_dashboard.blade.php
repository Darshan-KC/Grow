@extends('frontend.layouts.main')
@section('title', 'Grow - User Dashboard')
@section('main-section')
    <div class="container">
        <div class="main-body">

            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{route('')}}">User</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p class="text-muted font-size-sm">{{Auth::user()->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 align-items-center">
                    <div class="card mb-1">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-sm-3">
                                    <div class="mb-1">
                                      <label for="name" class="form-label"><h6 class="mb-0">Full Name</h6></label>
                                    </div>
                                </div>
                                <div class="col-sm-9 ">
                                    <input type="text" name="name" id="name" class="w-100  btn text-left"  value="{{Auth::user()->name}}" disabled readonly>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="name" class="form-label"><h6 class="mb-0">Email</h6></label>
                                </div>
                                <div class="col-sm-9 ">
                                    <input type="email" name="name" id="name" class="w-100  btn text-left" value="{{Auth::user()->email}}" disabled readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="name" class="form-label"><h6 class="mb-0">Phone</h6></label>
                                </div>
                                <div class="col-sm-9 ">
                                    <input type="text" name="name" id="name" class="w-100  btn text-left" value="{{Auth::user()->contact}}" disabled readonly>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="name" class="form-label"><h6 class="mb-0">Address</h6></label>
                                </div>
                                <div class="col-sm-9 ">
                                    <input type="text" name="name" id="name" class="w-100  btn text-left" value="{{Auth::user()->address}}" disabled readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-primary " target="__blank" href="{{ route('update_profile.edit',Auth::user()->id) }}">Edit your Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script> --}}
