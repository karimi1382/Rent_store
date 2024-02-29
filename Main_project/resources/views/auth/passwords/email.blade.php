

@extends('layouts.login_header')

@section('content')



<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ URL::asset('login_css/images/img-01.png') }}" alt="IMG">
            </div>

            <form method="POST" class="login100-form validate-form" action="{{ route('password.email') }}">
                @csrf
                <span class="login100-form-title">
                    فراموشی رمز عبور
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ایمیل خود را وارد نمایید">

                    @error('email')
                    <p class="error_text">ایمیل وارد شده اشتباه است</p>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" value="ارسال لینک تغییر پسورد">
                       
                </div>
                



                       
              

             

                <div class="text-center p-t-136">
                    <a class="txt2" href="{{ route('login') }}">
                       ورود به پرتال
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>


            </form>

            
        </div>
    </div>
</div>






