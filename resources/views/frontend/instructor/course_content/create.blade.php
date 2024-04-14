@extends('frontend.layouts.main')
@section('title', 'Grow - Instructor Create Content')
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            Create Course
            {{-- sldfjsdl --}}
        </div>
        <div class="card-body">
            <div class="pt-5">
                <h1>Add a New course Details</h1>
                <form action="{{ route('instructor.course-content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            required>
                            <div class="text-danger">
                                @error('title')
                                    {{$message}}
                                @enderror
                            </div>
                    </div>
                    <div class="mb-3">
                        <div class="edit-img m-sm-auto m-md-1 ">
                            <div class="form-group">
                                <label for="video">Select Video</label>
                                <input type="file" class="form-control-file" id="video" name="video"
                                    accept="video/*">
                                    <div class="text-danger">
                                        @error('video')
                                            {{$message}}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                    </div>
                    <input type="number" name="course_id" value="{{$course->id}}" hidden>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        const s = "djklajdla;"
        $.ajax({
            type: "method",
            url: "http://localhost:8000/api/courses?s="+ s,
            data: {
                name:"dakjhdk",

            },
            dataType: "json",
            success: function (response) {

            }
        });
    </script> --}}
@endsection
