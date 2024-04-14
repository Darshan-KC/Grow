@extends('backend.layouts.main')
@section('page-title')
    Frontend About Configuration
@endsection
@section('s-title')
    Create Frontend About
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="text-primary">  Create Frontend About </h4>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="hero_image" class="form-label">Hero Image:</label>
                                <input type="file" class="form-control   p-2 h-50"  id="hero_image" name="hero_image">
                                <div class="text-danger mb-2">
                                    @error('hero_image')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="aboutus_image" class="form-label">About Image:</label>
                                <input type="file" class="form-control   p-2 h-50"  id="aboutus_image" name="aboutus_image">
                                <div class="text-danger mb-2">
                                    @error('aboutus_image')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control " value="{{ old('title') }}" id="title" name="title" placeholder="About Us">
                                <div class="text-danger mb-2">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_1_title" class="form-label">Title 1:</label>
                                <input type="text" class="form-control " value="{{ old('heading_1_title') }}" id="heading_1_title" name="heading_1_title" placeholder="#1 IT Traning Company in Pokhara, Nepal">
                                    <div class="text-danger mb-2">
                                        @error('heading_1_title')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_2_title" class="form-label">Title 2:</label>
                                <input type="text" class="form-control " value="{{ old('heading_2_title') }}" id="heading_2_title" name="heading_2_title" placeholder="#1 IT Traning Company in Pokhara, Nepal">
                                    <div class="text-danger mb-2">
                                        @error('heading_2_title')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="title_description" class="form-label">Title Description</label>
                                  <textarea class="form-control " id="title_description" name="title_description" rows="3"></textarea>
                                <div class="text-danger mb-2">
                                    @error('title_description')
                                        {{ $message }}
                                    @enderror
                                </div>

                            </div>


                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_1_description" class="form-label">Title 1 Description:</label>
                                <textarea class="form-control " id="heading_1_description" name="heading_1_description" rows="3"></textarea>
                                    <div class="text-danger mb-2">
                                        @error('heading_1_description')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_2_description" class="form-label">Title 2 Description:</label>
                                <textarea class="form-control " id="heading_2_description" name="heading_2_description" rows="3"></textarea>
                                    <div class="text-danger mb-2">
                                        @error('heading_2_description')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_1" class="form-label">Engagae User Number</label>
                                <input type="number" class="form-control " value="{{ old('engage_user_number_1') }}" id="engage_user_number_1" name="engage_user_number_1" placeholder="1000+">
                                <div class="text-danger mb-2">
                                    @error('engage_user_number_1')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_2" class="form-label">Engagae User Number</label>
                                <input type="number" class="form-control " value="{{ old('engage_user_number_2') }}" id="engage_user_number_2" name="engage_user_number_2" placeholder="1000+">
                                <div class="text-danger mb-2">
                                    @error('engage_user_number_2')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_3" class="form-label">Engagae User Number</label>
                                <input type="number" class="form-control " value="{{ old('engage_user_number_3') }}" id="engage_user_number_3" name="engage_user_number_3" placeholder="30+">
                                <div class="text-danger mb-2">
                                    @error('engage_user_number_3')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_4" class="form-label">Engagae User Number</label>
                                <input type="number" class="form-control " value="{{ old('engage_user_number_4') }}" id="engage_user_number_4" name="engage_user_number_4" placeholder="1000+">
                                <div class="text-danger mb-2">
                                    @error('engage_user_number_4')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_1" class="form-label">Engagae User Title:</label>
                                <input type="text" class="form-control " value="{{ old('engage_user_title_1') }}" id="engage_user_title_1" name="engage_user_title_1" placeholder="Students">
                                <div class="text-danger mb-2">
                                    @error('engage_user_title_1')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_2" class="form-label">Engagae User Title:</label>
                                <input type="text" class="form-control " value="{{ old('engage_user_title_2') }}" id="engage_user_title_2" name="engage_user_title_2" placeholder="Instructions">
                                <div class="text-danger mb-2">
                                    @error('engage_user_title_2')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_3" class="form-label">Engagae User Title:</label>
                                <input type="text" class="form-control " value="{{ old('engage_user_title_3') }}" id="engage_user_title_3" name="engage_user_title_3" placeholder="Courses">
                                <div class="text-danger mb-2">
                                    @error('engage_user_title_3')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_4" class="form-label">Engagae User Title:</label>
                                <input type="text" class="form-control " value="{{ old('engage_user_title_4') }}" id="engage_user_title_4" name="engage_user_title_4" placeholder="Succes Students">
                                <div class="text-danger mb-2">
                                    @error('engage_user_title_4')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
