<style>
    .image_course{
        width: 300px!important;
        height:300px!important;
        object-fit: fit-contain!important;
    }
</style>
@extends('frontend.layouts.main')
@section('title', 'Grow - Course')
@section('main-section')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px">
        <div class="container text-center py-2">
            <h1 class="text-white display-1">Courses</h1>
            <div class="d-inline-flex text-white mb-2">
                <p class="m-0 text-uppercase">
                    <a class="text-white" href="{{ route('home') }}">Home</a>
                </p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Courses</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-fluid py-2">
        <div class="container py-2">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                          {{$course_instructor->course_head}}
                        </h6>
                        <h1 class="display-4">{{ $home->course_info }}</h1>
                    </div>
                    <div class="mx-auto mb-5" style="width: 100%; max-width: 600px">
                        <form action="" method="get">
                            <div class="input-group">
                                <input name="search" type="text" class="form-control border-primary"
                                    style="padding: 30px 25px" placeholder="Course Name" />
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary px-4 px-lg-5">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                {{-- {{dd($course)}} --}}
                    <div class="col-lg-4 col-md-6 pb-4">
                        <a class="courses-list-item position-relative d-block overflow-hidden mb-2"
                            href="{{ route('course.details', ['id' => $course->id]) }}">
                            {{-- <img class="img-fluid" src="{{ asset('uploads/extra/courses-1.jpg') }}" alt="" /> --}}
                            <img class="img-fluid image_course" src="{{ asset('uploads/courses/'.$course->image) }}" alt="course" />
                            <div class="courses-text">
                                <h4 class="text-center text-white px-3">
                                    {{ $course->title }}
                                </h4>
                                <div class="border-top w-100 mt-3">
                                    <div class="d-flex justify-content-between p-4">
                                        {{-- {{dd($course)}} --}}
                                        <span class="text-white"><i class="fa fa-user mr-2"></i>{{$course->teachers->user->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="mt-3">
                {{-- {{ $courses->links() }} --}}
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection
