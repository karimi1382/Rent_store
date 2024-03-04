@extends('layouts.Dashbord_head')

@section('content')

<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">سوابق تراکنش موفق </li>
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
                <th style="width: 120px !important">مدت اعتبار</th>
              </tr>
            </thead>
            <tbody>
              <?php $n=1 ?>
              @foreach ( $orders as $order )
                @if($order->status == '1')

                <tr>
                  <input type="hidden" value="{{$order->id}}" name="id">
              <td class="pt-3">{{$n++}}</td>
              <td class="pt-3">{{$order->project_type_name}}</td>
              <td class="pt-3">{{$order->project_title}}</td>
              <td class="pt-3">{{$order->packege_name}}</td>
              
              <td class="pt-3">
                پرداخت شده
               
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

            

              <td>
                  @if($order->peyment_type==1)
                  کارت به کارت
                  @else
                  واریز کریپتو
                  @endif
             
              </td>


              
              <td>  
                        {{$order->payment_code}}
            </td>
                 
       
               
           


              <td style="background:green;color:#fff">
                
                <?php 
                    $fdate = $order->order_end_time;
                    $tdate = $order->created_at;
                    $datetime1 = new DateTime($fdate);
                    $datetime2 = new DateTime($tdate);
                    $interval = $datetime1->diff($datetime2);
                    $days = $interval->format('%a');
                    ?>
                    {{$days}} روز
                
              </td>

            </tr>
        
          
            @endif
            
            @endforeach
           </tbody>
          </table>
        </div>
    </div>
 
  </div>
 
</div>
@endsection