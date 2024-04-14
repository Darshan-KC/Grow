<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grow - Responsive Login and Signup Form </title>

    {{-- <!-- Favicon --> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/logo/icon.ico') }}">

    {{-- <!-- CSS --> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/login_and_discusn.css') }}">
    {{-- <link rel="stylesheet" href="css/login_and_discusn.css"> --}}

    {{-- <!-- Bootstrap css --> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- <!-- Boxicons CSS --> --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/ae6df88903.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid" style="background-color: #4070F4;">
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>
                       

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <a name="" id="" class="btn btn-primary w-100 text-white"
                                href="{{ route('home') }}" role="button">Login</a>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <i class="fa-brands fa-google"></i>
                        <span>Login with Google</span>
                    </a>
                </div>
            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="">
                        <div class="field input-field">
                            <input type="text" placeholder="Name" class="input">
                        </div>
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <a name="" id="" class="btn btn-primary w-100 text-white"
                                href="{{ route('home') }}" role="button">SignIn</a>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <i class="fa-brands fa-google"></i>
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>
        </section>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/login.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
