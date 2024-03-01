@extends('layouts.Dashbord_head')

@section('content')




<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">صفحه اصلی</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="main-banner wow fadeIn pt-5" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ URL::asset('assets/images/slider-dec.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12 rtl">
                    <h3 class="pb-4">{{auth()->user()->name}} عزیز  </h3>

                    <h6>به آژانس اجاره وب سایت خوش آمدی</h6>
                    <h3>اگر سوالی بود میتونی تیکت بذاری</h3>
                    <h5 class="pt-4">دوستانت در کوتاه ترین زمان بهت پاسخ میدهند</h5>

                    {{-- <p class="p-0"> از منوی سمت راست صفحه مورد نظرت رو انتخاب کن</p> --}}
                  </div>
                  <div class="col-lg-12 rtl">
                    <div class="border-first-button scroll-to-section pt-4 ">
                            <a href="#contact">مدیریت تیکت ها </a>
                        <span class="btn_banafsh">                            <a href="{{ url('/#services') }}" >اجاره وبسایت </a>
                        </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection