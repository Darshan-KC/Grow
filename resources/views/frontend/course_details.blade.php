@extends('frontend.layouts.main')
@section('title', 'Grow - Course details')
@section('main-section')

    <!-- Detail Start -->
    <div class="container-fluid py-5" style="background-color: #88bef2">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5 text-dark">
                        <div class="section-title position-relative mb-5">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                                Course Detail
                            </h6>
                            <h1 class="display-4">
                                {{ $course->title }}
                            </h1>
                        </div>
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset('uploads/course_feature_imgs/'.$course->feature_image) }}"
                            alt="Image" />
                        {{-- <img class="img-fluid rounded w-100 mb-4" src="img/header.jpg" alt="Image" /> --}}
                        <p>
                            {{ $course->description }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="mb-5 py-3 rounded shadow bg-body" style="background-color: whitesmoke">
                        <h3 class="py-3 px-4 m-0">Course Features</h3>
                        <div class="d-flex justify-content-between border-bottom border-dark px-4">
                            <h6 class="my-3">Instructor</h6>
                            <h6 class="my-3">{{$course->teachers->user->name}}</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom border-dark px-4">
                            <h6 class="my-3">Duration</h6>
                            <h6 class="my-3">{{$course->duration}} minutes</h6>
                        </div>
                        <div class="py-3 px-4 text-center">
                            <!-- <button
                              class=""

                            >
                              Enroll Now
                            </button> -->
                            <form action="{{route('enroll_save.store')}}" class="d-inline-block" method="POST">
                                @csrf
                                <input type="number" name="course_id" hidden value="{{$course->id}}">
                                <button type="submit" class="btn py-3 px-5 text-white btn-primary mx-auto">Enroll Now</button>
                            </form>
                            {{-- @if (Auth::user()->course->$course->id!=$course->id)
                            <a class="btn d-block py-3 px-5 text-white btn-primary mx-auto" style="border-radius: 15px"
                                href="{{ route('enroll',$course->id) }}" role="button">Enroll Now</a>
                                @else
                                <a class="btn d-block py-3 px-5 text-white btn-primary mx-auto" style="border-radius: 15px"
                                    href="{{ route('enroll.course_content',$course->id) }}" role="button">Continue learn</a>

                        @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection
