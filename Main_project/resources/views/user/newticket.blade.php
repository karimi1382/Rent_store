@extends('layouts.Dashbord_head')

@section('content')




<div class="pagetitle p-3">
    <h1>پنل کاربری</h1>
    <nav>
      <ol class="breadcrumb">
   
        <li class="breadcrumb-item active">ارسال تیکت جدید</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

<div class="coltainer">
    <div class="row">
        <section class="section">
            <div class="row">
              <div class="col-lg-8 mx-auto">
      
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">فرم زیر را برای ارسال تیکت جدید پر نمایید</h5>
                    <form class="row g-3" method="post" action="{{url('addticket')}}">
                        @csrf
                        <div class="col-md-12">
                            <div class=" mb-3">
                              <select class="form-select" name="ticket_type_id" >
                                <option selected>یک موضوع را انتخاب کنید</option>
                                @foreach ($ticket_types as  $ticket_type)
                                    
                                @endforeach
                                <option value="{{$ticket_type->id}}">{{$ticket_type->title}}۱ </option>
                              </select>
                            </div>
                          </div>
                       
                        <div class="col-12">
                          <div class="">
                            <textarea class="form-control" name="text" placeholder="متن خود را وارد نمایید" id="floatingTextarea" style="height: 100px;"></textarea>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input type="file" name="file" class="form-control" id="floatingZip" placeholder="پیوست فایل">
                            <label for="floatingZip">پیوست فایل</label>
                          </div>
                        </div>
                        <div class="text-start">
                          <button type="submit" class="btn btn_banafsh">ارسال درخواست</button>
                        </div>
                      </form><!-- End floating Labels Form -->
        
                    <!-- Quill Editor Default -->
                    
      
                  </div>
                </div>
      
      
      
              </div>
      
            
            </div>
          </section>
    </div>
</div>

@endsection