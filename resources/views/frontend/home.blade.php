<style>
    .image_course{
        width: 300px!important;
        height:300px!important;
        object-fit: fit-contain!important;
    }
</style>
@extends('frontend.layouts.main')
@section('title', 'Grow - Online Education Website Template')
@section('main-section')
    @if (Session::has('error'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container  my-5 py-5">
            <h1 class="text-white mt-4 mb-4">{{ $home->hero_title }}</h1>
            <h1 class="text-white display-1 mb-3">{{ $home->hero_subtitle }}</h1>
            <div class="w-50">

                <p class="text-white">{{ $home->hero_description }}</p>
            </div>
            <div class=" mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a href="{{ route('login') }}"> <button type="button" class="btn btn-lg btn-success">Get
                                            Started</button></a>
                                </li>
                            @endif
                        @else
                            <a href="{{ route('enroll') }}"> <button type="button" class="btn btn-lg btn-success">Get
                                    Started</button></a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 ">
        <div class="row mx-5  justify-content-center pt-3">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">{{ $home->course_info }}</h6>
                    <h1 class="display-4">{{$home->course_info}}</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            @php
                $i=0;
            @endphp
                @foreach ($courses as $course)
            @if ($i++>6)
                break;
            @endif

                <div class="courses-item position-relative m-3 ">
                    <a href="{{ route('course.details', ['id' => $course->id]) }}" class="text-decoration-none">
                <img class="img-fluid image_course" src="{{ asset('uploads/courses/'.$course->image) }}" alt="Course_image" >
                <div class="courses-text">
                    <h4 class="text-center text-white px-3 pb-0">{{ $course->title }}</h4>
                    <div class="border-top w-100 mt-5">
                        <div class="d-flex justify-content-between p-5">
                           {{-- {{ dd($course)}} --}}
                            <span class="text-white"><i class="fa fa-user mr-2"></i>{{$course->teachers->user->name}}</span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-2">
                        <a class="btn btn-primary" href="{{ route('course.details', ['id' => $course->id]) }}">Course Detail</a>
                    </div>
                </div>
            </div>
                </a>
            @endforeach
        </div>
    </div>
    @endsection

