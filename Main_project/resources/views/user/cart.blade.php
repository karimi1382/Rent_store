@extends('layouts.Dashbord_head')

@section('content')

<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">سبد خرید</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<div class="container">
  <div class="col-md-12">
    <div class="row">
        <div class="table-responsive-md">
        <table class="table text-center table_cart table-striped table-hover">
            <thead class="table-dark" >
              <tr>
                <th>ردیف</th>
                <th>نوع سایت</th>
                <th>نام قالب</th>
                <th>نام کسب و کار</th>
                <th>تاریخ اعتبار</th>
                <th>وضعیت</th>
                <th>مبلغ</th>
                <th>روش پرداخت</th>
                <th>شماره پیگیری</th>
                <th>پرداخت</th>
                <th>انصراف</th>
                <th>جزئیات</th>
              </tr>
            </thead>
            <tbody>
                <tr>
              <td class="pt-3">۱</td>
              <td class="pt-3">فروشگاه</td>
              <td class="pt-3">ارغوان</td>
              <td class="pt-3">فروشگاه محمدی</td>
              <td class="pt-3">هنوز فعال نشده است</td>
              <td class="pt-3">انتظار پرداخت</td>
              <td class="pt-3">۲۵۵۰۰۰۰</td>
              <td>
                <select class="form-control">
                    <option value="">کارت به کارت</option>
                    <option value="">واریز کریپتو</option>
                </select>
              </td>
              <td><input type="text" class="form-control text-center" placeholder="شماره پیگیری واریز را وارد نمایید" name="peyment_detile" /></td>
              <td><a href="#" class="btn btn_banafsh">پرداخت</a></td>
              <td><a href="#" class="btn btn-primary">انصراف</a></td>
              <td class="pt-3"><a href="#" ><i class="bi bi-pencil-square"></i></a></td>

            </tr>
            <tr>
                <td class="pt-3">۲</td>
                <td class="pt-3">آکادمی</td>
                <td class="pt-3">باران</td>
                <td class="pt-3">آموزشگاه اشرفی</td>
                <td class="pt-3">هنوز فعال نشده است</td>
                <td class="pt-3">انتظار پرداخت</td>
                <td class="pt-3">۹۱۰۰۰۰۰</td>
                <td>
                  <select class="form-control">
                      <option value="">کارت به کارت</option>
                      <option value="">واریز کریپتو</option>
                  </select>
                </td>
                <td><input type="text" class="form-control text-center" placeholder="شماره پیگیری واریز را وارد نمایید" name="peyment_detile" /></td>
                <td><a href="#" class="btn btn_banafsh">پرداخت</a></td>
                <td><a href="#" class="btn btn-primary">انصراف</a></td>
                <td class="pt-3"><a href="#" ><i class="bi bi-pencil-square"></i></a></td>
  
              </tr>
              <tr>
                <td class="pt-3">۳</td>
                <td class="pt-3">تجاری</td></td>
                <td class="pt-3">دریا</td>
                <td class="pt-3">شرکت رامتین</td>
                <td class="pt-3">هنوز فعال نشده است</td>
                <td class="pt-3">انتظار پرداخت</td>
                <td class="pt-3">۶۳۰۰۰۰۰</td>
                <td>
                  <select class="form-control">
                      <option value="">کارت به کارت</option>
                      <option value="">واریز کریپتو</option>
                  </select>
                </td>
                <td><input type="text" class="form-control text-center" placeholder="شماره پیگیری واریز را وارد نمایید" name="peyment_detile" /></td>
                <td><a href="#" class="btn btn_banafsh">پرداخت</a></td>
                <td><a href="#" class="btn btn-primary">انصراف</a></td>
                <td class="pt-3"><a href="#" ><i class="bi bi-pencil-square"></i></a></td>
  
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 class="pb-4">راهنمای پرداخت</h3>
        </div>
        <div class="col-md-6">
            <div class="card mb-6">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ URL::asset('Dashbord/assets/img/cart_1.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                         <div class="card-body">
                            <h5 class="card-title">روش پرداخت کارت به کارت</h5>
                            <p class="card-text rtl_justify"> لطفا مبلغ درج شده در کادر را به شماره کارت زیر واریز و شماره پیگیری را در کادر مشخص شده وارد نمایید و بر روی دکمه پرداخت کلیک کنین تا واریزی شما بررسی شود</p>
                            <p class="card-text"><small class="text-muted">۱۱۱۱-۲۲۲۲-۳۳۳۳-۴۴۴۴ <br> بانک شهر - حسینعلی کریمی یزدی</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-6">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ URL::asset('Dashbord/assets/img/cart_2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                         <div class="card-body">
                            <h5 class="card-title">روش پرداخت کریپتو</h5>
                            <p class="card-text rtl_justify">شما میتوانید با تغییر روش پرداخت به کریپتو هزینه اجاره سایت را به تتر مشاهده کرده و با اسکن و یا کپی آدرس کیف پول اقدام به واریز usdt در شبکه trc-20 نمایید.  شماره پیگیری را در کادر مشخص شده وارد نمایید و بر روی دکمه پرداخت کلیک کنید</p>
                            <p class="card-text"><small class="text-muted">آدرس کیف پول :<br> TAuqJfTNUKtDiV9ZsKiJFLEGSy43VPQfvx</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection