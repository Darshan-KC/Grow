@extends('frontend.layouts.main')
@section('title', 'Grow - Instructor Course')
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View Course
        </div>
        <div class="p-3">
            <a name="" id="" class="btn btn-primary" href="{{route('instructor.course-content.create',['id'=>$course->id])}}" role="button">Create Content</a>
            <a name="" id="" class="btn btn-primary" href="{{route('instructor.course-content.index')}}" role="button">View Contents</a>
            {{-- <a name="" id="" class="btn btn-primary" href="" role="button">Create Quiz</a>
            <a name="" id="" class="btn btn-primary" href="" role="button">View Quiz</a>
            <a name="" id="" class="btn btn-primary" href="" role="button">View Notes</a>
            <a name="" id="" class="btn btn-primary" href="" role="button">View Notes</a> --}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <img src="{{ asset('uploads/courses/'.$course->image) }}" class="card-img-top" alt="product Image"
                            height="400" style="object-fit: contain;">
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="mb-3 d-flex">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="name"
                                        value="{{$course->title}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description : </label>
                                    <textarea class="form-control" name="" id="" rows="3">{{$course->description}}</textarea>
                                </div>
                                <div class="mb-3 d-flex">
                                    <label for="category" class="form-label">Category:</label>
                                    <input type="email" class="form-control" name="category" id="email"
                                        value="{{$course->teachers->category}}" disabled>
                                </div>
                            </form>
                            {{-- <h5 class="card-title"><strong>Title: {{}}</strong></h5>
                            <p class="card-text">{{}}</p>
                            <p class="card-text"><strong>Category:</strong>{{}}</p>
                            <p class="card-text"><strong>Price:</strong>$ {{$course->price}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection


