@extends('frontend.layouts.main')
@section('header-title', 'Grow - Enrollment / Course Tutorial')
@push('header-link')
    <link rel="stylesheet" href="{{ asset('assets/css/enrollment_css.css') }}">
    <script src="https://kit.fontawesome.com/ae6df88903.js" crossorigin="anonymous"></script>
@endpush
@section('main-section')
    <div class="container-fluid mt-5">
        <nav class="breadcrumb courses fs-4">
            <a class="breadcrumb-item text-primary" href="{{ route('enroll') }}">Courses</a>
            <a class="breadcrumb-item text-primary" href="{{ route('enroll.course_content',Auth::user()->id) }}">Tutorial</a>
            <span class="breadcrumb-item active text-info" aria-current="page">Active Page</span>
        </nav>
    </div>
    </nav>

    <section class="container-fluid mt-2  courses">
        <div class="card">
            <!-- <button type="button" class="btn btn-primary button m-2 " data-bs-toggle="button" aria-pressed="false"
                        autocomplete="off"><i class="fa fa-bars fs-1 " aria-hidden="true"></i></button> -->
            <div class="card-body d-flex">
                <div class="col-lg-5" id="allsection">
                    <div class="p-1 col-12 modules  ">
                        <section class="card border-info " id="learningVideos">
                            <div class="d-flex">
                                <div class="col-lg-9">
                                    <h5 class="m-1 mx-0 p-3 ">Learning Videos</h5>
                                </div>
                                <div class="mt-4 mb-2 col-lg-3">

                                    <i class="fa fa-angle-up mx-5" id="learningVideosAngleUp" aria-hidden="true"></i>
                                    <i class="fa fa-angle-down mx-5" id="learningVideosAngleDown" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div id="videos">
                                <a href="#" id="topic">
                                    <div class="card hover">
                                        <div class="card-body d-flex">
                                            <div class="d-flex m-1 col-lg-8 col-md-10 col-sm-9 col-8 ">
                                                <i class="fa fa-play-circle-o text-primary" style="font-size:25px;"></i>
                                                <h6 class="mx-4">Content{{ $courseContent->id }}</h6>
                                            </div>
                                            {{-- <div class="m-1 col-lg-4  col-md-2 col-sm-3 col-4">
                                                <span class="minutes  ms-5 ms-md-4"> 22min</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </section>
                        {{-- <section id="learningMaterials" class="card border-info mt-3">
                            <div class="d-flex m-1 ">
                                <div class=" col-lg-9  ">
                                    <h5 class="m-1 mx-0 p-3 ">Learning Materials</h5>
                                </div>

                                <div class="mt-4 mb-2  col-lg-3 ">
                                    <i class="fa fa-angle-up mx-5" id="learningMaterialsAngleUp" aria-hidden="true"></i>
                                    <i class="fa fa-angle-down mx-5" id="learningMaterialsAngleDown" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div id="Materials">
                                <a href="#">
                                    <div class="card hover ">
                                        <div class="card-body d-flex ">
                                            <div class="d-flex m-1  col-lg-8 ">
                                                <i class="fa-solid fa-file-pdf text-primary" style="font-size:25px;"></i>
                                                <h6 class="mx-4">Documentation</h6>
                                            </div>
                                            <div class="col-md-2 mt-2  col-lg-4">
                                                <i class="fa fa-download fs-5 mx-5" aria-hidden="true"
                                                    title="Download here"></i>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </a>
                        </section>
                        <section id="quizSection" class="card border-info mt-3">
                            <div class="d-flex m-1 ">
                                <div class=" col-lg-9 ">
                                    <h5 class="m-1 mx-0 p-3">Quiz</h5>
                                </div>
                                <div class="mt-4 mb-2  col-lg-3 ">
                                    <i class="fa fa-angle-down mx-5" id="quizAngleDown" aria-hidden="true"></i>
                                    <i class="fa fa-angle-up mx-5" id="quizAngleUp" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div id="quiz">
                                <a href="#">
                                    <div class="card hover ">
                                        <div class="card-body d-flex ">
                                            <div class="d-flex m-1 col-lg-8 ">
                                                <i class="far fa-question-circle" style="font-size:25px;"></i>
                                                <h6 class="mx-4">Quiz</h6>
                                            </div>
                                            <div class="col-lg-2  mt-2 col-8 ">
                                                <i class="fa-solid fa-lock fs-5 mx-5" title="Complete the module-videos"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </section> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12   ">
                    <section id="iframe" class="learningIframe">
                        <i class='fas fa-angle-double-left text-primary m-2 mx-1 fs-4' id="Angleleft"></i>
                        <i class='fas fa-angle-double-right text-primary m-2 mx-1 fs-4' id="Angleright"></i>
                        <h2 class="m-2">Topic</h2>
                        <div class="card">
                            <div class="card-body">
                                {{-- <iframe width="100%" height="400" class="border autoplay"
                                    src="https://www.youtube.com/embed/_rFdS-nrQkM"
                                    title="My first intro // Sagar Timilsina Vlogs" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe> --}}
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video id="videoPlayer" width="100%" height="400" class="border autoplay" controls>
                                            <source src="{{ asset('uploads/videos/course/'.$courseContent->video) }}" type="video/mp4">
                                        </video>


                                    </div>
                            </div>
                            <div class="d-flex justify-content-between m-3 ">
                                <a href="#"><button type="submit" class="btn btn-primary btn-lg"> <i
                                            class="fa fa-angle-double-left"></i>&nbsp;Previous</button></a>
                                <a href="#"><button type="submit" class="btn btn-primary btn-lg">Next&nbsp;<i
                                            class="fa fa-angle-double-right"></i></button></a>
                            </div>
                        </div>
                    </section>
                </div>
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
</body>

</html>
