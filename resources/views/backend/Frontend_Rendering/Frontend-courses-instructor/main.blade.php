@extends('backend.layouts.main')
@section('page-title')
    Home Configuration
@endsection
@section('s-title')
    View Frontened Course/Instructor
@endsection
@section('main-section')
    <div class="card mt-4 ">
        <div class="card-header  ">
            <div class="d-flex">
                <div class="col-md-6 ">
                    <h3 class="text-primary">View Course/Instructor</h3>
                </div>
                <div class=" col-md-6 text-right">
                    <a href="{{ route('admin.course_instructor.edit',  $course_instructor) }}"> <button type="submit" class="btn btn-primary"
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
                <div class="mb-3 ">
                    <label for="course_head" class="form-label">Course_Head:</label>
                    <input type="text" class="form-control" value="{{$course_instructor->course_head  }}" id="course_head"
                        name="course_head" disabled>

                </div>
                <div class="mb-3">
                    <label for="meet_instruction" class="form-label">Instructor_Head</label>
                    <input type="text" class="form-control" value="{{$course_instructor->meet_instruction  }}" id="meet_instruction"
                        name="meet_instruction" disabled>

                </div>
            </div>
        </div>
    </div>
@endsection
