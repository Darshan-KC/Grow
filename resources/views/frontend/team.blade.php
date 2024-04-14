<style>
    .image_team{
        width: 250px!important;
        height: 250px!important;
    }
</style>
@extends('frontend.layouts.main')
@section('title', 'Grow - Instructors')
@section('main-section')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px">
        <div class="container text-center py-2">
            <h1 class="text-white display-1">Instructors</h1>
            <div class="d-inline-flex text-white mb-2">
                <p class="m-0 text-uppercase">
                    <a class="text-white" href="{{ route('home') }}">Home</a>
                </p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Instructors</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid py-2">
        <div class="container py-2">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-primary text-uppercase pb-2">
                    Instructors
                </h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px">
                @foreach ($instructor as $instr)
                    <div class="team-item">
                        @if ($instr->photo != '')
                            <img class="img-fluid image_team" src="{{ asset('uploads/profile/' . $instr->photo) }}"
                                alt="profile" srcset="">
                        @else
                            <img class="img-fluid w-100" src="{{ asset('uploads/profile/default.png') }}" alt="profile"
                                srcset="">
                        @endif
                        {{-- <img class="img-fluid w-100" src="{{ asset('uploads/extra/team-1.jpg') }}" alt="" /> --}}
                        <div class="bg-light text-center p-4">
                            <h5 class="mb-3">{{ $instr->name }}</h5>
                            {{-- <h5 class="mb-3">Instructor Name</h5>
                            <p class="mb-2">Web Design & Development</p> --}}
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="team-item">
                        <img class="img-fluid w-100" src="{{ asset('uploads/extra/team-2.jpg') }}" alt="" />
                        <div class="bg-light text-center p-4">
                            <h5 class="mb-3">Instructor Name</h5>
                            <p class="mb-2">Web Design & Development</p>
                            <div class="d-flex justify-content-center">
                                <a class="mx-1 p-1" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 p-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 p-1" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-1 p-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a class="mx-1 p-1" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img class="img-fluid w-100" src="{{ asset('uploads/extra/team-3.jpg') }}" alt="" />
                        <div class="bg-light text-center p-4">
                            <h5 class="mb-3">Instructor Name</h5>
                            <p class="mb-2">Web Design & Development</p>
                            <div class="d-flex justify-content-center">
                                <a class="mx-1 p-1" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 p-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 p-1" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-1 p-1" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a class="mx-1 p-1" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <img class="img-fluid w-100" src="{{ asset('uploads/extra/team-4.jpg') }}" alt="" />
                        <div class="bg-light text-center p-4">
                            <h5 class="mb-3">Instructor Name</h5>
                            <p class="mb-2">Web Design & Development</p>
                            <div class="d-flex justify-content-center">
                                <a class="mx-1 p-1" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 p-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 p-1" href="https://www.linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="mx-1 p-1" href="https://www.instagram.com/"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="mx-1 p-1" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
