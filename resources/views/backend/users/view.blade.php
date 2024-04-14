@extends('backend.layouts.main')
@section('page-title')
    User Information
@endsection
@section('s-title')
    view User
@endsection
@section('main-section')
    <div class="card mt-4">
        <div class="card-header">
            View user details
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        @if ($user->photo != '')
                        <img class="card-img-top" src="{{ asset('uploads/profile/' . $user->photo) }}" alt="profile" srcset=""
                        alt="Card image cap">
                                        @endif
                        {{-- <img class="card-img-top" src="{{ asset('backend/dist/img/photo1.png') }}" alt="profile" srcset=""
                            alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                        </div>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="title" name="name"
                                    value="{{ $user->name }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address:</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ $user->email }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Role:</label><br>
                                <select class="form-select w-100 p-2 ps-0 form-control" name="role" id="category"
                                    name="category" disabled>
                                    <option value="a" {{ $user->role == 'a' ? 'selected' : '' }}>Admin</option>
                                    <option value="i" {{ $user->role == 'i' ? 'selected' : '' }}>Instructor</option>
                                    <option value="u" {{ $user->role == 'u' ? 'selected' : '' }}>User</option>
                                    <!-- Add more categories as needed -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="address" class="form-control" id="address" value="{{ $user->address }}"
                                    contact="address" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="contact" class="form-control" name="contact" value="{{ $user->contact }}"
                                    id="contact" disabled>
                            </div>
                        </form>

                        {{-- <ul class="list-group list-group-flush">

                      <li class="list-group-item"><strong><strong>Name:</strong>Sagar Timilsina</li>
                      <li class="list-group-item"><strong>Email address:</strong>@gmail.com</li>
                      <li class="list-group-item"><strong>Role:</strong>admin</li>
                      <li class="list-group-item"><strong>Address:</strong>Pokhara</li>
                      <li class="list-group-item"><strong>Contact:</strong>+97795845652</li>
                    </ul> --}}

                    </div>
                </div>
            </div>
        </div>
    @endsection
