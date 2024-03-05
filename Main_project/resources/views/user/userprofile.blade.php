@extends('layouts.Dashbord_head')

@section('content')

<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"> پروفایل </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
   

      <div class="col-md-10 mx-auto ">
        <div class="container">
        <div class="">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">پروفایل</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">ویرایش پروفایل </button>
              </li>

             

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">تغییر رمز ورود </button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">درباره من</h5>
                <p class="small fst-italic">من مهدی کریمی تولید کننده پوشاک و لوازم ورزشی هستم</p>

                <h5 class="card-title">مشخصات فردی</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">نام و نام خانوادگی</div>
                  <div class="col-lg-9 col-md-8">مهدی کریمی</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">شهر</div>
                  <div class="col-lg-9 col-md-8">تهران</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">شغل</div>
                  <div class="col-lg-9 col-md-8">فروشنده</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">کشور</div>
                  <div class="col-lg-9 col-md-8">ایران</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">آدرس</div>
                  <div class="col-lg-9 col-md-8">تهران - خیابان اول - کوچه دوم</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">موبایل</div>
                  <div class="col-lg-9 col-md-8">۰۹۱۳۳۵۲۸۰۱۴</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">ایمیل</div>
                  <div class="col-lg-9 col-md-8">m.karimi1382@gmail.com</div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form>
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">عکس پروفایل</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="{{'dashbord/assets/img/profile-img.jpg'}}" alt="Profile">
                      <div class="pt-2">
                        <input type="file" name="pic" class="form-control" />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">نام و نام خانوادگی</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="مهدی کریمی">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">درباره من</label>
                    <div class="col-md-8 col-lg-9">
                      <textarea name="about" class="form-control" id="about" style="height: 100px"></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">شهر</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="company" type="text" class="form-control" id="company" value="تهران">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">شغل</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="job" type="text" class="form-control" id="Job" value="فروشندگی">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">کشور</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="country" type="text" class="form-control" id="Country" value="ایران">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">آدرس</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="address" type="text" class="form-control" id="Address" value="تهران - خیابان اول - کوچه دوم">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">موبایل</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="Phone" value="۰۹۱۳۳۵۲۸۰۱۴">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">ایمیل</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="m.karimi1382@gmail.com">
                    </div>
                  </div>

        

                  <div class="row mb-3">
                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label"> آدرس پیج اینستاگرام</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label"> آدرس لینکدین</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                    </div>
                  </div>

                  <div class="text-start">
                    <button type="submit" class="btn btn_banafsh">ذخیره تغییرات</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

           

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">پسورد فعلی</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">پسورد جدید</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">تکرار پسورد جدید</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-start">
                    <button type="submit" class="btn btn_banafsh">ذخیره تغییرات</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>
        </div>
      </div>



    </div>
  </section>

  @endsection
