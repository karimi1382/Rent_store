@extends('layouts.Dashbord_head')

@section('content')
@if(session()->has('success'))
<div class=" alert alert-success text-center">اطلاعات کاربری شما با موفقیت ویرایش  شد. </div>

@endif
<div class="pagetitle p-3">
    <h1>ادمین سایت</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">تنظیمات سایت</li>
      </ol>
    </nav>
</div><!-- End Page Title -->


  
<div class="container websetting">
  <div class="row">
        <div class="col-md-3"><img src="{{ asset('assets/images/blog-post-04.jpg')}}" alt="web" /></div>
        <div class="col-md-6 p-4">
            <h3>کد سفارش: {{$order->order_id}}</h3>

            <h5 class="pt-2 pb-2">نوع سایت : {{$order->project_type}} -  نام قالب : {{$order->project_title}}</h5>
            @if($order->admin=='on')
            <p class="bi_yes">درخواست ادمین برای این سایت ثبت شده است</p>
            @else
            <p class="">این سایت خدمات ادمین ندارد</p>
            @endif
            <p>نام کسب و کار : {{$order->order_name}}</p>
            
            <p>مبلغ پرداخت شده : 
                @if($order->admin=='on')
                    <?php $admin_pay=250000; ?>
                @else
                    <?php $admin_pay=0; ?>
                @endif
                    @if($order->packege_type==1)
                        {{$order->price + ($admin_pay * 3)}}
                    @elseif($order->packege_type==2)
                         {{$order->price + ($admin_pay * 6)}}
                    @else
                        {{$order->price + ($admin_pay * 12)}}
                    @endif
               

                
            </p>
            
            <p>مدت زمان اجاره شده : {{$order->packege_name}}</p>
            <p class="card-text ">مدت اعتبار : 
                <?php 
                $fdate = $order->End_time;
                $tdate = $order->created_at;
                $datetime1 = new DateTime($fdate);
                $datetime2 = new DateTime($tdate);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                ?>
                {{$days}} روز    
            </p>
            <p>آدرس پیشنهاد شده: {{$order->url}}</p>
                <p style="float:right" class="pt-2">رنگ های درخواست شده :</p>
                <input type="color" class="form-control form-control-color m-2" style="float:right" id="exampleColorInput" value="{{$order->color_1}}" title="Choose your color" name="color_1" >
                <input type="color" class="form-control form-control-color m-2" id="exampleColorInput" style="float:right" value="{{$order->color_2}}" title="Choose your color" name="color_2" >
                <input type="color" class="form-control form-control-color m-2" id="exampleColorInput" style="float:right" value="{{$order->color_3}}" title="Choose your color" name="color_3" >
               
               
            
        </div>
        @if(auth()->user()->id==1)
        <div class="col-md-3 p-4">
            <form method="post" action="{{url('websetting_update')}}">
                @csrf
                <div class="mb-3">
                    <label for="calender" class="form-label">تعیین تاریخ آماده سازی</label>
                    <input style="direction:ltr" type="text" id="calender" name="time_finish" class="form-control" value="{{$order->payment_updated}}" />
                    <div style="direction:ltr" class="form-text" >2024-03-05 10:12:46</div>
                </div>
                <div class="mb-3">
                    <label for="calender" class="form-label">آدرس بارگذاری سایت</label>
                    <input style="direction:ltr" type="text" name="url" class="form-control" value="{{$order->url}}" />
                <div>
                <div class="mt-3 text-start">
                    <input type="hidden" value="{{$order->order_id}}" name="order_id" >
                    <input type="submit" class="btn btn_banafsh " value="ثبت اطلاعات" />
                </div>
            </form>
        </div>
        @endif
    </div>
</div>



@endsection