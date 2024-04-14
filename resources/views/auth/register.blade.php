@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@section('title', 'Grow - Register')
<section class="container">
    <div class="form">
        <div class="form-content">
            <header>Signup</header>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="field input-field">
                    <input type="text" placeholder="Name" name="name" class="input" value="{{ old('name') }}">
                    <div class="text-danger">
                        @error('name')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" class="input" value="{{ old('email') }}">
                    <div class="text-danger">
                        @error('email')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Create password" name="password" class="password">
                    <div class="text-danger">
                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Confirm password" name="password_confirmation" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                    <div class="text-danger">
                        @error('confirmPassword')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="field button-field">
                    <button type="submit" class="btn btn-primary w-100 text-white">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

            <div class="form-link">
                <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
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
