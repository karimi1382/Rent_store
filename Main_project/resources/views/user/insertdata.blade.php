@extends('layouts.content-home')
@section('content')

@if(session()->has('error_file'))
  <div class=" alert alert-success">حجم لوگوی انتخابی باید کمتر از ۵ مگابایت باشد</div>
@endif

<section id="inserdata_type" class="main-banner">
    <div class="container">
   
        <div class="row">
            <div class="section-heading  wow fadeInDown rtl" data-wow-duration="1s" data-wow-delay="0.5s">
                <h6>ورود اطلاعات</h6>
                <h4>  لطفا پلن مورد نظر و اطلاعات لازم برای راه اندازی سایت را <em>وارد کنید</em></h4>
                <div class="line-dec"></div>
              </div>
        </div>
        <div class="row justify-content-center  wow fadeInUp rtl" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="col-6 rtl form_insert">
                <form action="{{url('order')}}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="template_name" class="form-label">قالب انتخابی شما</label>
                            <input type="text" value="نام قالب : {{$template->title}} با کد شناسه  {{$template->id}}" disabled id="template_name" class="form-control"/>
                            <input type="hidden" name="project_id" value="{{$template->id}}">
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        </div>
                        <div class="col-md-6">
                            <label for="plan_name" class="form-label">پلن مورد نظر را انتخاب کنید</label>
                            <select id="plan_name" name="packege_id" class="form-select">
                                @foreach ($packeges as $packege )
                                <option value="{{$packege->id}}">{{$packege->name}} - {{$packege->detile}}</option>                      
                                @endforeach       
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="admin" role="switch" id="flexSwitchCheckDefault" >
                                <label class="form-check-label" for="flexSwitchCheckDefault">به ادمین سایت نیاز دارم - ماهانه ۲۵۰ هزار تومان</label>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="takephoto" role="switch" id="flexSwitchCheckDefault" >
                                <label class="form-check-label" for="flexSwitchCheckDefault">به تصویر برداری محصول نیاز دارم - هزینه جدا حساب خواهد شد</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="template_name" class="form-label">نام کسب و کار شما</label>
                            <input type="text" placeholder="نام مجموعه خود را به فارسی بنویسید"  id="template_name" name="name" class="form-control" required/>
                        </div>
                        <div class="col-md-6">
                            <label for="fild_name" class="form-label">زمینه کاری شما</label>
                            <select id="fild_name" name="fild_id" class="form-select">
                                @foreach ($filds as $fild )
                                <option value="{{$fild->id}}">{{$fild->name}}</option>
                                @endforeach  
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleColorInput" class="form-label">تم رنگی اول سایت</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" name="color_1">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleColorInput" class="form-label">تم رنگی دوم سایت</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#0000ff" title="Choose your color" name="color_2">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleColorInput" class="form-label">تم رنگی سوم سایت</label>
                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#fff" title="Choose your color" name="color_3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="template_name" class="form-label" >آدرس پیشنهادی سایت خود را به انگلیسی وارد نمایید - در صورت پر بودن نام انتخابی بعد از بررسی به شما اعلام خواهد شد</label>
                            <input type="text" placeholder="mihansazan" name="url" id="template_name" class="form-control text-start"/>
                        </div>
                        <div class="col-md-6">
                            <label for="template_logo" class="form-label">در صورتی که لوگویی برای کسب و کار خود دارد آن را بصورت بدون پس زمینه برای سایت مورد نظر انتخاب نمایید</label>
                            <input type="file" placeholder="mihansazan" name="File" id="template_logo" class="form-control text-start"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="ثبت اطلاعات" class="btn btn-primary" />
                            <a href="{{url('template/'.$template->project_type_id)}}" class="btn btn-primary">بازگشت به صفحه انتخاب تمپلت</a>
                        </div>
                    </div>
                </form>
              </div>
        </div>
    </div>
</section>

@endsection