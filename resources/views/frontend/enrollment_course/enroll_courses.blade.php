@extends('frontend.layouts.main')
@section('title', 'Grow - Enrollment Courses')
@push('header-link')
    <link rel="stylesheet" href="{{asset('assets/css/enrollment_css.css')}}">
    <script src="https://kit.fontawesome.com/ae6df88903.js" crossorigin="anonymous"></script>
@endpush
@section('main-section')
    <section class="enroll_courses">
        <div class="container m-5 mb-0 courses">
            <div class="d-flex m-3">
                <a href="{{ route('enroll') }}">
                    <p class="m-3 text-uppercase fw-bold underline-on-click active" id="courses">Courses</p>
                </a>
                {{-- <a href="{{ route('enroll.live_session') }}">
                    <p class="m-3 text-uppercase fw-bold underline-on-click " id="livesession">Live Sessions</p>
                </a> --}}


            </div>
        </div>

        <div class="container  m-auto courses">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                @foreach ($enroll as $enrollcourse)


                <div class="col">
                    <a href="{{ route('enroll.course_content',['id'=>$enrollcourse->course->id]) }}" class="color">
                        <div class="card height-card">
                            <div class="image">
                                <img class="img-fluid picture d-block m-auto mt-2 p-3"
                                    src="{{ asset('uploads/course/'.$enrollcourse->course->image) }}">
                            </div>
                            <div class="card-body color ">
                                <h5 class="card-title color color ">{{$enrollcourse->course->title}}</h5>
                                <div class=" d-flex  fs-5 pt-1 justify-content-between">
                                    <p>Intermediate</p>
                                    <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>{{$enrollcourse->course->duration}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
            {{-- <div class="mt-3 container">
                <p class="fw-bold"> Completed Courses</p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    <div class="col">
                        <a href="{{ route('enroll.course_content') }}">
                            <div class="card height-card">
                                <div class="image">
                                    <img class="img-fluid picture d-block m-auto   p-3  "
                                        src="{{ asset('uploads/enrollment/test/css.png') }}">
                                </div>
                                <div class="card-body color ">
                                    <h5 class="card-title color ">Frontend Devlopment- CSS</h5>
                                    <div class=" d-flex  fs-5  justify-content-between">
                                        <p>Intermediate</p>
                                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 2 hr </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div> --}}
        </div>
        </div>
    </section>

@endsection
@push('footer-link')
    <script src="{{asset('assets/js/enrollment.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endpush
