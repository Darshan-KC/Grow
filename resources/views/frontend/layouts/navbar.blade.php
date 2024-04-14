<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><a href="tel:+9779819113548" class="text-white"><i
                                class="fa fa-phone-alt mr-2"></i>{{ $siteContact->number }}</a></small>
                    <small class="px-3">|</small>
                    <small><a href="mailto:{{ $siteContact->email }}" class="text-white"><i
                                class="fa fa-envelope mr-2"></i>{{ $siteContact->email }}</a></small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                     <a class="text-white px-2" href="{{ $siteConfig->twitter }}" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <a class="text-white px-2" href="{{ $siteConfig->twitter }}" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-2" href="{{ $siteConfig->linkedin }}" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-2" href="{{ $siteConfig->instagram }}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-2" href="{{ $siteConfig->youtube }}" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="{{ route('frontend.home') }}" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><img
                        src="{{ asset('uploads/logo/icon.ico') }}" class="d-inline" height="30"
                        width="40" alt="icon">{{ $home->logo_name }}</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('frontend.home') }}"
                        class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }} ">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    @guest
                    @else
                        @if (Auth::user()->role == 'a')
                            <a href="{{ route('admin.home') }}"
                                class="nav-item nav-link {{ request()->is('team') ? 'active' : '' }}">Admin</a>
                        @elseif (Auth::user()->role == 'i')
                            <a href="{{ route('instructor.dashboard') }}"
                                class="nav-item nav-link {{ request()->is('team') ? 'active' : '' }}">Instructor_dash</a>
                        @else
                            <a href="{{ route('user') }}"
                                class="nav-item nav-link {{ request()->is('team') ? 'active' : '' }}">Dashboard</a>
                        @endif
                    @endguest
                    <a href="{{ route('courses') }}"
                        class="nav-item nav-link {{ request()->is('courses') ? 'active' : '' }}">Courses</a>
                    <a href="{{ route('team') }}"
                        class="nav-item nav-link {{ request()->is('team') ? 'active' : '' }}">Instructors</a>
                    <a href="{{ route('frontend-contact') }}"
                        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>


                </div>
                <div >
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-primary  rounded-pill p-3 nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            {{-- @endif  --}}
                        @else
                            <li class="nav-item dropdown">


                                <div class="btn-group ">
                                    {{-- <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                                        <img src="{{asset('uploads/profile/default.png')}}" class="dropdown-toggle mx-4  " style="width: 50px; height:50px; border-radius:50%; object-fit:contain;cursor: pointer;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" alt="">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                                      <li><a class="dropdown-item" href="{{route('user')}}">View profile</a></li>

                                      <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form></li>
                                    </ul>
                                  </div>

                                  {{--   --}}
                            </li>
                        @endguest
                    </ul>
                    {{-- <a href="{{ route('login') }}"
                        class="btn btn-primary d-lg-block rounded-pill nav-item nav-link">Login</a> --}}
                </div>

            </div>
    </div>
    </nav>

    <!-- Navbar End -->
