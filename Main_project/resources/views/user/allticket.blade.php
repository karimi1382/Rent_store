@extends('layouts.Dashbord_head')

@section('content')
@if(session()->has('success'))
  <div class=" alert alert-success">اطلاعیه شما به حالت دیده شده تغییر یافت</div>
@endif
@if(session()->has('close'))
  <div class=" alert alert-success">وضعیت تیکت مورد نظر تغییر یافت</div>
@endif


<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">مدیریت تیکت ها </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <div class="container">
    <div class="">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">تیکت های باز</button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">تیکت های بسته شده</button>
                </li>

            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
                <div class="container">
                  <div class="row">
                      @forelse ( $alltickets as $allticket)
                      @if($allticket->status==1)
                      
                      <div class="noti_box"
                      
                  
                          style="background-color:#f0fff3">
                        <h4> 
                          <i class="bi bi-exclamation-circle text-warning"></i>
                          {{-- <i class="bi bi-check-circle text-success"></i> --}}
              
                          {{$allticket->ticket_types->title}}   
                        </h4>
                        <p> فایل پیوست : 
                        @if(isset($allticket->file))
                       دارد - جهت مشاهده بر روی 
                       <a href="{{asset('storage/user/'.$allticket->user_id.'/ticket/'.$allticket->id.'/'.$allticket->file)}}" > این لینک </a>
                       کلیک نمایید
                        @else
                        ندارد
                        @endif
                        </p>
                        <a href="{{url('ticketdetail/ ').$allticket->id}}" class="btn btn_banafsh" >مشاهده سابقه تیکت</a>
                        
                        <div class="text-start time_tikect">
                          زمان ارسال : {{verta($allticket->created_at)->timezone('Asia/Tehran')->format('j F Y - h:i - A')}}
                    
                      </div>
                      </div>
                     
              
                      @endif
                      @empty
                        <h3 class="text-center">هیچ تیکتی توسط شما ثبت نشده است</h3>
                       
                      @endforelse
              
              
                      
                  </div>
                </div>


                  </div>
                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                 <!-- Profile Edit Form -->
                <div class="row">
                  @foreach ( $alltickets as $allticket)
                  @if($allticket->status==0)
                  <div class="noti_box"
                      
                  
                  style="background-color:#eee">
                <h4> 
                  <i class="bi bi-exclamation-circle text-warning"></i>
                  {{-- <i class="bi bi-check-circle text-success"></i> --}}
      
                  {{$allticket->ticket_types->title}}   
                </h4>
                <p>وضعیت : منتظر پاسخ کارشناس پشتیبانی</p>
                <a href="{{url('ticketdetail/ ').$allticket->id}}" class="btn btn_banafsh" >مشاهده سابقه تیکت</a>
                <div class="text-start time_tikect">
                  زمان ارسال : {{verta($allticket->created_at)->timezone('Asia/Tehran')->format('j F Y - h:i - A')}}
            
              </div>
      
              </div>
             
      
              @endif
           
                
              
                  @endforeach
            
                  </div>

                </div>

            </div><!-- End Bordered Tabs -->
        </div>
    </div>








 

@endsection