@extends('frontend.layouts.main')
@section('title', 'Grow - Discussion Forum')
@push('header-link')
    {{--
<!-- boostrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- external css --> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/discussion.css') }}">
    {{--
<link rel="stylesheet" href="css/discussion.css">
<!-- font  --> --}}
    <script src="https://kit.fontawesome.com/ae6df88903.js" crossorigin="anonymous"></script>
@endpush
@section('main-section')

    <div class="container-fluid">
        <div class="p-3">
            <h3 class=" text-center p-2">Ask Your Queries</h3>
        </div>
        <div class="row text-left mb-5">
            <div class=" col-md-6 col-sm-8 mb-1 mb-sm-0">
                <div class="dropdown bootstrap-select  bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
                    <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select"
                        tabindex="-98">
                        <option> Web </option>
                        <option> Phython </option>
                        <option> Html </option>
                        <option> c/c++ </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-lg-left">
                <button type="submit" class="btn mt-1 mb-3 btn-primary text-white">Submit</button>
                <button type="reset" class="btn  mt-1 mb-3 btn-danger">Reset</button>

            </div>
            <div class="col-md-2">
                <button type="button"class="btn btn-lg btn-primary text-white rounded-0 py-2  bg-op-6 roboto-bold"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ask Question
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form class="p-2" action="">

                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Your Question</label>
                                    <input type="text" class="form-control" id="exampleInputText1"
                                        aria-describedby="textHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Related to:</label>
                                    <select class="form-select form-select-lg" name="" id="">
                                        <option value="">Web designing</option>
                                        <option value="">Digital Marketing</option>
                                        <option value="">C language</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End of post 1 -->
        <div
            class="card row-hover pos-relative links py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-sm-0">
                    <h5>
                        <a href="#" class=" que-head">Drupal 8 quick starter guide</a>
                    </h5>
                    <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black " href="#">20
                            minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">KenyeW</a>
                    </p>
                    <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#C++</a> <a class="text-black mr-2"
                            href="#">#AppStrap Theme</a> <a class="text-black mr-2" href="#">#Wordpress</a>
                    </div>
                </div>
                <div class="col-md-4 op-7">
                    <div class="row text-center op-7">

                        <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                class="d-block text-sm">122 Replys</span>
                        </div>
                        <div class="col px-1"> <i class="fa-regular fa-comment icon-1x icon-1x " title="comment"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /End of post 1 -->
        <!-- End of post 2 -->
        <div
            class="card row-hover pos-relative links py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-sm-0">
                    <h5>
                        <a href="#" class=" que-head">HELP! My Windows XP machine is down</a>
                    </h5>
                    <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">54
                            minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a>
                    </p>
                    <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Development</a> <a
                            class="text-black mr-2" href="#">#AppStrap Theme</a> </div>
                </div>
                <div class="col-md-4 op-7">
                    <div class="row text-center op-7">

                        <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                class="d-block text-sm">122 Replys</span>
                        </div>
                        <div class="col px-1"> <i class="fa-regular fa-comment icon-1x icon-1x " title="comment"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /End of post 2 -->
        <!-- End of post 3 -->
        <div
            class="card row-hover links pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-sm-0">
                    <h5>
                        <a href="#" class=" que-head">Bootstrap 4 development in record time with AppStrap
                            Bootstrap 4 Theme</a>
                    </h5>
                    <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">32
                            minutes</a> <span class="op-6">ago by</span> <a class="text-black"
                            href="#">AppStrapMaster</a></p>
                    <div class="text-sm op-5"> <a class="text-black links mr-2" href="#">#Bootstrap 4</a> <a
                            class="text-black mr-2" href="#">#Wordpress</a> </div>
                </div>
                <div class="col-md-4 op-7">
                    <div class="row text-center op-7">

                        <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                class="d-block text-sm">122 Replys</span>
                        </div>
                        <div class="col px-1"> <i class="fa-regular fa-comment icon-1x icon-1x " title="comment"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /End of post 3 -->
        <!-- End of post 4 -->
        <div
            class="card row-hover links pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-sm-0">
                    <h5>
                        <a href="#" class=" que-head">Bootstrap 4 development in record time with AppStrap
                            Bootstrap 4 Theme</a>
                    </h5>
                    <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">29
                            minutes</a> <span class="op-6">ago by</span> <a class="text-black"
                            href="#">Themelize.me</a>
                    </p>
                    <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#Android</a> <a
                            class="text-black mr-2" href="#">#Bootstrap 4</a> <a class="text-black mr-2"
                            href="#">#Wordpress</a> <a class="text-black mr-2" href="#">#Drupal</a> </div>
                </div>
                <div class="col-md-4 op-7">
                    <div class="row text-center op-7">

                        <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                class="d-block text-sm">122 Replys</span>
                        </div>
                        <div class="col px-1"> <i class="fa-regular fa-comment icon-1x icon-1x " title="comment"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /End of post 4 -->
        <!-- End of post 5 -->
        <div
            class="card row-hover links pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-sm-0">
                    <h5>
                        <a href="#" class=" que-head">Drupal 8 quick starter guide</a>
                    </h5>
                    <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">53
                            minutes</a> <span class="op-6">ago by</span> <a class="text-black"
                            href="#">Themelize.me</a>
                    </p>
                    <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#iOS</a> <a
                            class="text-black mr-2" href="#">#Bootstrap 4</a> </div>
                </div>
                <div class="col-md-4 op-7">
                    <div class="row text-center op-7">

                        <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                class="d-block text-sm">122 Replys</span>
                        </div>
                        <div class="col px-1"> <icon-1x class="fa-regular fa-comment icon-1x icon-1x "
                                title="comment"></fa-regular>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script> --}}
