@extends('frontend.layouts.main')
@section('title', 'Grow - Instructor Edit Course_content')
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            Edit Course Details
            {{-- sldfjdslfj --}}
        </div>
        <div class="card-body">
            <div class="pt-5">
                <h1>Edit Course Details</h1>
                <form action="{{ route('instructor.course-content.update',$courseContent->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Sub Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$courseContent->title}}" required>
                    </div>
                    <div class="mb-3">
                        <div class=" m-sm-auto  ">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video id="videoPlayer" controls>
                                    <source src="{{ asset('uploads/videos/course/'.$courseContent->video) }}" type="video/mp4">
                                </video>


                            </div>
                            <div class="form-group">
                                <label for="video">Select Video</label>
                                <input type="file" class="form-control-file" id="video" name="video"
                                    accept="video/*">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
