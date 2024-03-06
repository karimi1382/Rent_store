@extends('layouts.Dashbord_head')

@section('content')
@if(session()->has('success'))
<div class=" alert alert-success text-center">اطلاعات کاربری شما با موفقیت ویرایش  شد. </div>

@endif
<div class="pagetitle p-3">
    <h1>ادمین سایت</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">مدیریت سایت ها</li>
      </ol>
    </nav>
</div><!-- End Page Title -->


  
<section class="section profile">
    <div class="row">
   

        <div class="col-md-12 mx-auto ">
            <div class="container">
                <div class="">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">وب سایت های در حال آماده سازی</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">وبسایت های آماده شده</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                          <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <div class="row">
                                    @foreach ($orders as $order)
                                    <?php
                                                        $start = $order->payment_updated_at;
                                                        $create_at_difference=\Carbon\Carbon::now("Asia/Tehran");
                                                        ?>
                                        @if($start > $create_at_difference)

                                        <div class="col-md-6">
                                            <div class="card mb-6">
                                                <div class="row g-0">
                                                    <div class=" col-md-12">
                                                       
                                                            <script src="https://cdn.logwork.com/widget/countdown.js"></script>
                                                            <a href="https://logwork.com/countdown-timer" class="countdown-timer" id="myAnchor{{$order->order_id}}" data-timezone="Asia/Tehran" data-textcolor="#ffffff" data-date="{{$order->payment_updated_at}}" data-background="#aaa6e4" data-digitscolor="#ffffff" data-unitscolor="#ffffff">Countdown Timer</a>
                                                            <p class="text-center">زمان باقیماانده تا راه اندازی سایت</p>
                                                     
                                                    </div>
                                                    <div class="col-md-4 p-4">
                                                        <img src="{{ asset('assets/images/blog-post-04.jpg')}}" alt="web" />
                                                    </div>
                                                    <div class="col-md-8 p-4">
                                                        <h3>کد سفارش: {{$order->order_id}}</h3>
                                                        <h5 class="card-title">نوع قالب : {{$order->project_type_name}} / اسم قالب : {{$order->project_title}}</h5>
                                                        <p class="card-text ">نام کسب و کار شما : {{$order->order_name}}</p>
                                                        <p class="card-text ">زمینه کسب و کار شما : {{$order->fild_name}}</p>
                                                        <p class="card-text ">مدت زمان اجاره : {{$order->packege_name}}</p>
                                                        <p style="color:blueviolet">مدت اعتبار : 
                                                            <?php 
                                                            $fdate = $order->order_end_time;
                                                            $tdate = $order->created_at;
                                                            $datetime1 = new DateTime($fdate);
                                                            $datetime2 = new DateTime($tdate);
                                                            $interval = $datetime1->diff($datetime2);
                                                            $days = $interval->format('%a');
                                                            ?>
                                                            {{$days}} روز
                                                        </p>
                                                        <br>
                                                        <a href="{{url('websetting/'.$order->order_id)}}" class="btn btn-primary">مشاهده جزئیات</a>
                                                          
                                                    </div>               
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    </div>
                              </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                             <!-- Profile Edit Form -->
                            <div class="row">
                             @foreach ($orders as $order)
                                                        <?php
                                                        $start = $order->payment_updated_at;
                                                        $create_at_difference=\Carbon\Carbon::now("Asia/Tehran");
                                                        ?>
                                        @if($start < $create_at_difference)

                                                        <div class="col-md-6">
                                                            <div class="card mb-6">
                                                                <div class="row g-0">
                                                                    <div class="col-md-4 p-4">
                                                                        <img src="{{ asset('assets/images/blog-post-04.jpg')}}" alt="web" />
                                                                    </div>
                                                                    <div class="col-md-8 p-4">
                                                                        <h3>کد سفارش: {{$order->order_id}}</h3>

                                                                        <h5 class="card-title">نوع قالب : {{$order->project_type_name}} / اسم قالب : {{$order->project_title}}</h5>
                                                                        <p class="card-text ">نام کسب و کار شما : {{$order->order_name}}</p>
                                                                        <p class="card-text ">زمینه کسب و کار شما : {{$order->fild_name}}</p>
                                                                        <p class="card-text ">مدت زمان اجاره : {{$order->packege_name}}</p>
                                                                        <p style="color:blueviolet">مدت اعتبار : 
                                                                            <?php 
                                                                            $fdate = $order->order_end_time;
                                                                            $tdate = $order->created_at;
                                                                            $datetime1 = new DateTime($fdate);
                                                                            $datetime2 = new DateTime($tdate);
                                                                            $interval = $datetime1->diff($datetime2);
                                                                            $days = $interval->format('%a');
                                                                            ?>
                                                                            {{$days}} روز
                                                                        </p>

                                                                        <br>
                                                                        <a href="{{url('websetting/'.$order->order_id)}}" class="btn btn-primary">مشاهده جزئیات</a>
                                                                        <a href="{{url('/'.$order->url)}}" class="btn btn_banafsh">مشاهده وبسایت</a>                                                       
                                                                    </div>               
                                                                </div>
                                                            </div>
                                                        </div>
                                        @endif
                              @endforeach
                              </div>

                            </div>

                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection