@extends('frontend.layouts.main')
@section('title', 'Grow - About Us')
@section('main-section')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-2">
            <h1 class="text-white display-1">About Us</h1>
            <div class="d-inline-flex text-white mb-2">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">About Us</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Us Section -->
    <div class="container text-dark ">
        <div class="about_traning py-5">
            <div class="">
                <h2>{{$aboutUs->title}}</h2>
                <p>{{ $aboutUs->title_description }}</p>
                <hr>
            </div>

            <div class="about_traning1  ">

                <h3 class="  text-center py-3  text-bold">{{ $aboutUs->heading_1_title }}</h2>
                    <p>{{ $aboutUs->heading_1_description }}</p>

            </div>
            <div class="about_traning2">
                <h3 class=" text-center text-bold py-3">{{ $aboutUs->heading_2_title }}</h2>
                    <p>{{ $aboutUs->heading_2_description }}</p>
                    <hr>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <h1>{{ $aboutUs->engage_user_number_1 }}</h1>
                    <p>{{ $aboutUs->engage_user_title_1 }}</p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <h1>{{ $aboutUs->engage_user_number_2 }}</h1>
                    <p>{{ $aboutUs->engage_user_title_2 }}</p>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <h1>{{ $aboutUs->engage_user_number_3 }}</h1>
                    <p>{{ $aboutUs->engage_user_title_3 }}</p>
                </div>
                <div class="col-md-3  col-sm-6 text-center">
                    <h1>{{ $aboutUs->engage_user_number_4 }}</h1>
                    <p>{{ $aboutUs->engage_user_title_4 }}</p>
                </div>


            </div>
            <div class="about_page_image">
                <a href="#">
                    <img src="{{ asset('uploads/frontend/about/'.$aboutUs->aboutus_image) }}" alt="Image" class="img-fluid py-5"
                        style="height: auto; width: 100%;">
                    {{-- <img src="img/about_img.jpg" alt="Image" class="img-fluid py-5" style="height: auto; width: 100%;"> --}}
                </a>
            </div>
        </div>
    </div>
@endsection
