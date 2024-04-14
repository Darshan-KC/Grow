@extends('frontend.layouts.main')
@section('title', 'Grow - Instructor Course_content')
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Course Details of course:
        </div>
        @if (Session::has('msg'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('msg') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div>
            {{-- <a name="" id="" class="btn btn-primary" href="{{route('instructor.course-content.create')}}" role="button">Create course-content</a> --}}
        </div>
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
                    @foreach ($content as $contents)

                    <tr>
                        <td>{{$contents->title}}</td>
                        <td>
                            <a href="{{route('instructor.course-content.show',$contents->id)}}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{route('instructor.course-content.edit',$contents->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{route('instructor.course-content.destroy',$contents->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
