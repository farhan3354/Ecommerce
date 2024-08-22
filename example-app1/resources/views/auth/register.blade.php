@extends('layouts.base')

@section('content')
<style>
    [type="text"]:focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {

        box-shadow: none !important;
        border-color: transparent !important;
    }
</style>
<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-title">
                    <h2>Register</h2>
                </div>

                <div class="input">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required="" autofocus="" autocomplete="name">
               @error('name') <span class="text-danger mt-3">{{ $message }}</span>
                   
               @enderror
                    </div>

                <div class="input">
                    <label for="emailname">Email Address</label>
                    <input type="email" id="emailname" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required="" autocomplete="username">
                        @error('email') <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror

                </div>

                <div class="input">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
                        autocomplete="new-password">
                        @error('password') <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror

                </div>

                <div class="input">
                    <label for="compass">Confirm Password</label>
                    <input type="password" id="compass" class="block mt-1 w-full" name="password_confirmation"
                        required="" autocomplete="new-password">
                </div>

                <div class="button login">
                    <button type="submit">
                        <span>Sign Up</span>
                        <i class="fa fa-check"></i>
                    </button>
                
                </div>
                <p><a href="{{route ('login') }}" class="theme-color">Already have an account?</a></p>

            </form>
        </div>
    </div>
</div>

@endsection









{{-- @extends('layouts.base')

@section('content')
<!-- Sign Up Section Start -->
<div class="login-section">
    <div class="materialContainer">
        <div class="box">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="login-title">
                            <h2>Register</h2>
                        </div>
                        <div class="input">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="button login">
                            <button type="submit">
                                <span>Sign Up</span>
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                        <p>Not a member? <a href="{{ ('login') }}" class="theme-color">Already have account to Sign in</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
