
@extends('layouts.content-home')
@section('content')
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ URL::asset('assets/images/slider-dec.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12 rtl">
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

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            
            <div class="col-lg-6 rtl align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>دقیقا کار ما چیست ؟</h6>
                  <h4>به راحتی <em>وب سایتتو اجاره کن</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p class="justify_text">یکی از دلایل نداشتن وب سایت برای شرکت و فروششگاه های تازه کار این هست که هزینه داشتن وب سایت و یا نیروی ادمین ویب سایت رو ندارند. شما میتونین با این حدمات وب سایتتونو اجاره کنین و از خدمات رایگان ما استفاده کنین تا سرهت رشد کسب کارتونو چند برابر کنین بدون این که کسی متوجه بشه شما وب سایت اجاره کردید. این یه قرار داد بین ما و شماست            <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>طراحی</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>پشتیبانی</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>سئو سایت</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ URL::asset('assets/images/about-dec.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>خدمات ما</h6>
            <h4>وب سایت هایی که می توانین  <em>اجاره کنید</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="{{ url::asset('images/service-icon-01.png')}}" alt=""></span>
                        فروشگاه اینترنتی
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ url::asset('images/service-icon-02.png')}}" alt=""></span>
                        سایت تجاری
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ url::asset('images/service-icon-03.png')}}" alt=""></span>
                        سایت شخصی
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ url::asset('images/service-icon-04.png')}}" alt=""></span>
                        سایت مدارس
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="{{ url::asset('images/service-icon-01."png')}}" alt=""></span>
                        سایت خدماتی
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12 rtl justify_text">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>اجاره وب سایت فروشگاهی</h4>
                                <p>شما میتوانین با دیدن نمونه واقعی وب سایت و درج اطلاعات خودتون در فرم سفارش در کمتر از چند ساعت سایت فروشگاهی متابق با جدید ترین استاندارد های سایت های فروشگاهی نظیر دیجی کالا و امثال اونو داشته باشید. بازدید کننده اصلا متوجه نمیشه که شمات ول سایت اجاره کردید و هر زمان خواستین میتونین مالکیت اونو با جابجا کردن اطلاعات سایتتون به هاست شخصی داشته باشید</p>
                                <div class="ticks-list">
                                  <span><i class="fa fa-check"></i> درگاه بانک</span> 
                                  <span><i class="fa fa-check"></i> سبد خرید</span> 
                                  <span><i class="fa fa-check"></i> حسابداری</span>
                                  <span><i class="fa fa-check"></i> درج محصول</span> 
                                  <span><i class="fa fa-check"></i> کد نویسی استاندارد</span> 
                                  <span><i class="fa fa-check"></i> مقایسه کالا</span>
                                </div>
                                <p>اینها بخشی از قابلیت هاای وب سایت فروشگاهی هست که میتونین با قیمت باور نکردنی ماهیانه ااجاره کنین</p>
                                <a href="{{ route('template') }}" class="btn btn-primary">مشاهده قالب های فروشگاهی </a>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ url::asset('assets/images/services-image.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Healthy Food &amp; Life</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ url::asset('assets/images/services-image-02.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Car Re-search &amp; Transport</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ url::asset('assets/images/services-image-03.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Online Shopping &amp; Tracking ID</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ url::asset('assets/images/services-image-04.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Enjoy &amp; Travel</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{ url::asset('assets/images/services-image.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="price" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>پکیج های ما</h6>
            <h4>متناسب با کسب کارتون میتونین پکیج مورد نظر رو <em>انتخاب کنید</em></h4>
            <div class="line-dec"></div>
          </div>
          <div class="row">
          <div class="col-md-4 col-sm-6  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="pricingTable10">
                <div class="pricingTable-header">
                    <h3 class="heading rtl">۱۲ ماهه</h3>
                    <span class="price-value rtl">
                      <span class="currency">هزار تومن</span> ۷۵۰ 
                      <span class="month">ماهانه /</span>
                    </span>
                </div>
                <div class="pricing-content rtl">
                    <ul>
                      <li>حجم سایت نا محدود</li>
                      <li>اطلاعات اختصاصی</li>
                      <li>آدرس سایت اختصاصی</li>
                      <li>پنل پشتیبانی ۲۴ ساعته</li>
                      <li>راه اندازی ۶ ساعته</li>
                      <li>طراحی ۳ بنر اختصاصی</li>
                      <li>پنل آمار بازدید کننده</li>
                      <li>۲ ویدئو تبلیغاتی  یک دقیقه ای</li>
                      <li>تبلیغ بنری یک هفته ای در سایت اصلی</li>
                    </ul>
                    <a href="#services" class="read">همین الان قالب سایتتو انتخاب کن</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="pricingTable10">
                <div class="pricingTable-header">
                    <h3 class="heading rtl">۶ ماهه ( پیشنهادی )</h3>
                    <span class="price-value rtl">
                        <span class="currency">هزار تومان</span> ۸۵۰ 
                        <span class="month">ماهانه /</span>
                      </span>
                </div>
                <div class="pricing-content rtl">
                    <ul>
                      <li>حجم سایت نا محدود</li>
                      <li>اطلاعات اختصاصی</li>
                      <li>آدرس سایت اختصاصی</li>
                      <li>پنل پشتیبانی ۲۴ ساعته</li>
                      <li>راه اندازی ۶ ساعته</li>
                      <li>طراحی ۳ بنر اختصاصی</li>
                      <li>پنل آمار بازدید کننده</li>
                    </ul>
                    <a href="#services" class="read">همین الان قالب سایتتو انتخاب کن</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <div class="pricingTable10">
                <div class="pricingTable-header">
                    <h3 class="heading rtl">۳ ماهه</h3>
                    <span class="price-value rtl">
                        <span class="currency">هزار تومن</span> ۹۵۰ 
                        <span class="month">ماهانه /</span>
                      </span>
                </div>
                <div class="pricing-content rtl">
                    <ul>
                        <li>حجم سایت نا محدود</li>
                        <li>اطلاعات اختصاصی</li>
                        <li>آدرس سایت اختصاصی</li>
                        <li>پنل پشتیبانی ۲۴ ساعته</li>
                        <li>راه اندازی ۶ ساعته</li>
                    </ul>
                    <a href="#services" class="read">همین الان قالب سایتتو انتخاب کن</a>
                </div>
            </div>
        </div>
        <div class="col-12 text-center pt-5 rtl">
          <h6>در صورتی که به ادمین سایت نیاز دارید در مرحله سفارش آن را مشخص کنین تا برای شما یک ادمین در نظر بگیریم تا کار های روزمره سایت شمارا زیر نظر ما انجام دهد.</h6>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>در خبر نامه ما رایگان عضو شوید</h6>
            {{-- <h4>جهت عضویت ایمیل خودتون را برای ما ارسال نمایید</h4> --}}
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <form id="search" action="#" method="GET">
            <div class="row">
              
              <div class="col-lg-8 col-sm-8">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="آدرس ایمیل" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-4 col-sm-4">
                <fieldset>
                  <button type="submit" class="main-button">عضویت در خبرنامه</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>مشترکین ما</h6>
            <h4> وب ساایت های <em>اجاره شده </em> </h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ url::asset('assets/images/portfolio-01.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <h4>پوشاک ارغوان</h4>
                  <span>فروشگاه اینترنتی</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ url::asset('assets/images/portfolio-01.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <h4>شرکت بیستون</h4>
                  <span>تعمیرات کامپیوتر</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ url::asset('assets/images/portfolio-02.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <h4>فروشگاه آبادیس</h4>
                  <span>سوپر مارکت</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ url::asset('assets/images/portfolio-03.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <h4>محسن آریایی</h4>
                  <span>مهندس عمران</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ url::asset('assets/images/portfolio-04.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <h4>مدرسه عالم</h4>
                  <span>مدرسه غیر انتفاعی</span>
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="blog" class="blog">
    <div class="container rtl">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>آخرین اخبار</h6>
            {{-- <h4> <em>Posts</em></h4> --}}
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="{{ url::asset('assets/images/blog-post-01.jpg')}}" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">راه های بیشتر دیده شدن</span>
              {{-- <span class="date">03 August 2021</span> --}}
              <a href="#"><h4>با کسب امتیاز بیشتر در وب سایت بیشتر دیده شوید</h4></a>
              <p> راه های زیاد یبرای کسب امتیاز بیشتر وجود داره که در ااین مقابه بررسی خواهیم کرد</p>
              <span class="author"><img src="{{ url::asset('assets/images/author-post.jpg')}}" alt=""> نوشته شده : مریم اعتمادی </span>
              <div class="border-first-button"><a href="#">مشاهده مطلب</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ url::asset('assets/images/blog-post-02.jpg')}}" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">کیفیت تصاویر</span>
                    {{-- <span class="date">24 September 2021</span> --}}
                    <a href="#"><h4>ارتبااط کیفیت تصویر در فروش بالا</h4></a>
                    <p>چطور و با چه نرم افزااری تصویر با کیفیت تر و جداب تری برای سایت خودمون بسازیم</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ url::asset('assets/images/blog-post-03.jpg')}}" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">افزایش فروش</span>
                    {{-- <span class="date">24 September 2021</span> --}}
                    <a href="#"><h4>راه های افزایش فروش در وب سایت</h4></a>
                    <p>چطور موتونیم با افزایش بازدید سانش افزایش قروش رو در سایت خودمون بالا ببریم</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="{{ url::asset('assets/images/blog-post-04.jpg')}}" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">نحوه اتصال بانک</span>
                    {{-- <span class="date">24 September 2021</span> --}}
                    <a href="#"><h4>داشتن درگاه در وب سایت چگونه است</h4></a>
                    <p>در این پست راهنمای اتصال درگاه بانکی به فروشگاه اینترنتی بررسی خواهد شد</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>تماس با ما</h6>
            <h4>با ما از طریق اطلاعات زیر <em> در تماس باشید</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ url::asset('assets/images/contact-dec.png')}}" alt="">
                </div>
              </div>
              {{-- <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div> --}}
              <div class="col-lg-12 rtl">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ url::asset('assets/images/phone-icon.png')}}" alt="">
                          <a href="#">010-020-0340</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ url::asset('assets/images/email-icon.png')}}" alt="">
                          <a href="#">our@email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ url::asset('assets/images/location-icon.png')}}" alt="">
                          <a href="#">123 Rio de Janeiro</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="نام و نام خانوادگی" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="ایمیل" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="موضوع" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="متن پیام" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">ارسال</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection