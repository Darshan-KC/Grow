@extends('backend.layouts.main')

@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Products
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
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through your list of courses here -->
                    @foreach ($course as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->duration }} minutes</td>
                            <td><img src="{{ asset('uploads/courses/' . $item->image) }}" alt="product Image"
                                    height="100">
                            </td>
                            <td>

                                <a href="{{ route('admin.course.show', $item->id) }}"
                                    class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('admin.course.edit', $item->id) }}"
                                    class="btn btn-success btn-sm">Edit</a>
                                <form action="{{ route('admin.course.destroy', $item->id) }}" method="post"
                                    class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
