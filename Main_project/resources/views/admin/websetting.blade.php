@extends('layouts.Dashbord_head')

@section('content')

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
            
            <h5 class="pt-2 pb-2">نوع سایت : فروشگاه -  نام قالب : ارغوان</h5>
            <p class="bi_yes">درخواست ادمین برای این سایت ثبت شده است</p>
            <p>نام کسب و کار : فروشگاه محمدی</p>
            
            <p>مبلغ پرداخت شده : 8500000</p>
            <p>مدت زمان اجاره شده : 3 ماهه</p>
        
            <p>آدرس پیشنهاد شده: www.mudomain.com</p>
                <p style="float:right" class="pt-2">رنگ های درخواست شده :</p>
                <input type="color" class="form-control form-control-color m-2" style="float:right" id="exampleColorInput" value="#563d7c" title="Choose your color" name="color_1" disabled>
                <input type="color" class="form-control form-control-color m-2" id="exampleColorInput" style="float:right" value="#0000ff" title="Choose your color" name="color_2" disabled>
                <input type="color" class="form-control form-control-color m-2" id="exampleColorInput" style="float:right" value="#fff" title="Choose your color" name="color_3" disabled>
      
            
        </div>
        <div class="col-md-3 p-4">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="calender" class="form-label">تعیین تاریخ آماده سازی</label>
                    <input style="direction:ltr" type="text" id="calender" name="time_finish" class="form-control" />
                    <div style="direction:ltr" class="form-text" >2024-03-05 10:12:46</div>
                </div>
                <div class="mb-3">
                    <label for="calender" class="form-label">آدرس بارگذاری سایت</label>
                    <input style="direction:ltr" type="text" name="url" class="form-control" />
                <div>
                <div class="mt-3 text-start">
                    <input type="submit" class="btn btn_banafsh " value="ثبت اطلاعات" />
                </div>
            </form>
        </div>
    </div>
</div>



@endsection