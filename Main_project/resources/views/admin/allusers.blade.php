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
   

     
            <div class="container">
                <div class="col-md-12">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                      
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="table-responsive-md">
                                    <table class="table text-center table_cart table-striped table-hover alluser">
                                        <thead class="table-dark" >
                                            <tr>
                                                <th style="width: 20px !important">ردیف</th>
                                                <th style="width: 90px !important">تصویر</th>
                                                <th style="width: 120px !important">نام و نام خانوادگی</th>
                                                <th style="width: 90px !important">شهر</th>
                                                <th style="width: 90px !important">کشور</th>
                                          
                                                <th style="width: 20px !important">موبایل</th>
                                                <th style="width: 90px !important">ایمیل</th>
                                                <th style="width: 120px !important">تاریخ عضویت</th>
                                                <th style="width: 120px !important">اینستاگرام</th>
                                                <th style="width: 120px !important">لینکدین</th>
                                                <th style="width: 220px !important">آدرس</th>
                                               
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1 ?>
                                        @foreach ($user_detiles as $user_detile )
                                            
                                       
                                            <tr>
                                                <td>{{$n++}}</td>
                                                <td>
                                                    @if(isset($user_detile->photo_address))
                                                    <img class="adminusersimg" src="{{asset('storage/user/'.$user_detile->users->id.'/'.$user_detile->photo_address)}}" alt="Profile">
                                                    @else
                                                    <img src="{{asset('storage/user_avatar.jpeg')}}" alt="Profile" class="adminusersimg">
                                                    @endif


                                                <td>{{$user_detile->users->name}}</td>
                                                <td>{{$user_detile->city}}</td>
                                                <td> {{$user_detile->country}}</td>
                                                <td>{{$user_detile->mobile}}</td>
                                                <td>{{$user_detile->users->email}}</td>
                                                <td>{{$user_detile->users->created_at}}</td>
                                                <td>{{$user_detile->instagram}}</td>
                                                <td>{{$user_detile->linkedin}}</td>
                                                <td>{{$user_detile->address}}</td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      

                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>

</section>


@endsection
