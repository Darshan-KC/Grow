@extends('frontend.layouts.main')
@section('title', 'Grow - User Dashboard')
@section('main-section')
<div class="container">
    <div class="main-body">

        <nav aria-label="breadcrumb" class="main-breadcrumb mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('instructor') }}">Instructor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
            </ol>
        </nav>
          <h3 class="text-center text-primary m-4"> Update Your Profile</h3>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>Sagar Timilsina</h4>
                                <p class="text-secondary mb-1">Web Developer</p>
                                <p class="text-muted font-size-sm">Pokhara</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8 align-items-center">
                <div class="card mb-1">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-3">
                                <div class="mb-1">
                                  <label for="name" class="form-label"><h6 class="mb-0">Full Name</h6></label>
                                </div>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="text" name="name" id="name" class="w-100  btn text-left"  value="Sagar Timilsina">
                            </div>

                        </div>
                        <hr>
                        <div class="row ">
                            <div class="col-sm-3">
                                <div class="mb-1">
                                  <label for="photo" class="form-label"><h6 class="mb-0">Photo</h6></label>
                                </div>
                            </div>
                            <div class="col-sm-9 d-flex">
                                <input type="file" name="photo" id="photo" class="w-100  btn text-left"  >
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User"
                                 width="100">
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-1">
                                  <label for="name" class="form-label"><h6 class="mb-0">Date of Birth</h6></label>
                                </div>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="text" name="name" id="name" class="w-100  btn text-left"  value="02/18/2001">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-1">
                                  <label for="age" class="form-label"><h6 class="mb-0">Age</h6></label>
                                </div>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="number" name="age" id="age" class="w-100  btn text-left"  value="22">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-1">
                                  <label for="name" class="form-label"><h6 class="mb-0">Gender</h6></label>
                                </div>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="radio" name="gender" id="gender" class="m-2 text-left"  value="Male">Male
                                <input type="radio" name="gender" id="gender" class=" m-2 text-left"  value="Male">Female
                                <input type="radio" name="gender" id="gender" class=" m-2 text-left"  value="Male">Others
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name" class="form-label"><h6 class="mb-0">Email</h6></label>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="email" name="name" id="name" class="w-100  btn text-left" value="sagartimilsina.xdezo@gmail.com">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name" class="form-label"><h6 class="mb-0">Phone</h6></label>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="text" name="name" id="name" class="w-100  btn text-left" value="9819113548">
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name" class="form-label"><h6 class="mb-0">Address</h6></label>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="text" name="name" id="name" class="w-100  btn text-left" value="Pokhara">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="name" class="form-label"><h6 class="mb-0">Position/Profession</h6></label>
                            </div>
                            <div class="col-sm-9 ">
                                <input type="text" name="name" id="name" class="w-100  btn text-left" value="Web Developer">
                            </div>
                        </div>
                        <hr>
                        <div class="row ">
                            <div class="col-sm-3">
                                <div class="mb-1">
                                  <label for="photo" class="form-label"><h6 class="mb-0">Curriculum vitae</h6></label>
                                </div>
                            </div>
                            <div class="col-sm-9 d-flex">
                                <input type="file" name="photo" id="photo" class="w-100  btn text-left"  >
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User"
                                 width="100">
                            </div>

                        </div>
                       <hr>
                       <div class="row ">
                        <div class="col-sm-3">
                            <div class="mb-1">
                              <label for="name" class="form-label"><h6 class="mb-0">Website</h6></label>
                            </div>
                        </div>
                        <div class="col-sm-9 ">
                            <input type="text" name="name" id="name" class="w-100  btn text-left"  value="http://127.0.0.1:8000/courses">
                            <span class="text-danger w-100">
                                <small>*Valid website link</small>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col-sm-3">
                            <div class="mb-1">
                              <label for="name" class="form-label"><h6 class="mb-0">LinkedIn</h6></label>
                            </div>
                        </div>
                        <div class="col-sm-9 ">
                            <input type="text" name="name" id="name" class="w-100  btn text-left"  value="https://www.linkedin.com/in/sagar-timilsina-bb0570234/">
                            <span class="text-danger w-100">
                                <small>*Valid Linkedin Profile</small>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col-sm-3">
                            <div class="mb-1">
                              <label for="name" class="form-label"><h6 class="mb-0">Facebook</h6></label>
                            </div>
                        </div>
                        <div class="col-sm-9 ">
                            <input type="text" name="name" id="name" class="w-100  btn text-left"  value="https://twitter.com/">
                            <span class="text-danger">
                                <small>*Valid Facebook Profile</small>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col-sm-3">
                            <div class="mb-1">
                              <label for="name" class="form-label"><h6 class="mb-0">Twitter</h6></label>
                            </div>
                        </div>
                        <div class="col-sm-9 ">
                            <input type="text" name="name" id="name" class="w-100  btn text-left"  value="https://twitter.com/">
                            <span class="text-danger">
                                <small>*Valid Twitter Profile</small>
                            </span>
                        </div>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank" href="{{ route('instructor') }}">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

