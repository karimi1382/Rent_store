@extends('layouts.login_header')

@section('content')



<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ URL::asset('login_css/images/img-01.png') }}" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="{{ route('login') }}">
                <span class="login100-form-title">
                    ورود به پرتال
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="ایمیل">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="کلمه عبور">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                
                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" value="ورود به پرتال">
                       
                </div>

                {{-- <div class="text-center p-t-12">
                    <span class="txt1">
                        فراموشی
                    </span>
                    <a class="txt2" href="{{ route('password.request') }}">
                       کلمه عبور
                    </a>
                </div> --}}

                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('register') }}">
                        ساحت حساب کاربری
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>







@endsection
