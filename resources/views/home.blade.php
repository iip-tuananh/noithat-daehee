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
            <h1 style="display: none;">Công ty TNHH đầu tư thương mại và dịch vụ mộc phát</h1>
            <h4 style="display: none;">NỘI THẤT D.HOME LUXURY</h4>
            <div class="swiper-container slide-banner">
                <div class="swiper-wrapper">
                    @foreach ($bennerHome as $bennerHome)
                        <div class="swiper-slide">
                            <div class="item">
                                <div class="avarta">
                                    <a href="" target="_blank">
                                        <img src="{{ $bennerHome->image }}" class="img-fluid" width="100%"
                                            alt="{{ $bennerHome->name }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="swiper-slide">
                        <div class="item">
                           <div class="avarta">
                              <a href="" target="_blank">
                                    <img src="https://dhomesluxury.com/uploads/images/banner-trang-chu-675832810.jpg"
                                       class="img-fluid" width="100%"
                                       alt="http://dhomesluxury.com/uploads/images/banner-trang-chu-675832810.jpg">
                              </a>
                           </div>
                        </div>
                  </div>
                  <div class="swiper-slide">
                        <div class="item">
                           <div class="avarta">
                              <a href="" target="_blank">
                                    <img src="https://dhomesluxury.com/uploads/images/banner-trang-chu-1240778606.jpg"
                                       class="img-fluid" width="100%"
                                       alt="http://dhomesluxury.com/uploads/images/banner-trang-chu-1240778606.jpg">
                              </a>
                           </div>
                        </div>
                  </div> --}}
                </div>
                <div class="swiper-button-next"><a href="javascript:0"><img
                            src="{{asset('frontend/images/right1.png')}}" class="img-fluid" alt="right"></a>
                </div>
                <div class="swiper-button-prev"><a href="javascript:0"><img
                            src="{{asset('frontend/images/left1.png')}}" class="img-fluid" alt="left"></a>
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
                                <p style="text-align: justify;">{{ $gioithieu->description }}</p>
                            </div>
                            <div class="form-right-inf">
                                <div style="width: 100%; display: inline-block;">
                                    <div class="button-6">
                                        <div class="eff-6"></div>
                                        <a href="https://dhomesluxury.com/gioi-thieu.html" class="btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
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
                            <div class="grid">
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
                            @foreach ($hotnews as $hotnews)
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="{{ route('detailBlog', ['slug'=>$hotnews->slug]) }}"
                                            title="{{languageName($hotnews->title)}}"><img
                                                src="{{$hotnews->image}}"
                                                class="img-fluid" width="100%"
                                                alt="{{languageName($hotnews->title)}}"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="{{ route('detailBlog', ['slug'=>$hotnews->slug]) }}"
                                                title="{{languageName($hotnews->title)}}">{{languageName($hotnews->title)}}</a>
                                        </h3>
                                        <div class="date">
                                            {{$hotnews->created_at}}
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">NỘI THẤT DAEHEE</p>
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
