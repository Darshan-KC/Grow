@extends('frontend.layouts.main')
@section('page-title', 'Grow - Enrollment / Course_content')
@push('header-link')
    <link rel="stylesheet" href="{{ asset('assets/css/enrollment_css.css') }}">
    <script src="https://kit.fontawesome.com/ae6df88903.js" crossorigin="anonymous"></script>
@endpush
@section('main-section')
    <section class="">
        <div class="container mt-5">
            <div class="card p-4 ">

                <div class="m-auto d-block  ">
                    <img src="{{ asset('uploads/courses/'.$course->image) }}"
                        class="img-fluid rounded-start  image m-auto d-block" width="150px" height="150px" alt="...">
                    <div class="text-center p-3">
                        <h2>{{$course->title}}<h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="container mt-2 courses ">
        <div class="card ">
            <div class="card-body">
                <div class="d-flex m-3">
                    <a href="#" id="quizLink">
                        <p class="m-3 text-uppercase fw-bold underline-on-click active" id="livesession">Content</p>
                    </a>
                </div>
                <section class="card border-info" id="learningVideos">
                    <div class="d-flex m-1   ">
                        <div class="col-md-11 col-lg-11 col-sm-10 col-10">
                            <h5 class="m-4 mt-2 mb-2 mx-0 p-3 ">Learning Videos</h5>
                        </div>
                        <div class=" mt-4 mb-2 col-2 col-md-1 col-sm-2 col-lg-1 col-xl-1  ">

                            <i class="fa fa-angle-up mx-4" id="learningVideosAngleUp" aria-hidden="true"></i>
                            <i class="fa fa-angle-down mx-4" id="learningVideosAngleDown" aria-hidden="true"></i>
                        </div>
                    </div>
                    @foreach ($courseContent as $content)
                        <div id="videos">
                            <a href="{{ route('enroll.course_tutorial', ['id' => $content->courseContent->id]) }}">
                                <div class="card hover">
                                    <div class="card-body d-flex ">
                                        <div class="d-flex m-3 col-md-10 col-sm-9 col-8 ">
                                            <i class="fa fa-play-circle-o text-primary" style="font-size:25px;"></i>
                                            <h6 class="mx-4">Content{{ $content->courseContent->id }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </section>
                {{-- <section id="learningMaterials" class="card border-info mt-3">
                    <div class="d-flex m-1 ">
                        <div class="col-md-11 col-lg-11 col-sm-10 col-10">
                            <h5 class="m-4 mt-2 mb-2 mx-0 col-md-11 m-4 mt-2 mb-2 mx-0 p-3">Learning Materials</h5>
                        </div>

                        <div class="mt-4 mb-2 col-2 col-md-1 col-sm-2 col-lg-1 col-xl-1">
                            <i class="fa fa-angle-up mx-4" id="learningMaterialsAngleUp" aria-hidden="true"></i>
                            <i class="fa fa-angle-down mx-4" id="learningMaterialsAngleDown" aria-hidden="true"></i>

                            <!-- Add similar icons for other sections... -->

                        </div>
                    </div>

                    <div id="Materials">
                        <a href="{{ route('enroll.course_tutorial') }}">
                            <div class="card hover ">
                                <div class="card-body d-flex ">
                                    <div class="d-flex m-3  col-md-10   col-sm-9 col-8 ">
                                        <i class="fa-solid fa-file-pdf text-primary" style="font-size:25px;"></i>
                                        <h6 class="mx-4">Documentation</h6>
                                    </div>
                                    <div class="col-md-2 mt-2  col-sm-3 col-4">
                                        <i class="fa fa-download fs-5 mx-4" aria-hidden="true" title="Download here"></i>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>
                </section>
                <section id="quizSection" class="card border-info mt-3">
                    <div class="d-flex m-1 ">
                        <div class="col-md-11 col-lg-11 col-sm-10 col-10">
                            <h5 class="m-4 mt-2 mb-2 mx-0 col-md-11 m-4 mt-2 mb-2 mx-0 p-3">Quiz</h5>
                        </div>
                        <div class="mt-4 mb-2 col-2 col-md-1 col-sm-2 col-lg-1 col-xl-1">
                            <i class="fa fa-angle-down mx-4" id="quizAngleDown" aria-hidden="true"></i>
                            <i class="fa fa-angle-up mx-4" id="quizAngleUp" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div id="quiz">
                        <a href="{{ route('enroll.course_tutorial') }}">
                            <div class="card hover ">
                                <div class="card-body d-flex ">
                                    <div class="d-flex m-3 col-md-10  col-sm-9 col-8  ">
                                        <i class="far fa-question-circle" style="font-size:25px;"></i>
                                        <h6 class="mx-4">Quiz</h6>
                                    </div>
                                    <div class="col-md-2  col-sm-3 col-4 mt-2">
                                        <i class="fa-solid fa-lock fs-5 mx-4" title="Complete the module-videos"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </section> --}}
                </a>
            </div>
    </section>
    </div>
    </div>
    </section>
@endsection
@push('footer-link')
    <script src="{{ asset('assets/js/enrollment.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endpush
