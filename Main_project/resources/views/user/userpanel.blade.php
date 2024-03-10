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
          @if(auth::user()->id==1)
              <div class="col-md-6">
                   <!-- Website Traffic -->
                  


                   <?php 
           
                  
                                                            $type_1=App\Models\order::join('projects','orders.project_id','projects.id')
                                                            ->join('project_types','projects.project_type_id','project_types.id')
                                                            ->where('project_types.id','1')->where('orders.status',1)->get()->count();

                                                            $type_2=App\Models\order::join('projects','orders.project_id','projects.id')
                                                            ->join('project_types','projects.project_type_id','project_types.id')
                                                            ->where('project_types.id','2')->where('orders.status',1)->get()->count();

                                                            $type_3=App\Models\order::join('projects','orders.project_id','projects.id')
                                                            ->join('project_types','projects.project_type_id','project_types.id')
                                                            ->where('project_types.id','3')->where('orders.status',1)->get()->count();

                                                            $type_4=App\Models\order::join('projects','orders.project_id','projects.id')
                                                            ->join('project_types','projects.project_type_id','project_types.id')
                                                            ->where('project_types.id','4')->where('orders.status',1)->get()->count();

                                                            $type_5=App\Models\order::join('projects','orders.project_id','projects.id')
                                                            ->join('project_types','projects.project_type_id','project_types.id')
                                                            ->where('project_types.id','5')->where('orders.status',1)->get()->count();
                                                        
                                                            
                                                          
                                                            ?>
                                                          
                                                            <div style="display:none">
                                                              <p id="name_1" >فروشگاه</p>
                                                              <div id="num_1">{{$type_1}}</div>

                                                              <p id="name_2" >تجاری</p>
                                                              <div id="num_2">{{$type_2}}</div>

                                                              <p id="name_3" >شخصی</p>
                                                              <div id="num_3">{{$type_3}}</div>

                                                              <p id="name_4" >آکادمی</p>
                                                              <div id="num_4">{{$type_4}}</div>

                                                              <p id="name_5" >خدماتی</p>
                                                              <div id="num_5">{{$type_5}}</div>
                                                              </div>
                                                           

          <div class="card">
      

            <div class="card-body pb-0">
              <h5 class="card-title">نمودار به تفکیک پروژه <span></span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
               
               name_1=document.getElementById("name_1").innerHTML;
               num_1=document.getElementById("num_1").innerHTML;

               name_2=document.getElementById("name_2").innerHTML;
               num_2=document.getElementById("num_2").innerHTML;
                
               name_3=document.getElementById("name_3").innerHTML;
               num_3=document.getElementById("num_3").innerHTML;
   
               name_4=document.getElementById("name_4").innerHTML;
               num_4=document.getElementById("num_4").innerHTML;

               name_5=document.getElementById("name_5").innerHTML;
               num_5=document.getElementById("num_5").innerHTML;
                
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'وبسایت ها',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold',
                          
                          
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      
                      data: [
                       


                                   
                        {
                          value: num_1,
                          name: name_1
                        },
                    

                        {
                          value: num_2,
                          name: name_2
                        },
                        {
                          value: num_3,
                          name: name_3
                        },
                        {
                          value: num_4,
                          name: name_4
                        },
                        {
                          value: num_5,
                          name: name_5
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->
              </div>
          @endif
         
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