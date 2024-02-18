<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('mymain.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>
    <section id="header" class="fixed-top">
        <div class="container-fluid header ">
            <div class="container">
                <div class="row">
                <div class="col text-start mt-4 smile">
                    <p> <span><img src="{{ URL::asset('images/icon_1.png') }}" alt="smile"/></span>بازدید از وب سایت با ویو ابدی</p>
                </div>
                <div class="col text-end mt-4 logo"><img src="{{ URL::asset('images/logo.png') }}" alt="logo" /></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
            <div class="col menu">
                <div class="row">
                    <div class="col text-start pt-2 px-4  nav_left">
                        <li>ورود</li>
                        <li>|</li>
                        <li>عضویت رایگان</li>
                    </div>
                    <div class="col-7 text-end pt-2 px-4 nav_right">
                        <li>صفحه نخست</li>
                        <li>درباره ما</li>
                        <li>خدمات</li>
                        <li>فروشگاه ساز</li>
                        <li>قیمت</li>
                        <li>بلاگ</li>
                        <li>تماس با ما</li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="top_header">
        <div class="container">
            <div class="row">
                <div class="col"><img class="mx-auto d-block" src="{{ URL::asset('images/pic_1.png') }}" alt="header_top"/></div>
                <div class="col-7 text-end">
                    <h3>فروشگاه خودتو با قیمت باورنکردنی به نام خودت اجاره کن</h3>
                    <p>و به تمام دنیا به صورت آنلاین کسب و کارتو معرفی کن</p>
                    <a href="" class="btn btn-danger">شروع فرایند</a>
                </div>
            </div>
        </div>
    </section>
    <section id="abour_us">
        <div class="container">
            <div class="row">
                <div class="col about_us">
                    <h3 class="text-center">مای استوری چه کار میکند ؟</h3>
                    <p class="p_1">
                    يكى از دلايل نداشتن وب سايت براى شركت ها وفروشكاه هاى اينترنتى اين است كه نميخواهند تا زمانى كه كسب كارشان نگرفته برای
آن هزينه هاى بالايى انجام بدن ... يا ممكنه نيرويى نداشته باشن كه سايتشونو به روز بكنه و يا سفارشاتشونو پاسخ بده !ماى استور اين
مشكل را با اجاره فروشكاه اينترنتى حل كرده ! شما ميتونين با هزينه اى نا چيز فروشكاه و يا وب سايت خودتونو براى هرچند ماه كه
لازم دارين اجاره كنين. اكر كسب كارتون كرفت وخوب بود ميتونين در آينده مالكيتو داشته باشيد و روى هاست خودتون انتقالش بديد!
البته نا گفته نمونه که شما میتونین سایتی که اجاره کردید رو روی دامنه خودتون بیارین بالا !

                    </p>
                    <p class="p_2">
                        
روى فروشكاه ساز بزن، نوع كسب وكارتو انتخاب كن وقالب هارو ببين ... خبر خوب اينه شما ميتونين دمو زنده از فروشگاهی كه قرار
داشته باشیدو قبل اجارە ببینین ! دیگە چی بهتر از این ؟
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col text-end">
                    <h3><span><img src="{{ URL::asset('images/icon_2.png') }}" alt="icon_logo"/></span>چرا مای استور ؟</h3>
                </div>
            </div>
            <div class="row back_why_us">
                <div class="col img_left">
                    <img src="{{ URL::asset('images/pic_why_1.png') }}" alt="pic_why_us_1"/>
                </div>
                <div class="col-7">
                    <h4>قبل از اجازه دمو لایو از سایتت رو ببین</h4>
                    <p>
                    اين خيلى مهم هست كه شما قبل از داشتن فروشكاهت وپرداخت
هزينه اى خروجى كارتو بتونى ببينى ... ماى استوراين قابليت رو بهت
میده اول فروشگاه چینده شده رو ببینین بعد اونو اجاره کنی!
                    </p>
                </div>
            </div>
            <div class="row back_why_us row_next">
                
                <div class="col-7">
                    <h4>قبل از اجازه دمو لایو از سایتت رو ببین</h4>
                    <p>
                    اين خيلى مهم هست كه شما قبل از داشتن فروشكاهت وپرداخت
هزينه اى خروجى كارتو بتونى ببينى ... ماى استوراين قابليت رو بهت
میده اول فروشگاه چینده شده رو ببینین بعد اونو اجاره کنی!
                    </p>
                </div>
                <div class="col right_img">
                    <img src="{{ URL::asset('images/pic_why_2.png') }}" alt="pic_why_us_2"/>
                </div>
            </div>
            <div class="row back_why_us row_next">
                <div class="col img_left">
                    <img src="{{ URL::asset('images/pic_why_3.png') }}" alt="pic_why_us_3"/>
                </div>
                <div class="col-7">
                    <h4>قبل از اجازه دمو لایو از سایتت رو ببین</h4>
                    <p>
                    اين خيلى مهم هست كه شما قبل از داشتن فروشكاهت وپرداخت
هزينه اى خروجى كارتو بتونى ببينى ... ماى استوراين قابليت رو بهت
میده اول فروشگاه چینده شده رو ببینین بعد اونو اجاره کنی!
                    </p>
                </div>
            </div>
            <div class="row back_why_us row_next">
                
                <div class="col-7">
                    <h4>قبل از اجازه دمو لایو از سایتت رو ببین</h4>
                    <p>
                    اين خيلى مهم هست كه شما قبل از داشتن فروشكاهت وپرداخت
هزينه اى خروجى كارتو بتونى ببينى ... ماى استوراين قابليت رو بهت
میده اول فروشگاه چینده شده رو ببینین بعد اونو اجاره کنی!
                    </p>
                </div>
                <div class="col right_img">
                    <img src="{{ URL::asset('images/pic_why_4.png') }}" alt="pic_why_us_4"/>
                </div>
            </div>
        </div>

    </section>
    <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col text-end">
                        <h3><span><img src="{{ URL::asset('images/icon_2.png') }}" alt="icon_logo"/></span>چه امکاناتی رو توی سایتتون میتونین داشته باشید ؟</h3>
                    </div>
                </div>
                <div class="box_all">
                    <div class="row">
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>روش های متنوع ارسال</h5>
                                    <p>امکان انتخاب روش های متنوع ارسال کارا همراه با درج قیمت برای هر روش به طوری که به صورت خودکار در قیمت محصول اضافه شود</p>
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_1.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>امکان اتصال درگاه</h5>
                                    <p>
                                        امکان تعریف و اتصال به درگاه های متفاوت بانک ها در فروشگاه های اینترنتی کسب و کار شما دیده شده است
                                    </p>
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_2.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>آدرس سایت اختصاصی</h5>
                                    <p>
                                        شما میتوانید آدرس سایت اختصاصی خودتون رو داشته باشید. هم میتونین آدرس رو انتخاب کنین هم میتونین دامنه جدا برای سایت اجاره ای شما اختصاص داده بشه که بازدید کننده متوجه اجاره ای بودن فروشگاه شما نشه !
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_3.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>پشتیبانی ۲۴ ساعته</h5>
                                    <p>
                                        با توجه به داشتن سیستم تیکتینگ در کارتابل شخصی خودتون در این سایت میتونین هر سوالی داشتین از کارشناسان ما به صورت آنلاین بپرسید و منتظر پتسخ باشید
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_4.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>پنل مدیریت سایت</h5>
                                    <p>
                                        فرقی نمیکنه سایت تجاری اجاره کنین یا فروشگاه اینترنتی... همه کارای سایت رو توسط پنل مدیریتی انجام میدید که آموزششو براتون گذاشتیم و اصلا نیاز نیست دانش قبلی داشته باشید
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_5.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>حسابداری فروش</h5>
                                    <p>
                                        اگر فروشگاه اینترنتی اجاره کردید نگران حساب کتاباتون نباشید. یه حسابداری کوچیک داریم که تمام درامد و واریزی هایی که انجام شده رو تو قالب گزارش براتون تو هر بازه زمانی بخوایین آماده میکنه بهتون میده
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_6.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>طراحی اختصاصی سایت</h5>
                                    <p>
                                        درسته یکسری قالب گذاشتیم انتخاب کنین ولی اگه پلتون بخواد میتونیم براتون همون قالب هارو شخصی سازی کنیم یا براتون یه قالبی که دوست دارید و جایی دیدید بهمون بدید براتون بسازیمش... یکسری خدمات شخصی سازی رایگانه حتما ازش استفاده کنین
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_7.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>سئو سایت</h5>
                                    <p>
                                        سایت هایی که از ما اجاره میکنین تمامش کد نویسی استاندارد داره ولی ما با راهنمایی هایی کهع گذاشتیم میتونین خودتونو توی موتور جستجو های سایت بالا ببرید و یکسری خدمات رایگان داشته باشید که فروشتونو ببرید بالا
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_8.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                        <div class="col service_box">
                            <div class="row">
                                <div class="col">
                                    <h5>خدمات جذب بازدید بالا</h5>
                                    <p>
                                        ما برای سایت اصلی کلی زحمت میکشیم که دیده بشه و وقتی اسم سایت شما تو لیست فروشگاه های برتر ما باشه قطعا برای دیدن کار ما به فروشگاهتون سر میزنن و همین باعث میشه بازدید سایتتون بره بالا و بیشتر دیده بشید دیگه چی بهتر از این !
                                    </p>                                
                                </div>
                                <div class="col-3"><img src="{{ URL::asset('images/icon_service_9.png') }}" alt="icon_service"/></div>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div>
    </section>
    <section id="store">
        <div class="container-fluid store_back">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-danger">همه فروشگاه ها</a>
                    </div>
                    <div class="col text-end">
                        <h3><span><img src="{{ URL::asset('images/icon_2.png') }}" alt="icon_logo"/></span>جدید ترین فروشگاه های اجاره داده شده</h3>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-4 rtl">
                        <div class="box m-2">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('images/store_1.jpg') }}" alt="store_pic"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>نام فروشگاه</h5>
                                    <p>زمینه کاری فروشگاه</p>
                                    <a href="#" class="btn btn-danger">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 rtl">
                        <div class="box m-2">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('images/store_1.jpg') }}" alt="store_pic"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>نام فروشگاه</h5>
                                    <p>زمینه کاری فروشگاه</p>
                                    <a href="#" class="btn btn-danger">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 rtl">
                        <div class="box m-2">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('images/store_1.jpg') }}" alt="store_pic"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>نام فروشگاه</h5>
                                    <p>زمینه کاری فروشگاه</p>
                                    <a href="#" class="btn btn-danger">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 rtl">
                        <div class="box m-2">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('images/store_1.jpg') }}" alt="store_pic"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>نام فروشگاه</h5>
                                    <p>زمینه کاری فروشگاه</p>
                                    <a href="#" class="btn btn-danger">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 rtl">
                        <div class="box m-2">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('images/store_1.jpg') }}" alt="store_pic"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>نام فروشگاه</h5>
                                    <p>زمینه کاری فروشگاه</p>
                                    <a href="#" class="btn btn-danger">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 rtl">
                        <div class="box m-2">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL::asset('images/store_1.jpg') }}" alt="store_pic"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h5>نام فروشگاه</h5>
                                    <p>زمینه کاری فروشگاه</p>
                                    <a href="#" class="btn btn-danger">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container pt-2 pb-5">
            <div class="row">
                
                <div class="col text-end rtl">
                    <h3><span><img src="{{ URL::asset('images/icon_2.png') }}" alt="icon_logo"/></span>برخی از سوالات شما</h3>
                </div>
                
            </div>
            <div class="row rtl text-justify">

                <button class="accordion">چطور میتوانم لایور فروشگاهی که قرار هست اجاره کنم را ببینم ؟</button>
                <div class="panel">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">حداقل و حداکثر چند ماه میتوانم فروشگاه را اجاره کنم ؟</button>
                <div class="panel">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">آدرس فروشگاه من چی هست و امکان هست که خودم آدرس فروشگاه را انتخاب کنم ؟</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">بعد از اتمام قرار داد به اطلاعات فروشگاهم دسترسی دارم ؟</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
  
                <button class="accordion">اگر بخواهم میتوانم فروشگهام را روی هاست خودم انتقال بدهم ؟</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">چطور میتوانم فروشگاهم را سفارش دهم ؟</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="email">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text btn btn-danger" id="basic-addon1"><i class="fa fa-check" aria-hidden="true"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control rtl" placeholder="ایمیل خود را وارد نمایید" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                </div>

                <div class="col-5 text-center pt-2"><h5>از فروشگاه های جدید و تخفیفات ما مطلع شوید</h5></div>
                <div class="col-3 text-end">
                    <i class="fa fa-instagram" ></i>
                    <i class="fa fa-telegram" ></i>
                    <i class="fa  fa-envelope" ></i>
                    <i class="fa  fa-youtube" ></i>
                    <i class="fa  fa-linkedin" ></i>


                </div>

            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container-fluid footer_back">
            <div class="container rtl">
                <div class="row">
                    <div class="col-6">
                        <div class="col">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="logo"/>
                            <p>
                                مای استور برای دوستانی ساخته شده است که دغدغه این را دارند هزینه ساخت وب ساایت یا فروشگاه اینترنتی را پرداخت کنند ولی کسب و کارشون موفق نباشد و این هزینه را دور ریخته باشند. مای استور برای دوستانی ساخحته شده که کارمندی برای به روز رسانی و بارگذاری محنوای کسب و کارشان را ندارد. ماای استور برای دوستانی ساخته شده که میخواهند فروشگاه خود را قبل از ساختن ببینند و بهتر تصمیم بگیرند. کسانی که از کیفیت و محتوای فنی سایت خیالشان راحت باشد و بدون دغدغه تمکز خودشون رو روی کار و مارکت کسب کارشان بگذارند
                            </p>
                        </div>
                </div>
                    <div class="col-3">
                        <h4>راه های ارتباطی</h4>
                        <p>
                            آدرس: تهران خیابان اول کوچه دوم پلاک سوم
                        </p>
                        <p>
                            دفتر امریکا: فلوریدا تلهسی خیابان پنسولیا
                        </p>
                        <p><i class="fa  fa-envelope" ></i>info@mydomain.com</p>
                    </div>
                    <div class="col-3">
                        <h4>لینک های مفید</h4>
                        <a href="">ورود به پنل کاربری</a><br>
                        <a href="">ثبت نام</a><br>
                        <a href="">قوانین و مقررات</a><br>
                        <a href="">ارتباط با ما</a>
                    </div>

                </div>
                <div class="row">
                    <div class="col text-start copywrite">
                        CopyRight By Asiawebgroup - 2024
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
  
    
<script src="{{ URL::asset('main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
