@extends('frontend.layouts.main')
@section('title', 'Grow - Instructor View Course_content')
@section('page-title')
    Course Information
@endsection
@section('s-title')
    View Course
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Course content
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video id="videoPlayer" controls>
                                <source src="{{ asset('uploads/videos/course/'.$courseContent->video) }}" type="video/mp4">
                            </video>


                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{$courseContent->title}}</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
