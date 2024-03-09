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
        <div class="col-lg-12 rtl">
          <div class="row">
           
            
            <!-- Sales Card -->
            <div class="col-md-3">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-cart"></i> اطلاعیه <span>| مشاهده نشده</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      {{-- <i class="bi bi-cart"></i> --}}
                    </div>
                    <div class="ps-3">
                      <p>
                        <?php 
                          $noti_count=App\Models\noti_send::where('noti_sends.user_id',auth()->user()->id)->where('noti_sends.seen','0')->get()->count();
                        ?>
                    تعداد <span class="notification_dashbord">{{$noti_count}}</span> اطلاعیه مشاهده نشده در کارتابل شما قرار دارد
                      </p>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-md-3">
              <div class="card info-card revenue-card">

          

                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-cart"></i> کارتابل <span>| تیکت باز</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      {{-- <i class="bi bi-cart"></i> --}}
                    </div>
                    <div class="ps-3">
                      <p>
                        @if(auth::user()->id == 1)              
                        <?php $ticket_count=App\Models\main_ticket::with('answer_tickets')->where('main_tickets.status',1)->get()->count();?>
                        @else
                        <?php $ticket_count=App\Models\main_ticket::with('answer_tickets')->where('main_tickets.status',1)->where('main_tickets.user_id',auth::user()->id)->get()->count();?>
                       @endif
                    تعداد <span class="notification_dashbord">{{$ticket_count}}</span> تیکت باز در کارتابل شما قرار دارد
                      </p>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
                      <!-- Revenue Card -->
                      <div class="col-md-3">
                        <div class="card info-card revenue-card">
          
                    
          
                          <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-cart"></i>  سبد خرید <span>| در انتظار پرداخت</span></h5>
          
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                {{-- <i class="bi bi-cart"></i> --}}
                              </div>
                              <div class="ps-3">
                                <p>
                                  @if(auth::user()->id == 1) 
                                  <?php $ticket_count=App\Models\order::where('orders.End_time','+1')->get()->count();?>
                                  تعداد <span class="notification_dashbord">{{$ticket_count}}</span> درخواست در انتظار بررسی در قسمت تراکنشها وجود دارد

                                @else
                                <?php $ticket_count=App\Models\order::where('orders.user_id',auth::user()->id)->where('orders.status','!=',1)->get()->count();?>
                                تعداد <span class="notification_dashbord">{{$ticket_count}}</span> درخواست در انتظار پرداخت در سبد خرید شما وجود دارد

                                @endif
                                </p>
          
                              </div>
                            </div>
                          </div>
          
                        </div>
                      </div><!-- End Revenue Card -->
                                <!-- Revenue Card -->
            <div class="col-md-3">
              <div class="card info-card revenue-card">

          

                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-cart"></i> وب سایت <span>| اجاره شده</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      {{-- <i class="bi bi-cart"></i> --}}
                    </div>
                    <div class="ps-3">
                      <p>
                        @if(auth::user()->id == 1) 
                        <?php $ticket_count_ok=App\Models\order::where('orders.status',1)->get()->count();?>
                        تعداد <span class="notification_dashbord">{{$ticket_count_ok}}</span> وب سایت فعال در این نرم افزار وجود دارد
                       
                        @else
                        <?php $ticket_count_ok=App\Models\order::where('orders.user_id',auth::user()->id)->where('orders.status',1)->get()->count();?>
                        تعداد <span class="notification_dashbord">{{$ticket_count_ok}}</span> وب سایت فعال در کارتابل شما قرار دارد
                        @endif

                      </p>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

         
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ URL::asset('assets/images/slider-dec.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12 rtl">
                    @guest
                    @else
                    <h3 class="pb-4">{{auth()->user()->name}} عزیز خوش آمدی</h3>
                    @endguest
                    <h6>آژانس اجاره وب سایت</h6>
                    <h2>به راحتی وب سایتت رو اجاره کن</h2>
                    <p> به جای هزینه زیاد ساخت وب سایت به راحتی با چند کلیک و با قیمت باور نکردنی وب سایتتو اجاره کن</p>
                  </div>
                  <div class="col-lg-12 rtl">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">فروشگاه ساز</a>
                    </div>
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