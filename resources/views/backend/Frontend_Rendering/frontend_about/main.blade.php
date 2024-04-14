@extends('backend.layouts.main')
@section('page-title')
    Frontend About Configuration
@endsection
@section('s-title')
    View Frontend About
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header  ">
            <div class="d-flex">
                <div class="col-md-6 ">
                    <h3 class="text-primary">View About</h3>
                </div>
                <div class=" col-md-6 text-right">
                    <a href="{{ route('admin.about.edit', $aboutUs->id) }}"> <button type="submit" class="btn btn-primary"
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
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="d-flex">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-sm-12 ">
                                <label for="logo_image" class="form-label">Hero(Background) Image:</label>
                                <div class=""><img src="{{ asset('uploads/frontend/about/' . $aboutUs->hero_image) }}"
                                        alt="" srcset="" width="150" height="150"
                                        class="m-auto d-block">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="aboutus_image" class="form-label">About Image:</label>
                                <div class=""><img src="{{ asset('uploads/frontend/about/' . $aboutUs->aboutus_image) }}"
                                        alt="" srcset="" width="150" height="150"
                                        class="m-auto d-block">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->title }}"
                                    id="title" name="title">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_1_title" class="form-label">Title 1:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->heading_1_title }}" id="heading_1_title" name="heading_1_title" placeholder="#1 IT Traning Company in Pokhara, Nepal">
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_2_title" class="form-label">Title 2:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->heading_2_title }}" id="heading_2_title" name="heading_2_title" placeholder="#1 IT Traning Company in Pokhara, Nepal">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="title_description" class="form-label">Title Description</label>
                                <textarea class="form-control " id="heading_2_description" name="heading_2_description" rows="3" disabled>{{ $aboutUs->title_description }}</textarea>
                                </div>


                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_1_description" class="form-label">Title 1 Description:</label>
                                <textarea class="form-control " id="heading_2_description" name="heading_2_description" rows="3" disabled>{{ $aboutUs->heading_1_description }}</textarea>

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="heading_2_description" class="form-label">Title 2 Description:</label>
                                <textarea class="form-control " id="heading_2_description" name="heading_2_description" rows="3" disabled>{{ $aboutUs->heading_2_description }}</textarea>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_1" class="form-label">Engagae User Number</label>
                                <input type="number" disabled  class="form-control text-bold " value="{{ $aboutUs->engage_user_number_1 }}" id="engage_user_number_1" name="engage_user_number_1" placeholder="1000+">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_2" class="form-label">Engagae User Number</label>
                                <input type="number" disabled  class="form-control text-bold " value="{{ $aboutUs->engage_user_number_2 }}" id="engage_user_number_" name="engage_user_number_" placeholder="1000+">
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_3" class="form-label">Engagae User Number</label>
                                <input type="number" disabled  class="form-control text-bold " value="{{ $aboutUs->engage_user_number_3 }}" id="engage_user_number_3" name="engage_user_number_3" placeholder="30+">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_number_4" class="form-label">Engagae User Number</label>
                                <input type="number" disabled  class="form-control text-bold " value="{{ $aboutUs->engage_user_number_4 }}" id="engage_user_number_4" name="engage_user_number_4" placeholder="1000+">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_1" class="form-label">Engagae User Title:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->engage_user_title_1}}" id="engage_user_title_1" name="engage_user_title_1" placeholder="Students">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_2" class="form-label">Engagae User Title:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->engage_user_title_2}}" id="engage_user_title_2" name="engage_user_title_2" placeholder="Instructions">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_3" class="form-label">Engagae User Title:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->engage_user_title_3}}" id="engage_user_title_3" name="engage_user_title_3" placeholder="Courses">

                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="engage_user_title_4" class="form-label">Engagae User Title:</label>
                                <input type="text" disabled class="form-control" value="{{ $aboutUs->engage_user_title_4}}" id="engage_user_title_4" name="engage_user_title_4" placeholder="Succes Students">

                            </div>

                            </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
