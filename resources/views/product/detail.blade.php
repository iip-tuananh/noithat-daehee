@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
@endsection
@section('js')
<script type="text/javascript">
    $('.slider-for').slick({
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav',
        prevArrow: '<span class="previous"><img src="{{url('frontend/images/left2.png')}}"></span>',
        nextArrow: '<span class="next"><img src="{{url('frontend/images/right2.png')}}"></span>',
    });
    $('.slider-nav').slick({
        autoplay: false,
        arrow: false,
        slidesToShow: 8,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: true}
        }, {breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 2}}, {
            breakpoint: 480,
            settings: {slidesToShow: 2, slidesToScroll: 1}
        }],
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        centerPadding: 0,
        focusOnSelect: true
    });
</script>
@endsection
@section('content')
<main>
    <section id="banner-cate">
       <div class="avarta"><img src="{{$img[0]}}" class="img-fluid" width="100%" alt="{{languageName($product->name)}}"></div>
    </section>
    <section id="breadcrumbs">
       <div class="container">
          <div class="content">
             <ul class="list-inline">
                <li class="list-inline-item"><a href="{{route('home')}}"><img
                   src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{languageName($product->name)}}"></a></li>
                <li class="list-inline-item"><a href="">Dịch vụ</a></li>
                <li class="list-inline-item"><span>{{languageName($product->name)}}</span></li>
             </ul>
          </div>
       </div>
    </section>
    <section id="project-detail">
       <div class="container">
          <div class="content">
             <div id="carousel-thumbs" class="carousel-thumbnails">
                <div class="slider-for">
                    @foreach ($img as $item)
                    <div class="carousel-items ">
                        <img class="img-fluid" src="{{$item}}"
                          width="100%" alt="{{$item}}">
                       </div>
                    @endforeach
                   
                </div>
                <!--/.Slides-->
                <div class="slider-nav">
                   @foreach ($img as $key => $item)
                   <div class="clc {{$key == 0 ? 'active' : ''}} "><img
                        class="{{$key == 0 ? 'active' : ''}}"
                        src="{{$item}}"
                        alt="{{$item}}">
                    </div>
                   @endforeach
                </div>
             </div>
             <div class="info-project">
                <h1>{{languageName($product->name)}}</h1>
                <div class="desc">
                    {!!languageName($product->content)!!}
                </div>
                <div class="social">
                   <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                      <a class="a2a_button_facebook"></a>
                      <a class="a2a_button_twitter"></a>
                      <a class="a2a_button_pinterest"></a>
                      <a class="a2a_button_google_gmail"></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section id="list-other-project">
       <div class="other-project">
          <div class="title">
             <h5 style="font-size: 30px;color: #ff9d0b;"><span>Dự án liên quan</span></h5>
          </div>
          <div class="list-other">
             <div class="container">
                <div class="content">
                   <div class="row">
                    @foreach ($productlq as $item)
                    @php
                        $imglq = json_decode($item->images);
                    @endphp
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="item">
                           <div class="avarta"><a
                              href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}"><img
                              src="{{ $imglq[0]}}" class="img-fluid"
                              width="100%" alt="{{languageName($item->name)}}"></a></div>
                           <div class="info">
                              <h3>
                                 <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}"
                                    title="{{languageName($item->name)}}">{{languageName($item->name)}}</a>
                              </h3>
                              <div class="linea">{!!languageName($item->description)!!}</div>
                           </div>
                        </div>
                     </div> 
                    @endforeach
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
</main>

@endsection

