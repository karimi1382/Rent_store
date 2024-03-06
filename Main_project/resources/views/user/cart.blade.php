@extends('layouts.Dashbord_head')

@section('content')
@if(session()->has('success'))
  <div class=" alert alert-success">سفارش شما با موفقیت ثبت شد</div>
@endif
@if(session()->has('alarm'))
<div class=" alert alert-success">سفارش شما با موفقیت حذف شد</div>

@endif
@if(session()->has('peyment'))
<div class=" alert alert-warning">اطلاعات پرداخت شما با موفقیت ثبت شد. منتظر بررسی آن باشید</div>

@endif
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
                <th style="width: 90px !important">نام قالب</th>
                <th style="width: 200px !important">پکیج انتخابی</th>
                <th style="width: 130px !important">وضعیت</th>
                <th>ادمین</th>
                <th style="width: 20px !important">مبلغ</th>
                <th style="width: 130px !important">روش پرداخت</th>
                <th style="width: 250px !important">شماره پیگیری</th>
                <th style="width: 20px !important">پرداخت</th>
                <th style="width: 20px !important">انصراف</th>
              </tr>
            </thead>
            <tbody>
              <?php $n=1 ?>
              @foreach ( $orders as $order )
                @if($order->order_end_time != '-1')
                @if($order->status != '1')
                
                

                <tr>
                  <input type="hidden" value="{{$order->id}}" name="id">
              <td class="pt-3">{{$n++}}</td>
              <td class="pt-3">{{$order->project_type_name}}</td>
              <td class="pt-3">{{$order->project_title}}</td>
              <td class="pt-3">{{$order->packege_name}}</td>
              
              <td class="pt-3">
                @if($order->order_end_time != '+1')
                در انتظار پرداخت
                @else
                در حال بررسی 
                @endif
              </td>
              <td class="pt-3">
                <input type="checkbox" 
                @if(isset($order->order_admin))
                checked
                @endif
                 disabled></td>
              <td class="pt-3">
                @if(isset($order->order_admin))
                  @if($order->packege_id==1)
                      <?php $order->packege_price += 250000*3 ?>
                  @elseif($order->packege_id==2)
                      <?php $order->packege_price += 250000*6 ?>
                  @elseif($order->packege_id==3)
                  <?php $order->packege_price += 250000*12 ?>
                  @endif
                @endif
                {{$order->packege_price}}
              </td>

              <form id="delete_order_{{$order->id}}" action="{{ route('order.update',['order'=>$order->order_id])}}" method="POST">
                @csrf   
                @method('PUT')
                <input type="hidden" name="price" value="{{$order->packege_price}}" >
              <td>
                @if($order->order_end_time == '+1')
                  @if($order->peyment_type==1)
                    <input class="form-control" type="text" disabled value="کارت به کارت" >
                  @else
                  <input class="form-control" type="text" disabled value="واریز کریپتو" >
                  @endif
                @else
                <select name="peyment_method" class="form-control">
                    <option value="1">کارت به کارت</option>
                    <option value="2">واریز کریپتو</option>
                </select>
                @endif
              </td>


              
              <td>  
                @if($order->order_end_time == '+1')
                <input type="text" value="{{$order->payment_code}}" disabled class="form-control text-center" placeholder="شماره پیگیری واریز را وارد نمایید" name="peyment_detile" required/></td>
                 
                @else
    
                <input type="text" class="form-control text-center" placeholder="شماره پیگیری واریز را وارد نمایید" name="peyment_detile" required/></td>
                @endif
                <td>
                  @if($order->order_end_time == '+1')
                  <input type="submit" class="btn btn_banafsh" value="پرداخت" disabled />

                  @else
                <input type="submit" class="btn btn_banafsh" value="پرداخت" />
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />
                <input type="hidden" name="order_id" value="{{$order->order_id}}" />
                  @endif

              </td>
            </form>


              <td>
                
                <form id="delete_order_{{$order->id}}" action="{{ route('order.destroy',['order'=>$order->order_id])}}" method="POST">
                  @csrf   
                  @method('DELETE')
                  <input type="hidden" value="{{$order->order_id}}" name="id">
                  @if($order->order_end_time == '+1')
                  <input type="submit" class="btn btn-primary" value="انصراف" disabled/>

                  @else
                  <input type="submit" class="btn btn-primary" value="انصراف" />
                  @endif
                </form>

                {{-- <a href="#" id="Delete_{{$order->id}}" class="btn btn-primary">انصراف</a> --}}
              
              
              
              </td>

            </tr>
        
            @endif
            @endif
            
            @endforeach
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