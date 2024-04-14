@extends('backend.layouts.main')
@section('page-title')
    Home Configuration
@endsection
@section('s-title')
    View Home
@endsection
@section('main-section')
    <div class="card mt-4 ">
        <div class="card-header  ">
            <div class="d-flex">
                <div class="col-md-6 ">
                    <h3 class="text-primary">View Home</h3>
                </div>
                <div class=" col-md-6 text-right">
                    <a href="{{ route('admin.home.edit', $home->id) }}"> <button type="submit" class="btn btn-primary"
                            name="submit">Edit</button></a>
                </div>
            </div>
        </div>
        @if (Session::has('msg'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('msg') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card-body">
            <div class="pt-2">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-sm-12 ">
                                <label for="logo_image" class="form-label">Logo Image:</label>
                                <div class=""><img src="{{ asset('uploads/frontend/home/' . $home->logo_image) }}"
                                        alt="" srcset="" width="150" height="150" class="m-auto d-block">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="hero_image" class="form-label">Hero Image:</label>
                                <div class=""><img src="{{ asset('uploads/frontend/home/' . $home->hero_image) }}"
                                        alt="" srcset="" width="150" height="150" class="m-auto d-block">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="logo_name" class="form-label">Logo Name:</label>
                                <input type="text" class="form-control" id="logo_name" name="logo_name"
                                    value="{{ $home->logo_name }}" disabled>

                            </div>

                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="hero_title" class="form-label">Hero Title:</label>
                                <input type="text" class="form-control" id="hero_title" name="hero_title"
                                    value="{{ $home->hero_title }}" disabled>

                                </div>
                                <div class="mb-3 col-md-6 col-sm-12">
                                    <label for="hero_subtitle" class="form-label">Hero Subtitle:</label>
                                    <input type="text" class="form-control" id="hero_subtitle" name="hero_subtitle"
                                        value="{{ $home->hero_subtitle }}" disabled>
                                </div>
                                <div class="mb-3 col-md-6 col-sm-12">
                                    <label for="hero_description" class="form-label">Hero Description:</label>
                                    <textarea class="form-control"  name="hero_description" id="hero_description"
                                    rows="4" disabled>{{ $home->hero_description }}</textarea>
                                </div>

                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="course_info" class="form-label">Course Heading:</label>
                                <input type="text" class="form-control" id="course_info" name="course_info"
                                    value="{{ $home->course_info }}" disabled>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="footer_title_1" class="form-label">Footer Title 1</label>
                                <input type="text" class="form-control" id="footer_title_1" name="footer_title_1"
                                    value="{{ $home->footer_title_1 }}" disabled>

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="footer_title_2" class="form-label">Footer Title 2:</label>
                                <input type="text" class="form-control" id="footer_title_2" name="footer_title_2"
                                    value="{{ $home->footer_title_2 }}" disabled>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="footer_title_3" class="form-label">Footer Title 3:</label>
                                <input type="text" class="form-control" id="footer_title_3" name="footer_title_1"
                                    value="{{ $home->footer_title_3 }}" disabled>

                            </div>
                            <div class="mb-3 col-12">
                                <label for="copyrighter" class="form-label">Copyrighter:</label>
                                <input type="text" class="form-control" id="copyrighter" name="footer_title_1"
                                    value="{{ $home->copyrighter }}" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
