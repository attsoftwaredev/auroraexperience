@extends('master.back-login')

@section('content')


        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <img style="width: 100%;    margin-bottom: 40px;" src="{{asset('public/assets/images/'.$setting->dark_logo)}}" alt="navbar brand" class="navbar-brand">
                <h3 class="text-center">{{ __('Forgot Password') }}</h3>
                <div class="login-form">

                    <form action="{{ route('back.forgot.submit') }}" method="POST">

                        @csrf

                        @include('alerts.alerts')

                        <div class="form-group form-floating-label">
                            <input id="username" name="email" type="email" class="form-control input-border-bottom" value="{{ old('email') }}" >
                            <label for="username" class="placeholder">{{ __('Email Address') }}</label>
                        </div>


                        <div class="row justify-content-center form-sub m-0">
                            <a href="{{ route('back.login') }}" class="link float-right">{{ __('Back to Login') }}</a>
                        </div>

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary  btn-login">{{ __('Reset My Password') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


@endsection
