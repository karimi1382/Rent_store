@extends('layouts.Dashbord_head')

@section('content')

@if(session()->has('success'))
<div class=" alert alert-success text-center">اطلاعات کاربری شما با موفقیت ویرایش  شد. </div>

@endif

@if(session()->has('newpass'))
<div class=" alert alert-success text-center">رمز کاربری شما با موفقیت ویرایش  شد. </div>

@endif


@if(session()->has('error_file'))
<div class=" alert alert-danger text-center">حجم فایل آپلود شده می بایست کمتر از ۵ مگابایت  باشد </div>

@endif

@if(session()->has('error'))
<div class=" alert alert-danger text-center">رمز عبور تغییر نکرد - رمز های عبور با هم مطابقت نداشت</div>

@endif




@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



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
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">تغییر رمز پروفایل </button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
             

                
              
                  
         
                <div class="row pt-4">
                  <div class="col-lg-3 col-md-4 label ">نام و نام خانوادگی</div>
                  <div class="col-lg-9 col-md-8">{{$user_detile->users->name}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">شهر</div>
                  <div class="col-lg-9 col-md-8">{{$user_detile->city}}</div>
                </div>


                <div class="row">
                  <div class="col-lg-3 col-md-4 label">کشور</div>
                  <div class="col-lg-9 col-md-8">{{$user_detile->country}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">آدرس</div>
                  <div class="col-lg-9 col-md-8">{{$user_detile->address}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">موبایل</div>
                  <div class="col-lg-9 col-md-8">{{$user_detile->mobile}}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">ایمیل</div>
                  <div class="col-lg-9 col-md-8">{{$user_detile->users->email}}</div>
                </div>
            
              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="{{url('user_update')}}" method="post" enctype='multipart/form-data'>
                @csrf
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">عکس پروفایل</label>
                    <div class="col-md-8 col-lg-9">
                      @if(isset($user_detile->photo_address))
                      <img src="{{asset('storage/user/'.auth::user()->id.'/'.$user_detile->photo_address)}}" alt="Profile">
                      @else
                      <img src="{{asset('storage/user_avatar.jpeg')}}" alt="Profile" class="adminusersimg">
                      @endif

                      <div class="pt-2">
                        <input type="file"  name="File" class="form-control" />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">نام و نام خانوادگی</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" type="text" class="form-control" id="fullName" value="{{$user_detile->users->name}}">
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">شهر</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="city" type="text" class="form-control" id="company" value="{{$user_detile->city}}">
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">کشور</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="country" type="text" class="form-control" id="Country" value="{{$user_detile->country}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">آدرس</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="address" type="text" class="form-control" id="Address" value="{{$user_detile->address}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">موبایل</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="mobile" type="text" class="form-control" id="Phone" value="{{$user_detile->mobile}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">ایمیل</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="{{$user_detile->users->email}}" disabled>
                    </div>
                  </div>

        

                  <div class="row mb-3">
                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label"> آدرس پیج اینستاگرام</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="instagram" type="text" class="form-control" id="Instagram" value="{{$user_detile->instagram}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label"> آدرس لینکدین</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="linkedin" type="text" class="form-control" id="Linkedin" value="{{$user_detile->linkedin}}">
                    </div>
                  </div>

                  <div class="text-start">
                    <button type="submit" class="btn btn_banafsh">ذخیره تغییرات</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

           

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form method="post" action="{{url('user_newpass')}}">

                  @csrf
                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">پسورد جدید</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">تکرار پسورد جدید</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword" required>
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
