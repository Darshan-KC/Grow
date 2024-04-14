@extends('backend.layouts.main')
@section('page-title')
     message view
@endsection
@section('s-title')
    message-view
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            Detail message from user
        </div>
        <div class="card-body">
            <div class="pt-2">
                <h1>Message</h1>
                <div >
                    <div class="mb-3">
                        <label for="title" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="title" value="{{$data->name}}" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{$data->email}}" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">subject</label>
                        <input type="text" class="form-control" value="{{$data->subject}}" id="title">
                    </div>

                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4">{{$data->message}}</textarea>
                  </div>

                </div>
            </div>
        </div>
    </div>
@endsection
