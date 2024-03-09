@extends('layouts.Dashbord_head')

@section('content')

@if(session()->has('success'))
<div class=" alert alert-success text-center">اطلاعات کاربری شما با موفقیت ویرایش  شد. </div>

@endif


<div class="pagetitle p-4">
    <h1>ادمین سایت</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"> تراکنش ها </li>
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
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">تراکنش های در انتظار</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">تراکنش های تایید شده </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" >تا این لحظه {{$count_web}} پروژه واریزی داشته اند که جمع مبلغ آنها {{$count}} تومان میباشد
                                        
                            </button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="table-responsive-md">
                                    <table class="table text-center table_cart table-striped table-hover">
                                        <thead class="table-dark" >
                                            <tr>
                                                <th>ردیف</th>
                                                <th>نوع سایت</th>
                                                <th style="width: 90px !important">نام قالب</th>
                                                <th style="width: 90px !important">کد سفارش</th>

                                                <th style="width: 200px !important">پکیج انتخابی</th>
                                                <th>ادمین</th>
                                                <th style="width: 20px !important">مبلغ</th>
                                                <th style="width: 130px !important">روش پرداخت</th>
                                                <th style="width: 250px !important">شماره پیگیری</th>
                                                <th style="width: 120px !important">تایید</th>
                                                <th style="width: 120px !important">عدم تایید</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; ?>
                                            @foreach ($orders as $order)
                                                
                                            
                                            <tr>
                                                <td>{{$n++}}</td>
                                                <td>{{$order->project_type}}</td>
                                                <td>{{$order->project_title}}</td>
                                                <td>{{$order->id}}</td>

                                                <td>{{$order->packege_name}} - {{$order->packege_detile}}</td>
                                                <td> <input type="checkbox"
                                                    @if($order->order_admin=='on')
                                                     checked 
                                                     @endif
                                                     disabled ></td>
                                                <td>
                                                    @if(isset($order->order_admin))
                                                    @if($order->packege_id==1)
                                                        <?php $order->packege_price += 250000*3 ?>
                                                    @elseif($order->packege_id==2)
                                                        <?php $order->packege_price += 250000*6 ?>
                                                    @elseif($order->packege_id==3)
                                                    <?php $order->packege_price += 250000*12 ?>
                                                    @endif
                                                    @endif
                                                    {{$order->packege_price}}
                                                </td>
                                                <td>@if($order->payment_type==1)
                                                     کارت به کارت 
                                                    @else
                                                    واریز کریپتو
                                                    @endif
                                                </td>
                                                <td>{{$order->payment_detile}}</td>
                                                <form method="POST" action="{{url('accept_peyment')}}" >
                                                    @csrf
                                                <td>
                                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                                    <input type="hidden" name="status" value="1" >
                                                    <button class="btn" type="submit"><i class="bi bi-check-square bi_yes"></i></button>
                                                </td>
                                                </form>
                                                <form method="POST" action="{{url('accept_peyment')}}" >
                                                    @csrf
                                                    <td>
                                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                                        <input type="hidden" name="status" value="0" >
                                                        <button class="btn" type="submit"><i class="bi bi-x-square bi_no"></i></button>
                                                    </td>
                                                    </form>

                                         

                                            </tr>
                                            @endforeach
                                            


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                             <!-- Profile Edit Form -->
<div class="row">
                                @foreach ($orders_accept as $order_accept)
                                                               
                                    <div class="col-md-6">
                                        <div class="card mb-6">
                                            <div class="row g-0">
                                                
                                                <div class="col-md-4 p-4">
                                                    <img src="{{ asset('assets/images/blog-post-04.jpg')}}" alt="web" />
                                                </div>
                                                <div class="col-md-8 p-4">
                                                    <h3>کد سفارش: {{$order_accept->id}}</h3>
                                                    <h5 class="card-title">نوع قالب : {{$order_accept->project_type}} - نام قالب : {{$order_accept->project_title}}</h5>
                                                    <p class="card-text ">نام کسب و کار : {{$order_accept->order_name}}</p>
                                                    <p class="card-text ">مدت اعتبار : 
                                                  
                                                    <?php 
                                                                            $fdate = $order_accept->order_End_time;
                                                                            $tdate = date('d-m-Y h:m:s');
                                                                            $datetime1 = new DateTime($fdate);
                                                                            $datetime2 = new DateTime($tdate);
                                                                            
                                                                            $interval = $datetime2->diff($datetime1);
                                                                            $days = $interval->format('%a');
                                                                            ?>
                                                                            {{$days}} روز  
                                                    </p>
                                                    <br>
                                                    <a href="{{url('websetting/'.$order_accept->id)}}" class="btn btn_banafsh">مدیریت تنظیمات</a>
                                                    
                                                </div>               
                                            </div>
                                        </div>
                                    </div>

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
