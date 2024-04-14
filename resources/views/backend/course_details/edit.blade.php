@extends('backend.layouts.main')
@section('page-title')
    Course Details
@endsection
@section('s-title')
    Edit Course Details
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Edit Courses</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form action="{{ route('admin.course-content.edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Sub Title:</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $course_content->title }}" name="title">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class=" m-sm-auto  ">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video id="videoPlayer" controls height="100">
                                <source src="{{ asset('uploads/videos/course/' . $course_content->video) }}}"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="form-group">
                            <label for="video">Select Video</label>
                            <input type="file" class="form-control-file" id="video" name="video" accept="video/*">
                            @error('i_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
