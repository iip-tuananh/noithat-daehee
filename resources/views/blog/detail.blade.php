@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="w-cate" class="">
    <section id="breadcrumbs">
       <div class="container">
          <div class="content">
             <ul class="list-inline">
                <li class="list-inline-item"><a href="{{route('home')}}">
                   <img src="{{asset('frontend/images/home.png')}}" class="img-fluid" alt="{{route('home')}}"></a>
                </li>
                <li class="list-inline-item"><a href="">Tin tức</a></li>
                <li class="list-inline-item">
                   <a href="{{route('allListProCate',['danhmuc'=>$blog_detail->cate->slug])}}">{{languageName($blog_detail->cate->name)}}</a>
                </li>
                <li class="list-inline-item"><span>{{languageName($blog_detail->title)}}</span></li>
             </ul>
          </div>
       </div>
    </section>
    <section id="news" style="margin-bottom: 30px;">
       <div class="container">
          <div class="content content-new-detail">
             <div class="left">
                <div class="content-detail">
                   <div class="top">
                      <!--<h2><a href="javascript:0">tin mới</a></h2>-->
                      <h1>{{languageName($blog_detail->title)}}</h1>
                      <div class="cate-date">
                         <span>{{languageName($blog_detail->cate->name)}}</span>                             	
                      </div>
                      <div class="descript">
                         <span>
                            <p style="text-align: justify;">{!!languageName($blog_detail->description)!!}</p>
                         </span>
                      </div>
                   </div>
                </div>
                <div class="info-details aa">
                    {!!languageName($blog_detail->content)!!}
                </div>
                <div class="list-new-mobile hidden-desktop">
                   <div class="content">
                      <div class="title">
                         <h2><span>tin tức liên quan</span></h2>
                      </div>
                      <div class="swiper-container slide-news swiper-container-horizontal">
                         <div class="swiper-wrapper" style="transition-duration: 300ms;">
                            @foreach ($bloglq as $item)
                            <div class="swiper-slide">
                                <div class="item">
                                   <div class="avarta"><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img src="{{($item->image)}}" class="img-fluid" width="100%" alt="{{languageName($item->title)}}"></a></div>
                                   <div class="info">
                                      <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                                      </h3>
                                      <div class="date">
                                         <span> {{date_format($item->created_at,'d/m/Y')}} </span>
                                      </div>
                                      <div class="desc">
                                        <p style="text-align: justify;">{{languageName($item->description)}}</p>
                                     </div>
                                   </div>
                                </div>
                             </div>
                            @endforeach
                         </div>
                         <div class="swiper-button-next"><a href="javascript:0"><img src="{{asset('frontend/images/right1.png')}}" class="img-fluid" alt="Right"></a>
                         </div>
                         <div class="swiper-button-prev"><a href="javascript:0"><img src="{{asset('frontend/images/left1.png')}}" class="img-fluid" alt="Left"></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="right">
                <div class="side-bar">
                   <div class="item">
                      <div class="title-side"><span>danh mục</span></div>
                      <div class="list-room">
                         <div class="row">
                            @foreach ($categoryhome as $item)
                            <div class="col-md-6 col-sm-6">
                                <div class="item-room">
                                   <div class="avarta">
                                    <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">
                                        <img src="{{$item->avatar}}" class="img-fluid" width="100%" alt="{{languageName($item->name)}}">
                                    </a>
                                   </div>
                                   <div class="info">
                                      <h3><a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" class="box first">{{languageName($item->name)}}</a>
                                      </h3>
                                   </div>
                                </div>
                             </div>
                            @endforeach
                         </div>
                      </div>
                   </div>
                   <div class="item">
                      <div class="title-side"><span>Bài viết mới nhất</span></div>
                      <div class="list-read">
                        @foreach ($blognew as $item)
                        <div class="item-read">
                            <div class="avarta"><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img src="{{($item->image)}}" class="img-fluid" width="100%" alt="{{languageName($item->title)}}"></a>
                            </div>
                            <div class="info">
                               <h3>
                                  <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                               </h3>
                            </div>
                         </div>
                        @endforeach
                      </div>
                   </div>
                   <div class="item d-md-none">
                      <div class="list-part">
                         <div class="row">
                            @foreach ($partner as $item)
                            <div class="col-md-6">
                                <div class="avarta">
                                    <a rel="nofollow" target="_blank" href="{{$item->link}}">
                                        <img src="{{$item->image}}" class="img-fluid" alt="{{$item->image}}"></a></div>
                             </div>
                            @endforeach
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section id="box-news" style="margin-bottom: 40px;padding-bottom: 0;background: transparent;padding-top: 0;" class="visible-desktop">
       <div class="container">
          <div class="content">
             <div class="title">
                <h2><span>tin tức liên quan</span></h2>
             </div>
             <div class="swiper-container slide-news swiper-container-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 300ms;">
                   @foreach ($bloglq as $item)
                   <div class="swiper-slide">
                       <div class="item">
                          <div class="avarta"><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img src="{{($item->image)}}" class="img-fluid" width="100%" alt="{{languageName($item->title)}}"></a></div>
                          <div class="info">
                             <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                             </h3>
                             <div class="date">
                                <span> {{date_format($item->created_at,'d/m/Y')}} </span>
                             </div>
                             <div class="desc">
                               <p style="text-align: justify;">{{languageName($item->description)}}</p>
                            </div>
                          </div>
                       </div>
                    </div>
                   @endforeach
                </div>
                <div class="swiper-button-next"><a href="javascript:0"><img src="{{asset('frontend/images/right1.png')}}" class="img-fluid" alt="Right"></a>
                </div>
                <div class="swiper-button-prev"><a href="javascript:0"><img src="{{asset('frontend/images/left1.png')}}" class="img-fluid" alt="Left"></a>
                </div>
             </div>
          </div>
       </div>
    </section>
 </main>
@endsection