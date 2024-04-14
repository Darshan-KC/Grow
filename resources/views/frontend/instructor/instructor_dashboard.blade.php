@extends('frontend.layouts.main')
@section('title', 'Grow - Instructor Dashboard')
{{-- <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

@section('main-section')

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-md-2 col-sm-3 text-center col-4 py-2">
                <div class="d-flex align-items-center" style="height: 237px;">
                    <div class="container text-center">
                        <div class="text-center pt-3 ">

                            <img src="{{ asset('uploads/extra/courses-2.jpg') }}"
                                style="width: 100%; height:auto; max-width: 150px; box-shadow: 1px 1px 8px 1px #ffffff7e,1px -1px 8px 1px #ffffff7e,-1px -1px 8px 1px #ffffff7e,-1px 1px 8px 1px #ffffff7e;"
                                alt="profile" class="rounded-circle">
                        </div>
                        <div class="text-white pt-3">
                            <p class="fw-bolder fs-2">Sagar Timilsina</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-9 col-8 ms-2  text-center bg-dark text-light ">
                <div class="d-flex align-items-center justify-content-evenly" style="height: 237px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-right">
                                    <h1 style="color: white;">Instructor Dashbord</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tatal revenue or dashbord progress -->
    <section style="background-color: #f4f4f4;">

        <!-- search and courses -->
        <div class="container mt-4 mb-4 ">
            {{-- <div class="instructor_dashboard_profile">
                <div class="row mt-4 mb-4">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search your courses">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}

        </div>
    </section>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-primary">Your Courses </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table table-striped
                    table-hover
                    table-bordered
                    align-middle">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>SN</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach (Auth::user()->teaches as $teaching)
                                <tr class="text-center">
                                    <td scope="row">{{$loop->iteration}}</td>
                                    <td>{{$teaching->course->title}}</td>
                                    <td><a href="{{route('instructor.course_create',['id'=>$teaching->course->id])}}" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </section>
@endsection

{{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
