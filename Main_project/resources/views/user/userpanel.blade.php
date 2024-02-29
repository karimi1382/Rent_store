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
                    <h3 class="pb-4">{{auth()->user()->name}} عزیز خوش آمدی</h3>

                    <h6>آژانس اجاره وب سایت</h6>
                    <h2>به راحتی وب سایتت رو اجاره کن</h2>
                    <p> به جای هزینه زیاد ساخت وب سایت به راحتی با چند کلیک و با قیمت باور نکردنی وب سایتتو اجاره کن</p>
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