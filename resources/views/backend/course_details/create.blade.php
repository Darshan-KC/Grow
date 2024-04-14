@extends('backend.layouts.main')
@section('s-title')
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            Create Course
        </div>
        <div class="card-body">
            <div class="pt-5">
                <h1>Add a New course Details</h1>
                <form action="{{ route('admin.course-content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            required>
                        <div class="text-danger">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="edit-img m-sm-auto m-md-1 ">
                            <div class="form-group">
                                <label for="video">Select Video</label>
                                <input type="file" class="form-control-file" id="video" name="video"
                                    accept="video/*">
                                <div class="text-danger">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
