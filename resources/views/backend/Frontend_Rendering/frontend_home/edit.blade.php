@extends('backend.layouts.main')
@section('page-title')
    Frontend Home Configuration
@endsection
@section('s-title')
    Edit Frontend Home
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Edit Home </h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form method="POST" action="{{ route('admin.home.update', $home->id) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="d-flex">
                        <div class="row">
                            <div class="mb-3 col-md-6  col-sm-12">
                                <label for="logo_image" class="form-label">Logo Image:</label>
                                <input type="file" class="form-control " id="logo_image" name="logo_image">
                                <div class="text-danger mb-2">
                                    @error('logo_image')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('uploads/frontend/home/' . $home->logo_image) }}"
                                        class="m-auto d-block" alt="" srcset="" width="120px" height="120px">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="hero_image" class="form-label">Hero Image:</label>
                                <input type="file" class="form-control  " id="hero_image" name="hero_image">
                                <div class="text-danger mb-2">
                                    @error('hero_image')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <img src="{{ asset('uploads/frontend/home/' . $home->hero_image) }}"
                                        class="m-auto d-block" alt="" srcset="" width="120px" height="120px">
                                </div>

                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="logo_name" class="form-label">Logo Name:</label>
                                <input type="text" class="form-control" value="{{ $home->logo_name }}" id="logo_name"
                                    name="logo_name">
                                <div class="text-danger mb-2">
                                    @error('logo_name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="hero_title" class="form-label">Hero Title:</label>
                                <input type="text" class="form-control" value="{{ $home->hero_title }}" id="hero_title"
                                    name="hero_title">
                                <div class="text-danger mb-2">
                                    @error('hero_title')
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="hero_subtitle" class="form-label">Hero Subtitle:</label>
                                <input type="text" class="form-control" value="{{ $home->hero_subtitle }}"
                                    id="hero_subtitle" name="hero_subtitle">
                                <div class="text-danger mb-2">
                                    @error('hero_subtitle')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="hero_description" class="form-label">Hero Description:</label>
                                <textarea class="form-control"  name="hero_description" id="hero_description"
                                    rows="4">{{ $home->hero_description }}</textarea>
                                <div class="text-danger mb-2">
                                    @error('hero_description')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="course_info" class="form-label">Course Heading:</label>
                                <input type="text" class="form-control" value="{{ $home->course_info }}"
                                    id="course_info" name="course_info">
                                <div class="text-danger mb-2">
                                    @error('course_info')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="footer_title_1" class="form-label">Footer Title 1</label>
                                <input type="text" class="form-control" value="{{ $home->footer_title_1 }}"
                                    id="footer_title_1" name="footer_title_1">
                                <div class="text-danger mb-2">
                                    @error('footer_title_1')
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="footer_title_2" class="form-label">Footer Title 2:</label>
                                <input type="text" class="form-control" value="{{ $home->footer_title_2 }}"
                                    id="footer_title_2" name="footer_title_2">
                                <div class="text-danger mb-2">
                                    @error('footer_title_2')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6" col-sm-12>
                                <label for="footer_title_3" class="form-label">Footer Title 3:</label>
                                <input type="text" class="form-control" value="{{ $home->footer_title_3 }}"
                                    id="footer_title_3" name="footer_title_3">
                                <div class="text-danger mb-2">
                                    @error('footer_title_3')
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>
                            <div class="mb-3 col-12">
                                <label for="copyrighter" class="form-label">Copyrighter:</label>
                                <input type="text" class="form-control" value="{{ $home->copyrighter }}"
                                    id="copyrighter" name="copyrighter">
                                <div class="text-danger mb-2">
                                    @error('copyrighter')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
@endsection
