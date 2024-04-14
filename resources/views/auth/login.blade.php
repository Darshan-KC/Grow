@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@section('title', 'Grow - Login')
<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>Login</header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="input"
                        autofocus>
                    <div class="text-danger">
                        @error('email')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Password" name="password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                    <div class="text-danger">
                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                @if (Route::has('password.request'))
                    <div class="form-link">
                        <a href="{{ route('password.request') }}" class="forgot-pass">Forgot password?</a>
                    </div>
                @endif

                <div class="field button-field">
                    {{-- <a name="" id="" class="btn btn-primary w-100 text-white"
                        href="{{ route('home') }}" role="button">Login</a> --}}
                    <button type="submit" class="btn btn-primary w-100 text-white">Login</button>
                </div>
            </form>

            <div class="form-link">
                <span>Don't have an account? <a href="{{ route('register') }}"
                        class="">Signup</a></span>
            </div>
        </div>

        {{-- <div class="line"></div>

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
        </div> --}}
    </div>
</section>
@endsection
