@extends('layouts.Dashbord_head')

@section('content')
@if(session()->has('success'))
  <div class=" alert alert-success">اطلاعیه شما به حالت دیده شده تغییر یافت</div>
@endif



<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">اطلاعیه ها </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="container">
    <div class="row">



        
      
            @forelse ( $notis as $noti)
            <div class="noti_box"
            @if($noti->seen==0)
            style="background-color:#fff0ff"
                @else
                style="background-color:#f0fff3"
                @endif
            >
              <h4> 
                @if($noti->seen==0)
                <i class="bi bi-exclamation-circle text-warning"></i>
                @else
                <i class="bi bi-check-circle text-success"></i>

                @endif
                {{$noti->noti_types->subject}}   
              </h4>
              <p>{{$noti->noti_types->text}}</p>
              @if($noti->seen==0)
              <a href="{{url('notification/'.$noti->id)}}" class="btn btn_banafsh" >متوجه شدم</a>
              
                @endif

              <a href="{{$noti->noti_types->url}}" class="btn btn-primary">صفحه پیگیری</a>
            </div>
            @empty
            <div class="col-md-12">
                <h4 class="text-center">هیچ اطلاعیه ای برای شما ثبت نشده است</h4>
            </div>
            @endforelse
    </div>
  </div>

@endsection