@extends('master.back-login')

@section('content')

        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <img style="width: 100%;    margin-bottom: 40px;" src="{{asset('public/assets/images/'.$setting->dark_logo)}}" alt="navbar brand" class="navbar-brand">
                <div class="login-form">

                    <form action="{{ route('back.login.submit') }}" method="POST">

                        @csrf

                        @include('alerts.alerts')

                        <div class="form-group form-floating-label">
                            <input id="username" name="login_email" type="email" class="form-control input-border-bottom" value="{{ old('login_email') }}">
                            <label for="username" class="placeholder">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="login_password" type="password" class="form-control input-border-bottom">
                            <label for="password" class="placeholder">{{ __('Password') }}</label>
                            
                        </div>

                        <div class="row justify-content-center form-sub m-0">
                            <a href="{{ route('back.forgot') }}" class="link float-right">{{ __('Forget Password ?') }}</a>
                        </div>

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary  btn-login">{{ __('Sign In') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

@endsection
