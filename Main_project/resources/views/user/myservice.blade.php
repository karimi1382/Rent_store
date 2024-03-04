@extends('layouts.Dashbord_head')

@section('content')

<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">سرویس های خریداری شده</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<div class="container">
 
    <div class="row">
       @foreach ($orders as $order)
           
       
        <div class="col-md-6">
            <div class="card mb-6">
                <div class="row g-0">
                 
                         
<div class=" col-md-12">
    <script src="https://cdn.logwork.com/widget/countdown.js"></script>
<a href="https://logwork.com/countdown-timer" class="countdown-timer" id="myAnchor{{$order->order_id}}" data-timezone="Asia/Tehran" data-textcolor="#ffffff" data-date="{{date('H:m Y-m-d', strtotime($order->payment_updated_at)) }}" data-background="#aaa6e4" data-digitscolor="#ffffff" data-unitscolor="#ffffff">Countdown Timer</a>
</div>
    <div class="col-md-4 p-4">
            <img src="{{ asset('assets/images/blog-post-04.jpg')}}" alt="web" />
    </div>
    <div class="col-md-8 p-4">
                                <p class="card-text ">زمان باقیماانده تا راه اندازی سایت</p>

                            <h5 class="card-title">نوع قالب : {{$order->project_type_name}} / اسم قالب : {{$order->project_title}}</h5>
                            <p class="card-text ">نام کسب و کار شما : {{$order->order_name}}</p>
                            <p class="card-text ">زمینه کسب و کار شما : {{$order->fild_name}}</p>

<br>
                            <a href="{{url('#')}}" class="btn btn-primary">مشاهده جزئیات</a>
                        </div>
                    
                </div>
            </div>
        </div>

        @endforeach
     
    </div>
</div>
@endsection