@extends('backend.layouts.main')
@section('page-title')
    Home Configuration
@endsection
@section('s-title')
    Create Frontened Course/Instructor
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Create Course/Instructor </h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form method="POST" action="{{ route('admin.course_instructor.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ">
                        <label for="course_head" class="form-label">Course_Head:</label>
                        <input type="text" class="form-control" value="{{ old('course_head') }}" id="course_head"
                            name="course_head">
                        <div class="text-danger mb-2">
                            @error('course_head')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="meet_instruction" class="form-label">Instructor_Head</label>
                        <input type="text" class="form-control" value="{{ old('meet_instruction') }}"
                            id="meet_instruction" name="meet_instruction">
                        <div class="text-danger mb-2">
                            @error('meet_instruction')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
