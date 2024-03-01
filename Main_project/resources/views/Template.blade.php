@extends('layouts.content-home')
@section('content')
<section id="template_type">
 <div class="container">
   
    <div class="row">
        <div class="section-heading  wow fadeInDown rtl" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>قالب ها</h6>
            <h4>متناسب با کسب کارتون میتونین قالب مورد نظر رو <em>انتخاب کنید</em></h4>
            <div class="line-dec"></div>
          </div>
    </div>
    <div class="row rtl pt-4  wow fadeIn rtl" data-wow-duration="1s" data-wow-delay="0.9s">
        <div class="blog-posts">
            <div class="row">
              @forelse ( $projects as $Project )
                  @foreach ($Project->projects as $template )
                  <div class="col-lg-6">
                    <div class="post-item">
                      <div class="thumb">
                      <img src="{{ asset('assets/images/blog-post-02.jpg')}}" alt="">
                      </div>
                      <div class="right-content">
                        <span class="category"><a class="link_demo" target="_blank" href="{{$template->url}}" >مشاهده دمو قالب</a></span>
                        <span class="btn btn-primary"><a class="link_bye" href="{{url('insertdata/'.$template->id)}}" >انتخاب قالب</a></span>
    
                        {{-- <span class="date">24 September 2021</span> --}}
                        <a href="#"><h4>{{$template->title}}</h4></a>
                        <p>{{$template->description}}</p>
                      </div>
                    </div>
                  </div>
                  @endforeach
              @empty
                <p class="text-center">قالبی برای این دسته در نظر گرفته نشسده است</p>
              @endforelse
              

            </div>
          </div>
    </div>
 </div>
</section>
@endsection