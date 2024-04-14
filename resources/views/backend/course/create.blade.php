@extends('backend.layouts.main')
@section('page-title')
    Course Information
@endsection
@section('s-title')
    Create Course
@endsection

@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Add Courses</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Instructor:</label><br>
                        <select class="form-select w-100 p-2 ps-0 form-control" id="category" name="i_id">
                            <option value="" selected>Select a category</option>
                            @foreach ($instructor as $inst)
                                <option value="{{ $inst->id }}">{{ $inst->name }}</option>
                            @endforeach
                            <!-- Add more categories as needed -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image:</label>
                        <input type="file" class="form-control p-2 h-25" id="image" name="image" accept="image/*"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="feature_image" class="form-label">Upload Feature Image:</label>
                        <input type="file" class="form-control p-2 h-50" id="feature_image" name="feature_image"
                            accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (minutes): </label>
                        <input type="number" class="form-control" id="duration" name="duration" step="1" required>
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
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
