@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <main>
        <section id="banner">
            <div class="swiper-container slide-banner">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="avarta">
                                    <a href="#">
                                        <img src="{{ $banner->image }}" class="img-fluid" width="100%"
                                            alt="{{ $banner->name }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"><a href="javascript:0"><img
                            src="{{ asset('frontend/images/right.png') }}" class="img-fluid" alt="right"></a>
                </div>
                <div class="swiper-button-prev"><a href="javascript:0"><img
                            src="{{ asset('frontend/images/left.png') }}" class="img-fluid" alt="left"></a>
                </div>
            </div>
        </section>
        <section id="list-banner">
            <div class="container">
                <div class="content">
                    <div class="row">
                        @foreach ($categoryHome as $cate)
                            <div class="col-md-3">
                                <div class="item wow fadeIn wHighlight" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}"><img
                                                src="{{ $cate->avatar }}" class="img-fluid" width="100%"
                                                alt="{{ languageName($cate->name) }}"></a>
                                    </div>
                                    <div class="info">
                                        <h2>
                                            <a
                                                href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}">{{ languageName($cate->name) }}</a>
                                        </h2>
                                        <div class="viewmore">
                                            <a href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}"
                                                class="box first">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <section class="w3l-newsletter showroom-home">
            <div class="form-25-mian" style="background: #f4f4fb;">
                <div class="subscription-grids">
                    <div class="form-inner-cont">
                        <div class="wrapper">
                            <div class="forms-25-info">
                                <h3>{{ $setting->company }}</h3>
                                <p style="text-align: justify;">{!! $gioithieu->description !!}</p>
                            </div>
                            <div class="form-right-inf">
                                <div style="width: 100%; display: inline-block;">
                                    <div class="button-6">
                                        <div class="eff-6"></div>
                                        <a href="{{route('aboutUs')}}" class="btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container pl-0">
                        <div class="subscription-img">  
                            @foreach ($pageContent as $pageContent)
                                <img src="{{ $pageContent->image }}" class="img-responsive" alt="">
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="container pt-4">
                    <div class="swiper-container slide-bannerads">
                        <div class="swiper-wrapper">
                            @foreach ($album as $album)
                                <div class="swiper-slide">
                                    <div class="item wow fadeIn" data-wow-delay=".4s">
                                        <div class="avarta">
                                            <a class="thumbnail-image" href="javascript:;" title=""
                                                data-src="{{ $album->image }}"><img src="{{ $album->image }}"
                                                    class="img-fluid" width="100%" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"><a href="javascript:0"><img
                                    src="{{ asset('frontend/images/right1.png') }}" class="img-fluid" alt="right"></a>
                        </div>
                        <div class="swiper-button-prev"><a href="javascript:0"><img
                                    src="{{ asset('frontend/images/left1.png') }}" class="img-fluid" alt="left"></a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>
        <section class="w3l-feature-with-photo-1 xuong-sx-home">
            <div class="feature-with-photo-hny">
                <div class="wrapper">
                    <div class="feature-with-photo-content">
                        <div class="three-grids d-grid grid-columns-3">
                            <div class="grid ">
                                <div class="icon">
                                    <span class="fa fa-briefcase" aria-hidden="true"></span>
                                </div>
                                <div class="icon-info">
                                    <h4>Tiến độ rõ ràng</h4>
                                    <p>Tất cả các bước đều được tiến hành theo quy trình chuyên nghiệp, có tiến độ rõ
                                        ràng,
                                        có giám sát trực tiếp về chất lượng và đảm bảo hoàn thiện theo đúng thời gian cam
                                        kết.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <span class="fa fa-home" aria-hidden="true"></span>
                                </div>
                                <div class="icon-info">
                                    <h4>Quy trình chuyên nghiệp</h4>
                                    <p>Quy trình làm việc chuyên nghiệp sẽ giúp KTS trực tiếp phối hợp ăn ý cùng thợ thủ
                                        công để cho ra đời sản phẩm hoàn mỹ nhất.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <span class="fa fa-building-o" aria-hidden="true"></span>
                                </div>
                                <div class="icon-info">
                                    <h4>Sản phẩm hoàn hảo</h4>
                                    <p>Trước khi gửi đến khách hàng, nội thất Daehee luôn kiểm tra sản phẩm một cách toàn diện.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if (count($homePro) > 0)
            <section id="box-project">
                <div class="container">
                    <div class="content">
                        <div class="title">
                            <h2><span>Dự án nổi bật</span></h2>
                        </div>
                    </div>
                </div>
                <div class="list-project">
                    <div class="container-fluid">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-small">
                                    <div class="small">
                                        <div class="row">
                                            @foreach ($homePro as $key => $product)
                                                @php
                                                    $img = json_decode($product->images);
                                                @endphp
                                                @if ($key != 0)
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                                            <div class="avarta"><a
                                                                    href="{{ route('detailProduct', ['cate'=>$product->cate_slug,'slug'=>$product->slug]) }}"><img
                                                                        src="{{ $img[0] }}" class="img-fluid"
                                                                        width="100%"
                                                                        alt="{{ languageName($product->name) }}"></a>
                                                            </div>
                                                            <div class="info">
                                                                <h3><a href="{{ route('detailProduct', ['cate'=>$product->cate_slug,'slug'=>$product->slug]) }}"
                                                                        title="{{ languageName($product->name) }}">{{ languageName($product->name) }}</a>
                                                                </h3>
                                                                <div class="linea">
                                                                    {!! languageName($product->description) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-big">
                                    <div class="big wow fadeIn" data-wow-delay="2s">
                                        <div class="avarta">
                                            <a
                                                href="{{ route('detailProduct', ['cate'=>$homePro[0]->cate_slug,'slug'=>$homePro[0]->slug]) }}"><img
                                                    src="{{ json_decode($homePro[0]->images)[0] }}" class="img-fluid"
                                                    width="100%" alt="{{ languageName($homePro[0]->name) }}"></a>
                                        </div>
                                        <div class="info">
                                            <h3>
                                                <a
                                                    href="{{ route('detailProduct', ['cate'=>$homePro[0]->cate_slug,'slug'=>$homePro[0]->slug]) }}">{{ languageName($homePro[0]->name) }}</a>
                                            </h3>
                                            <div class="linea">
                                                {!!languageName($homePro[0]->description)!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @if (count($hotnews) > 0)
        <section id="box-news" class="aaa">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h2><span>Tin tức</span></h2>
                    </div>
                    <div class="swiper-container slide-news">
                        <div class="swiper-wrapper">
                            @foreach ($hotnews as $hotnew)
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="{{ route('detailBlog', ['slug'=>$hotnew->slug]) }}"
                                            title="{{languageName($hotnew->title)}}"><img
                                                src="{{$hotnew->image}}"
                                                class="img-fluid" width="100%"
                                                alt="{{languageName($hotnew->title)}}"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="{{ route('detailBlog', ['slug'=>$hotnew->slug]) }}"
                                                title="{{languageName($hotnew->title)}}">{{languageName($hotnew->title)}}</a>
                                        </h3>
                                        <div class="date">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.19926 4.25024C6.49268 4.25024 6.73054 4.48811 6.73054 4.78153V8.051C6.73054 8.34442 6.49268 8.58228 6.19926 8.58228C5.90583 8.58228 5.66797 8.34442 5.66797 8.051V4.78153C5.66797 4.48811 5.90583 4.25024 6.19926 4.25024Z" fill="#7B7B7B"></path>
                                                    <path d="M7.26187 8.32356C7.26187 8.91041 6.78614 9.38614 6.19929 9.38614C5.61245 9.38614 5.13672 8.91041 5.13672 8.32356C5.13672 7.73672 5.61245 7.26099 6.19929 7.26099C6.78614 7.26099 7.26187 7.73672 7.26187 8.32356Z" fill="#7B7B7B"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.20142 1.75332C5.44136 1.05586 6.95535 1.05586 8.19529 1.75332L10.3204 2.94872C11.603 3.67016 12.3967 5.02729 12.3967 6.49883V8.73132C12.3967 10.2029 11.603 11.56 10.3204 12.2814L8.19529 13.4768C6.95535 14.1743 5.44136 14.1743 4.20142 13.4768L2.07627 12.2814C0.793712 11.56 0 10.2029 0 8.73132V6.49883C0 5.02729 0.793712 3.67016 2.07627 2.94872L4.20142 1.75332ZM7.67435 2.67944C6.75788 2.16392 5.63884 2.16392 4.72236 2.67944L2.59721 3.87484C1.64923 4.40807 1.06258 5.41117 1.06258 6.49883V8.73132C1.06258 9.81898 1.64923 10.8221 2.59721 11.3553L4.72236 12.5507C5.63884 13.0662 6.75788 13.0662 7.67435 12.5507L9.7995 11.3553C10.7475 10.8221 11.3341 9.81898 11.3341 8.73132V6.49883C11.3341 5.41117 10.7475 4.40807 9.79951 3.87484L7.67435 2.67944Z" fill="#7B7B7B"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.51457 0.236639C4.67733 0.480781 4.61136 0.810641 4.36722 0.973403L2.24207 2.39017C1.99792 2.55293 1.66806 2.48696 1.5053 2.24282C1.34254 1.99868 1.40851 1.66881 1.65265 1.50605L3.77781 0.0892861C4.02195 -0.0734752 4.35181 -0.00750317 4.51457 0.236639Z" fill="#7B7B7B"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.88225 0.236639C8.04502 -0.00750317 8.37488 -0.0734752 8.61902 0.0892861L10.7442 1.50605C10.9883 1.66881 11.0543 1.99868 10.8915 2.24282C10.7288 2.48696 10.3989 2.55293 10.1548 2.39017L8.02961 0.973403C7.78547 0.810641 7.71949 0.480781 7.88225 0.236639Z" fill="#7B7B7B"></path>
                                                </svg>
                                            </span>
                                            <span>{{date('d-m-Y', strtotime($hotnew->created_at))}}</span>
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">{!!languageName($hotnew->description)!!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"><a href="javascript:0"><img
                                    src="{{asset('frontend/images/right1.png')}}" class="img-fluid"
                                    alt="right"></a></div>
                        <div class="swiper-button-prev"><a href="javascript:0"><img
                                    src="{{asset('frontend/images/left1.png')}}" class="img-fluid"
                                    alt="left"></a></div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if (count($partner)>0)
        <section id="box-baochi">
            <div class="container">
                <div class="title">
                    <h2><span>Đối tác</span></h2>
                </div>
                <div class="swiper-container slide-partner">
                    <div class="swiper-wrapper">
                        @foreach ($partner as $partner)
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="{{$partner->link}}" class="seoquake-nofollow">
                                        <img src="{{$partner->image}}"
                                            class="img-fluid" alt="{{$partner->name}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        @endif
    </main>
@endsection
