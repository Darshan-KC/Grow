@extends('backend.layouts.main')
@section('s-title')
    View Content
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Course Details of course: {{ $course->title }}
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <!-- Loop through your list of courses here --> --}}
                    @foreach ($course_content as $content)
                        <tr>
                            <td>{{ $content->title }}</td>
                            <td>
                                <a href="{{ route('admin.course-content.show', $content->id) }}"
                                    class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('admin.course-content.edit', $content->id) }}"
                                    class="btn btn-success btn-sm">Edit</a>
                                <a href="{{ route('admin.course-content.destroy', $content->id) }}"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
