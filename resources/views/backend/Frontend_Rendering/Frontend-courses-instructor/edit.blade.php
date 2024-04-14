@extends('backend.layouts.main')
@section('page-title')
    Home Configuration
@endsection
@section('s-title')
    Edit Frontened Course/Instructor
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Edit Course/Instructor</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form method="POST" action="{{ route('admin.course_instructor.update', $coursesInstructor->id) }}" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="mb-3 ">
                        <label for="course_head" class="form-label">Course_Head:</label>
                        <input type="text" class="form-control" value="{{$coursesInstructor->course_head}}" id="course_head"
                            name="course_head">
                        <div class="text-danger mb-2">
                            @error('course_head')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="meet_instruction" class="form-label">Instructor_Head</label>
                        <input type="text" class="form-control" value="{{ $coursesInstructor->meet_instruction  }}"
                            id="meet_instruction" name="meet_instruction">
                        <div class="text-danger mb-2">
                            @error('meet_instruction')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
