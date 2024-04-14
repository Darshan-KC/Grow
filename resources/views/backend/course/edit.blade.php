@extends('backend.layouts.main')
@section('page-title')
    Course Information
@endsection
@section('s-title')
    Edit Course
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Edit Courses</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form action="{{ route('admin.course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $course->title }}" name="title">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Instructor:</label><br>
                        <select class="form-select w-100 p-2 ps-0 form-control" id="category" name="i_id">
                            <option value="" selected>Select a category</option>
                            @error('i_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            {{-- @foreach ($instructor as $inst)
                                <option value="{{ $inst->id }}">{{ $inst->name }}</option>
                            @endforeach --}}
                            <!-- Add more categories as needed -->
                        </select>
                    </div>
                    <div>
                        <div class="d-flex mb-3">
                            <div class="row col-lg-12">
                                <div class="col-lg-9  col-sm-6 col-12">
                                    <label for="image" class="form-label">Upload Image:</label>
                                    <input type="file" class="form-control p-2 h-50" id="image" name="image"
                                        accept="image/*">
                                </div>
                                <div class=" col-lg-3   col-sm-6 col-12">
                                    <img src="{{ asset('uploads/courses/' . $course->image) }}" class="m-auto d-block"
                                        alt="user profile" width="120" height="120">
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="row col-lg-12">
                                <div class="col-lg-9  col-sm-6 col-12">
                                    <label for="feature_image" class="form-label">Upload Feature Image:</label>
                                    <input type="file" class="form-control p-2 h-50" id="feature_image"
                                        name="feature_image" accept="image/*">
                                </div>
                                <div class="col-lg-3   col-sm-6 col-12">
                                    <img src="{{ asset('uploads/course_feature_imgs/' . $course->feature_image) }}"
                                        class="m-auto d-block" alt="user profile" width="120" height="120">
                                </div>
                                @error('reature_image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration (minutes): </label>
                            <input type="number" class="form-control" id="duration" value="{{ $course->duration }}"
                                name="duration" step="1">
                            @error('duration')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category">Category:</label>
                            <input list="categories" name="category" id="category">
                            <datalist id="categories">
                                <option value="Web Development">
                                <option value="Artificial Intelligence">
                                <option value="Ethical Hacking">
                                <option value="HTML">
                                <option value="CSS">
                            </datalist>
                            <!-- Add more categories as needed -->
                            </select>
                            @error('category')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $course->description }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
