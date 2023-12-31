@extends('layouts.app')
@guest
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more"
                style="background-image: url('{{ asset('images/login.jpeg') }}');width: 748px; height: 950px;flex-shrink: 0;">
            </div>
            <div class="wrap-login1000 p-l-50 p-r-50 p-t-72 p-b-50">
                @if (Session::has('alert'))
                    <div class="alert alert-danger">
                        {{ Session::get('alert') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-5">
                        Sign In
                        <p class="mt-4" style="color: #fff;font-size:20px">Belum punya akun?</p>
                        <p style="color: #fff;font-size:20px">Silahkan <a href="/register"
                                style="color: #C10C99;font-size:20px;">Register Disini!</a></p>
                    </span>

                    <br><br>

                    <div class="wrap-input100 mb-2">
                        <label for="email" class="label-input100">{{ __('Email Address') }}</label>
                        <input class="input100" id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Masukkan email anda">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                        <p style="color:rgb(193,12,153)">{{ $message }}</p>
                    @enderror
                    <div class="wrap-input100">
                        <label for="password" class="label-input100">{{ __('Password') }}</label>
                        <input class="input100" type="password" name="password" id="password"
                            placeholder="Masukkan password anda">
                        <span class="focus-input100"></span>
                        <i class="fa fa-eye-slash" id="togglePassword" style="cursor: pointer"></i>
                    </div>
                    @error('password')
                        <p style="color:rgb(193,12,153)">{{ $message }}</p>
                    @enderror
                    <a href="{{ route('password.request') }}">Lupa password?</a>
                    <div class="container-login100-form-btn mt-4">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endguest
