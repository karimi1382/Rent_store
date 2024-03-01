<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Dashbord/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Dashbord/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Dashbord/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Dashbord/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Dashbord/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Dashbord/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('Dashbord/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('Dashbord/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('Dashbord/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Dashbord/assets/css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ URL::asset('assets/css/templatemo-digimedia-v1.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/animated.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.css') }}">
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">


    <nav class="header-nav ms-auto location_top">
        <ul class="d-flex align-items-center">
  
            <div class=" ">
                <a href="index.html" class="logo ">
                    <img src="{{ URL::asset('assets/images/logo-v1.png') }}" alt="">
                </a>
              </div><!-- End Logo -->
          {{-- <li class="nav-item dropdown">
  
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon -->
  
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li class="message-item">
                <a href="#">
                  <img src="{{ asset('Dashbord/assets/img/messages-1.jpg') }}" alt="" class="rounded-circle">
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li class="message-item">
                <a href="#">
                  <img src="{{ asset('Dashbord/assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li class="message-item">
                <a href="#">
                  <{{ asset('Dashbord') }}assets/img/messages-3.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>David Muldon</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
  
              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>
  
            </ul><!-- End Messages Dropdown Items -->
  
          </li><!-- End Messages Nav -->
   --}}
      


  
        </ul>
      </nav><!-- End Icons Navigation -->

      
    
    
      <i class="bi bi-list toggle-sidebar-btn"></i>


   

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar rtl">

    <div class="col-md-12 user_info">
        <div class="row">
            <img src="{{asset('Dashbord/assets/img/profile-img.jpg')}}" />
        </div>
        <div class="row">
            <h4 class="text-center">
            {{auth()->user()->name}}
            </h4>
            <h6 class="text-center">
                {{auth()->user()->email}}

            </h6>
        </div>
        <hr>
    </div>
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('userpanel')}}">
          <i class="bi bi-grid"></i>
          <span>پنل کاربری</span>
        </a>
      </li><!-- End Dashboard Nav -->

    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-vcard"></i><span>تنظیمات کارتابل</span><i class="bi bi-chevron-down ms-auto location_top"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>ویرایش مشخصات</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>تغییر رمز عبور</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cash-coin"></i><span>اطلاعات مالی</span><i class="bi bi-chevron-down ms-auto location_top"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>سابقه تراکنش</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>کیف پول</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav_2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-question-square"></i><span>ارتباط با پشتیبانی</span><i class="bi bi-chevron-down ms-auto location_top"></i>
        </a>
        <ul id="charts-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ارسال تیکت جدید </span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>مدیریت تیکت ها</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

    

      {{-- <li class="nav-heading">Pages</li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('cartshow')}}">
          <i class="bi bi-cart4"></i>
          <span>سبد خرید</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link collapsed" href="{{ url('/#services') }}">
          <i class="bi bi-emoji-sunglasses"></i>
          <span>اجاره وب سایت</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>اطلاعیه ها</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-left"></i>
          <span>خروج از سایت</span>
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>

      </li><!-- End Register Page Nav -->

     

      
     
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main rtl p-0">
    
    @yield('content')


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Dashbord/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('Dashbord/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Dashbord/assets/js/main.js') }}"></script>


    <!-- Scripts -->
    <script src="{{ URL::asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ URL::asset('assets/js/animation.js') }}"></script>
</body>

</html>