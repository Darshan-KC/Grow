@extends('backend.layouts.main')
@section('page-title')
    Note Configuration
@endsection
@section('s-title')
    Create Note
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-primary">Create Note</h3>
        </div>
        <div class="card-body">
            <div class="pt-2">
                <form method="POST" action="{{ route('admin.notes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Note Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                        <div class="text-danger mb-2">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="title" class="form-label">Note Content:</label>
                        <textarea name="content" class="form-control" name="content" id="content"rows="4"> </textarea>
                        <div class="text-danger mb-2">
                            @error('content')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- PDF Upload -->
                    <div class="mb-3">
                        <label for="pdf" class="form-label">Upload PDF:</label>
                        <input type="file" class="form-control h-25 p-2" name="pdf" id="pdf" accept=".pdf">
                        <div class="text-danger mb-2">
                            @error('pdf')
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
