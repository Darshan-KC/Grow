@extends('frontend.layouts.main')
@section('title', 'Grow - Contact Us')
@section('main-section')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Contact</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase">
                    <a class="text-white" href="{{ route('home') }}">Home</a>
                </p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <a href="https://www.google.com/maps/place/28.241962830603555, 83.99269748655203"
                                    class="text-white-50 mb-2" target="_blank"> <i
                                        class="fa fa-2x fa-map-marker-alt text-white"></i></a>
                            </div>
                            <div class="mt-n1">
                                <h4>{{  $siteContact->location_heading }}</h4>
                                <p class="m-0"> <a
                                        href="{{ $siteContact->location_value }}"
                                        class="text-dark mb-2" target="_blank">{{ $siteContact->location_name }}</a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <a href="tel: +012 345 6789" class="text-dark"> <i
                                        class="fa fa-2x fa-phone-alt text-white"></i></a>
                            </div>
                            <div class="mt-n1">
                                <h4>{{ $siteContact->number_heading }}</h4>
                                <p class="m-0"><a href="{{$siteContact->number  }}" class="text-dark">{{$siteContact->number }}</a> </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-primary mr-4">
                                <a href="mailto:{{ $siteContact->email }}"> <i
                                        class="fa fa-2x fa-envelope text-white"></i></a>
                            </div>
                            <div class="mt-n1">
                                <h4>{{ $siteContact->email_heading }}</h4>
                                <p class="m-0"><a href="mailto:{{ $siteContact->email }}"
                                        class="text-dark">{{ $siteContact->email }}
                                    </a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                            {{ $siteContact->contact_message_subhead }}
                        </h6>
                        <h1 class="display-4">{{ $siteContact->contact_message_heading }}</h1>
                        @if (Session::has('msg'))
                        <div class="alert alert-primary alert-dismissible fade show w-50" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    </div>
                    <div class="contact-form">
                        <form method="POST" action="{{ route('admin.contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Your Name" name="name" value="{{ old('name') }}" />
                                    <div class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Your Email" name="email" value="{{ old('email') }}" />
                                    <div class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Subject" name="subject" value="{{ old('subject') }}" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message"
                                    name="message">{{ old('message') }}</textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5 costum-buttom-border-radious" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
