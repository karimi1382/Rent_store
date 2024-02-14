<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('mymain.css') }}" />

 
</head>
<body>
    <section id="header">
        <div class="container-fluid header">
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
                <div class="col">
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
        </div>
        
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
