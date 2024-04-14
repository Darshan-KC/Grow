@extends('backend.layouts.main')
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Course
        </div>
        <div class="p-3">
            {{-- <a name="" id="" class="btn btn-primary" href="{{route('admin.course-content.index',['id'=>$course->c_id])}}" role="button">View Contents</a>
            <a name="" id="" class="btn btn-primary" href="{{route('admin.quiz.create',['id'=>$course->c_id])}}" role="button">Create Quiz</a>
            <a name="" id="" class="btn btn-primary" href="" role="button">View Notes</a> --}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <img src="{{ asset('uploads/courses/'.$course->image) }}" class="card-img-top" alt="product Image"
                            height="400">
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="mb-3 d-flex">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="name"
                                        value="{{$course->title}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <p>{{$course->description}}</p>
                                </div>
                                <div class="mb-3 d-flex">
                                    <label for="category" class="form-label">Category:</label>
                                    <input type="text" class="form-control" name="category" id="email"
                                        value="{{$course->teachers->category}}" disabled>
                                </div>
                            </form>
                            {{-- <h5 class="card-title"><strong>Title: {{$course->title}}</strong></h5>
                            <p class="card-text">{{$course->description}}</p>
                            <p class="card-text"><strong>Category:</strong>{{$teaching->category}}</p>
                            <p class="card-text"><strong>Price:</strong>$ {{$course->price}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection


