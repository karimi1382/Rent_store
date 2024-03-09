@extends('layouts.Dashbord_head')

@section('content')
@if(session()->has('success'))
  <div class=" alert alert-success">تیکت شما با موفقیت ثبت شد , لطفا منتظر پاسخ ادمین بااشید</div>
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
   
                
                <div class="container">
                  <div class="row">
                      
                      <div class="noti_box"
                      
                  
                          style="background-color:#f0fff3">
                        <h4> 
                          <i class="bi bi-exclamation-circle text-warning"></i>
                          {{-- <i class="bi bi-check-circle text-success"></i> --}}
                            موضوع تیکت: 
                          {{$alltickets->ticket_types->title}}   
                        </h4>
                      
                        <P>
                            {{$alltickets->text}}
                        </P>
                        @if($alltickets->status==1)
                        <form method="post" action="{{url('close_ticket')}}" >
                            @csrf
                            <input type="hidden" value="{{$alltickets->id}}" name="main_ticket_id" >
                            <input type="hidden" value="0" name="status" >
                            <input type="submit" class="btn btn_banafsh" value="مشکل برطرف شده و میخواهم تیکت را ببندم" >
                        </form>
                        @else
                        <form method="post" action="{{url('close_ticket')}}" >
                            @csrf
                            <input type="hidden" value="{{$alltickets->id}}" name="main_ticket_id" >
                            <input type="hidden" value="1" name="status" >

                            <input type="submit" class="btn btn_banafsh" value="باز کردن مجدد تیکت" >
                        </form>
                        @endif
                        <div class="text-start time_tikect">
                            زمان ارسال : {{verta($alltickets->created_at)->timezone('Asia/Tehran')->format('j F Y - h:i - A')}}
                        </div>
                      </div>
                      
 
                  </div>
                  <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="col-md-12 row_status_tickect">
                            @if(isset($ticketdetail_status->user_id))
                                @if($ticketdetail_status->user_id==1)
                            در انتظار پاسخ کاربر
                                @else
                            در انتظار پاسخ ادمین سایت
                                @endif
                                @else
                                در انتظار پاسخ ادمین سایت
                            @endif
                            
                        </div>
                        @foreach ($ticketdetails as $ticketdetail ) 
                       
                        <p class="ticket_send">پیام از طرف : 
                            @if($ticketdetail->user_id==1)
                            ادمین سایت
                            @else
                            {{auth()->user()->name}}
                        @endif
                        </p>
                        <h5>متن پیام :</h5>
                        <p>
                            {{$ticketdetail->answer}}
                        </p>
                        <div class="text-start time_tikect">
                            زمان ارسال : {{verta($ticketdetail->created_at)->timezone('Asia/Tehran')->format('j F Y - h:i - A')}}
                        </div>
                        <hr>
                        @endforeach
                    </div>

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">فرم پاسخ </h5>
                      <form class="row g-3" method="post" action="{{url('addanswerticket')}}">
                          @csrf
                          
                         
                          <div class="col-12">
                            <div class="">
                              <textarea class="form-control" name="text" placeholder="متن خود را وارد نمایید" id="floatingTextarea" style="height: 100px;"></textarea>
                            </div>
                          </div>
                          
                          <div class="col-md-6">
                            <div class="form-floating">
                              <input type="file" name="file" class="form-control" id="floatingZip" placeholder="پیوست فایل">
                              <input type="hidden" name="main_ticket_id"  value="{{$alltickets->id}}">
                              <label for="floatingZip">پیوست فایل</label>
                            </div>
                          </div>
                          <div class="text-start">
                            <button type="submit" class="btn btn_banafsh">ارسال درخواست</button>
                          </div>
                        </form><!-- End floating Labels Form -->
          
                      <!-- Quill Editor Default -->
                      
        
                    </div>
                  </div>
        
                  </div>
                </div>


                  </div>
                </div>
              

            </div><!-- End Bordered Tabs -->
        </div>
    </div>








 

@endsection