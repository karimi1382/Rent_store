<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DigiMedia - Creative SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/templatemo-digimedia-v1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.css') }}">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>mydomain@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{ URL::asset('assets/images/logo-v1.png') }}" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav rtl">
              <li class="scroll-to-section"><a href="#top" class="active">صفحه نخست</a></li>
              <li class="scroll-to-section"><a href="#about">درباره ما</a></li>
              <li class="scroll-to-section"><a href="#services">خدمات</a></li>
              <li class="scroll-to-section"><a href="#price">پکیج های ما              </a></li>

              <li class="scroll-to-section"><a href="#portfolio">مشترکین </a></li>
              <li class="scroll-to-section"><a href="#blog">بلاگ</a></li>
              <li class="scroll-to-section"><a href="#contact">تماس با ما</a></li> 
              @guest
                @if (Route::has('login'))
                  <li class="scroll-to-section"><div class="border-first-button"><a href="{{ route('login') }}">ثبت نام | ورود</a></div></li> 
                @endif
              @else
              <li class="scroll-to-section"><div class="border-first-button"><a href="              {{ route('logout') }}
                ">خروج از کارتابل</a></div></li> 
                @endguest

            </ul>        
            <a class='menu-trigger'>
                <span>منو سایت</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')
  
  

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 Asiawebgroup Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="" target="_parent" title="free css templates">Mahdi Karimi</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ URL::asset('assets/js/animation.js') }}"></script>
  <script src="{{ URL::asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>
</html>