@extends('layouts.Dashbord_head')

@section('content')

@if(session()->has('success'))
<div class=" alert alert-success text-center">اطلاعات کاربری شما با موفقیت ویرایش  شد. </div>

@endif


<div class="pagetitle p-4">
    <h1>ادمین سایت</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"> تراکنش ها </li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
   

        <div class="col-md-12 mx-auto ">
            <div class="container">
                <div class="">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">تراکنش های در انتظار</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">تراکنش های تایید شده </button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="table-responsive-md">
                                    <table class="table text-center table_cart table-striped table-hover">
                                        <thead class="table-dark" >
                                            <tr>
                                                <th>ردیف</th>
                                                <th>نوع سایت</th>
                                                <th style="width: 90px !important">نام قالب</th>
                                                <th style="width: 200px !important">پکیج انتخابی</th>
                                                <th>ادمین</th>
                                                <th style="width: 20px !important">مبلغ</th>
                                                <th style="width: 130px !important">روش پرداخت</th>
                                                <th style="width: 250px !important">شماره پیگیری</th>
                                                <th style="width: 120px !important">تایید</th>
                                                <th style="width: 120px !important">عدم تایید</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>فروشگاه</td>
                                                <td>دریا</td>
                                                <td>پکیج 3 ماهه</td>
                                                <td> <input type="checkbox" checked disabled ></td>
                                                <td>5200000</td>
                                                <td>کارت به کارت</td>
                                                <td>85412541</td>
                                                <td><a href=""><i class="bi bi-check-square bi_yes"></i></a></td>
                                                <td><a href=""><i class="bi bi-x-square bi_no"></i></a></td>

                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>تجاری</td>
                                                <td>ارغوان</td>
                                                <td>پکیج 6 ماهه</td>
                                                <td> <input type="checkbox" checked disabled ></td>
                                                <td>9200000</td>
                                                <td>کارت به کارت</td>
                                                <td>525412</td>
                                                <td><a href=""><i class="bi bi-check-square bi_yes"></i></a></td>
                                                <td><a href=""><i class="bi bi-x-square bi_no"></i></a></td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                             <!-- Profile Edit Form -->


                                <div class="col-md-6">
                                    <div class="card mb-6">
                                        <div class="row g-0">
                                            
                                            <div class="col-md-4 p-4">
                                                <img src="{{ asset('assets/images/blog-post-04.jpg')}}" alt="web" />
                                            </div>
                                            <div class="col-md-8 p-4">
                                                <h5 class="card-title">نوع قالب : فروشگاه - نام قالب : ارغوان</h5>
                                                <p class="card-text ">نام کسب و کار : فروشگاه پوشاک محدویان</p>
                                                <p class="card-text ">مدت اعتبار : 58 روز</p>
                                                <br>
                                                <a href="{{url('websetting')}}" class="btn btn_banafsh">مدیریت تنظیمات</a>
                                                  
                                            </div>               
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
