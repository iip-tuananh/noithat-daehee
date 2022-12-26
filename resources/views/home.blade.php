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
                            src="{{url('frontend/images/right.png')}}" class="img-fluid" alt="Trang chủ"></a>
                </div>
                <div class="swiper-button-prev"><a href="javascript:0"><img
                            src="{{url('frontend/images/left.png')}}" class="img-fluid" alt="Trang chủ"></a>
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
                                        <a href="{{route('aboutUs')}}" class="btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="subscription-img">
                            @foreach ($pageContent as $pageContent)
                            <img src="{{$pageContent->image}}"
                            class="img-responsive" alt="">
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
                                                data-src="{{$album->image}}"><img
                                                    src="{{$album->image}}"
                                                    class="img-fluid" width="100%" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"><a href="javascript:0"><img
                                    src="{{ asset('frontend/images/right1.png') }}" class="img-fluid"
                                    alt="right"></a></div>
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
                                    <p>Trước khi gửi đến khách hàng, NaDu luôn kiểm tra sản phẩm một cách toàn diện.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="box-project">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h2><span>dự án mới hoàn thành</span></h2>
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
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                                <div class="avarta"><a
                                                        href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-chung-cu-cao-cap/thiet-ke-chung-cu-cao-cap-2-ngu-r1-03-ocean-park-boi-dhomeluxury.html"><img
                                                            src="https://dhomesluxury.com/uploads/images/san-pham-304258830.jpg"
                                                            class="img-fluid" width="100%"
                                                            alt="Thiết kế chung cư cao cấp 2 ngủ R1-03 Ocean Park bởi D.HOMELUXURY"></a>
                                                </div>
                                                <div class="info">
                                                    <h3><a href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-chung-cu-cao-cap/thiet-ke-chung-cu-cao-cap-2-ngu-r1-03-ocean-park-boi-dhomeluxury.html"
                                                            title="Thiết kế chung cư cao cấp 2 ngủ R1-03 Ocean Park bởi D.HOMELUXURY">Thiết
                                                            kế chung cư cao cấp 2 ngủ R1-03 Ocean Park bởi
                                                            D.HOMELUXURY</a>
                                                    </h3>
                                                    <div class="linea">
                                                        <p>Từ l&acirc;u c&aacute;c c&ocirc;ng tr&igrave;nh thi c&ocirc;ng
                                                            hay&nbsp;thiết kế nội thất nh&agrave; phố&nbsp;đẹp&nbsp;đều
                                                            l&agrave; một điều được để &yacute; tới. Việc c&oacute; một
                                                            kh&ocirc;ng gian tươi mới theo nhiều hướng đi v&agrave; phong
                                                            c&aacute;ch thiết kế theo kiểu mới lạ sẽ gi&uacute;p cho bạn
                                                            c&oacute; một kh&ocirc;ng gian ưng &yacute; nhất.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                                <div class="avarta"><a
                                                        href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-nha-pho/thiet-ke-nha-pho-cao-cap-nha-a-vu-boi-dhomeluxury.html"><img
                                                            src="https://dhomesluxury.com/uploads/images/san-pham-1580082433.jpg"
                                                            class="img-fluid" width="100%"
                                                            alt="Thiết kế nhà phố cao cấp Nhà A Vũ bởi D.HOMELUXURY"></a>
                                                </div>
                                                <div class="info">
                                                    <h3><a href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-nha-pho/thiet-ke-nha-pho-cao-cap-nha-a-vu-boi-dhomeluxury.html"
                                                            title="Thiết kế nhà phố cao cấp Nhà A Vũ bởi D.HOMELUXURY">Thiết
                                                            kế nhà phố cao cấp Nhà A Vũ bởi D.HOMELUXURY</a></h3>
                                                    <div class="linea">
                                                        <p>Yếu tố phong thủy rất được ch&uacute; trọng nhằm mang lại sự
                                                            may
                                                            mắn v&agrave; thoải m&aacute;i trong tư tưởng của c&aacute;c
                                                            th&agrave;nh vi&ecirc;n. Một phong thủy tốt sẽ c&oacute; ảnh
                                                            hưởng đến cuộc sống tinh thần của người Việt Nam ta theo quan
                                                            niệm phong thủy tốt sẽ mang lại may mắn, t&agrave;i lộc
                                                            v&agrave; sức khỏe.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                                <div class="avarta"><a
                                                        href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-nha-pho/thiet-ke-nha-pho-cao-cap-nha-chi-hoa-boi-dhomesluxury.html"><img
                                                            src="https://dhomesluxury.com/uploads/images/san-pham-1371043348.jpg"
                                                            class="img-fluid" width="100%"
                                                            alt="THIẾT KẾ NHÀ PHỐ CAO CẤP NHÀ CHỊ HOA BỞI D.HOMESLUXURY"></a>
                                                </div>
                                                <div class="info">
                                                    <h3><a href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-nha-pho/thiet-ke-nha-pho-cao-cap-nha-chi-hoa-boi-dhomesluxury.html"
                                                            title="THIẾT KẾ NHÀ PHỐ CAO CẤP NHÀ CHỊ HOA BỞI D.HOMESLUXURY">THIẾT
                                                            KẾ NHÀ PHỐ CAO CẤP NHÀ CHỊ HOA BỞI D.HOMESLUXURY</a></h3>
                                                    <div class="linea">
                                                        <p>Thiết kế nội thất theo phong c&aacute;ch Luxury ch&iacute;nh
                                                            l&agrave; lựa chọn ho&agrave;n hảo d&agrave;nh cho cộng đồng
                                                            tinh hoa kiệt xuất v&agrave; giới thượng lưu đang t&igrave;m
                                                            kiếm một kh&ocirc;ng gian sống mang đậm hơi thở quyền
                                                            qu&yacute;, hiện thực h&oacute;a giấc mộng &ldquo;đế
                                                            vương&rdquo; của m&igrave;nh.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                                <div class="avarta"><a
                                                        href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-can-ho-douplex/thiet-ke-noi-that-ecopark-can-ho-3009-boi-dhomeluxury.html"><img
                                                            src="https://dhomesluxury.com/uploads/images/san-pham-1209437107.jpg"
                                                            class="img-fluid" width="100%"
                                                            alt="Thiết kế nội thất Ecopark căn hộ 3009 bởi D.HOMELUXURY"></a>
                                                </div>
                                                <div class="info">
                                                    <h3><a href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-can-ho-douplex/thiet-ke-noi-that-ecopark-can-ho-3009-boi-dhomeluxury.html"
                                                            title="Thiết kế nội thất Ecopark căn hộ 3009 bởi D.HOMELUXURY">Thiết
                                                            kế nội thất Ecopark căn hộ 3009 bởi D.HOMELUXURY</a></h3>
                                                    <div class="linea">
                                                        <p>Với mong muốn của chủ nh&agrave; l&agrave; sử dụng những gam
                                                            m&agrave;u nhẹ nh&agrave;ng để kh&ocirc;ng gian căn
                                                            nh&agrave;
                                                            tr&ocirc;ng s&aacute;ng sủa, rộng r&atilde;i hơn n&ecirc;n
                                                            <em>D.HOMELUXURY</em> đ&atilde; kết hợp c&aacute;c m&agrave;u
                                                            sắc trung t&iacute;nh như trắng, m&agrave;u kem, m&agrave;u
                                                            x&aacute;m, &aacute;nh đ&egrave;n v&agrave;ng để tạo
                                                            n&ecirc;n
                                                            một tổng thể nền n&atilde;, dễ chịu. Song vẫn c&oacute; những
                                                            điểm nhấn nhất định.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-big">
                                <div class="big wow fadeIn" data-wow-delay="2s">
                                    <div class="avarta">
                                        <a
                                            href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-nha-pho/thiet-ke-nha-pho-cao-cap-nha-chi-mai-boi-dhomeluxury.html"><img
                                                src="https://dhomesluxury.com/uploads/images/san-pham-526062640.jpg"
                                                class="img-fluid" width="100%"
                                                alt="Thiết kế nhà phố cao cấp Nhà Chị Mai bởi D.HOMELUXURY"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a
                                                href="https://dhomesluxury.com/chi-tiet/thiet-ke-noi-that/thiet-ke-noi-that-nha-pho/thiet-ke-nha-pho-cao-cap-nha-chi-mai-boi-dhomeluxury.html">Thiết
                                                kế nhà phố cao cấp Nhà Chị Mai bởi D.HOMELUXURY</a>
                                        </h3>
                                        <div class="linea">
                                            <p>Với mong muốn của chủ nh&agrave; l&agrave; sử dụng những gam m&agrave;u
                                                nhẹ
                                                nh&agrave;ng để kh&ocirc;ng gian căn nh&agrave; tr&ocirc;ng s&aacute;ng
                                                sủa,
                                                rộng r&atilde;i hơn n&ecirc;n <em>D.HOMELUXURY</em> đ&atilde; kết hợp
                                                c&aacute;c m&agrave;u sắc trung t&iacute;nh như trắng, m&agrave;u kem,
                                                m&agrave;u x&aacute;m, &aacute;nh đ&egrave;n v&agrave;ng để tạo n&ecirc;n
                                                một tổng thể nền n&atilde;, dễ chịu. Song vẫn c&oacute; những điểm nhấn
                                                nhất
                                                định.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="box-news" class="aaa">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h2><span>Tin tức</span></h2>
                    </div>
                    <div class="swiper-container slide-news">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="https://dhomesluxury.com/tin-tuc/chi-tiet/phong-thuy-nha-o-la-gi-sap-xep-dung-cach-meo-hay-va-huong-hoa-giai.html"
                                            title="Phong thủy nhà ở là gì. Sắp xếp đúng cách., mẹo hay và hướng hóa giải"><img
                                                src="http://dhomeluxury.com/uploads/images/phong-thuy-nha-o-la-gì.-sap-xep-dung-cach.,-meo-hay-va-huong-hoa-giai-1178292078.jpg"
                                                class="img-fluid" width="100%"
                                                alt="Phong thủy nhà ở là gì. Sắp xếp đúng cách., mẹo hay và hướng hóa giải"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="https://dhomesluxury.com/tin-tuc/chi-tiet/phong-thuy-nha-o-la-gi-sap-xep-dung-cach-meo-hay-va-huong-hoa-giai.html"
                                                title="Phong thủy nhà ở là gì. Sắp xếp đúng cách., mẹo hay và hướng hóa giải">Phong
                                                thủy nhà ở là gì. Sắp xếp đúng cách., mẹo hay và hướng hóa giải</a>
                                        </h3>
                                        <div class="date">
                                            01/08/2022
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">D.HOMELUXURY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="https://dhomesluxury.com/tin-tuc/chi-tiet/phong-cach-thiet-ke-noi-that-dia-trung-hai-khai-niem-dac-trung-va-bo-tri.html"
                                            title="Phong cách thiết kế nội thất Địa Trung Hải: Khái niệm, đặc trưng và bố trí"><img
                                                src="https://dhomesluxury.com/uploads/images/phong-cach-thiet-ke-noi-that-dịa-trung-hai:-khai-niem,-dac-trung-va-bo-trí-1755521118.jpg"
                                                class="img-fluid" width="100%"
                                                alt="Phong cách thiết kế nội thất Địa Trung Hải: Khái niệm, đặc trưng và bố trí"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="https://dhomesluxury.com/tin-tuc/chi-tiet/phong-cach-thiet-ke-noi-that-dia-trung-hai-khai-niem-dac-trung-va-bo-tri.html"
                                                title="Phong cách thiết kế nội thất Địa Trung Hải: Khái niệm, đặc trưng và bố trí">Phong
                                                cách thiết kế nội thất Địa Trung Hải: Khái niệm, đặc trưng và bố trí</a>
                                        </h3>
                                        <div class="date">
                                            01/08/2022
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">D.HOMELUXURY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="https://dhomesluxury.com/tin-tuc/chi-tiet/8-do-noi-that-cho-phong-khach-giup-thiet-ke-noi-that-biet-thu-dep-doc-dao.html"
                                            title="8 đồ nội thất cho phòng khách giúp thiết kế nội thất biệt thự đẹp, độc đáo"><img
                                                src="https://dhomesluxury.com/uploads/images/8-do-noi-that-cho-phong-khach-giup-thiet-ke-noi-that-biet-thu-dep,-doc-dao-1646587608.jpg"
                                                class="img-fluid" width="100%"
                                                alt="8 đồ nội thất cho phòng khách giúp thiết kế nội thất biệt thự đẹp, độc đáo"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="https://dhomesluxury.com/tin-tuc/chi-tiet/8-do-noi-that-cho-phong-khach-giup-thiet-ke-noi-that-biet-thu-dep-doc-dao.html"
                                                title="8 đồ nội thất cho phòng khách giúp thiết kế nội thất biệt thự đẹp, độc đáo">8
                                                đồ nội thất cho phòng khách giúp thiết kế nội thất biệt thự đẹp, độc
                                                đáo</a>
                                        </h3>
                                        <div class="date">
                                            01/08/2022
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">D.HOMELUXURY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="https://dhomesluxury.com/tin-tuc/chi-tiet/nhung-dieu-can-luu-y-khi-bo-tri-he-thong-dien-trong-thiet-ke-nha-pho.html"
                                            title="Những điều cần lưu ý khi bố trí hệ thống điện trong thiết kế nhà phố"><img
                                                src="https://dhomesluxury.com/uploads/images/nhung-dieu-can-luu-ý-khi-bo-trí-he-thong-dien-trong-thiet-ke-nha-pho-2036006828.jpg"
                                                class="img-fluid" width="100%"
                                                alt="Những điều cần lưu ý khi bố trí hệ thống điện trong thiết kế nhà phố"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="https://dhomesluxury.com/tin-tuc/chi-tiet/nhung-dieu-can-luu-y-khi-bo-tri-he-thong-dien-trong-thiet-ke-nha-pho.html"
                                                title="Những điều cần lưu ý khi bố trí hệ thống điện trong thiết kế nhà phố">Những
                                                điều cần lưu ý khi bố trí hệ thống điện trong thiết kế nhà phố</a>
                                        </h3>
                                        <div class="date">
                                            01/08/2022
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">D.HOMELUXURY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="https://dhomesluxury.com/tin-tuc/chi-tiet/7-y-tuong-trang-tri-tuong-phong-phong-khach-khi-thiet-ke-noi-that-nha-pho-dep.html"
                                            title="7 ý tưởng trang trí tường phòng phòng khách khi thiết kế nội thất nhà phố đẹp"><img
                                                src="https://dhomesluxury.com/uploads/images/7-ý-tuong-trang-trí-tuong-phong-khach-khi-thiet-ke-noi-that-nha-pho-dep-1589629593.jpg"
                                                class="img-fluid" width="100%"
                                                alt="7 ý tưởng trang trí tường phòng phòng khách khi thiết kế nội thất nhà phố đẹp"></a>
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <a href="https://dhomesluxury.com/tin-tuc/chi-tiet/7-y-tuong-trang-tri-tuong-phong-phong-khach-khi-thiet-ke-noi-that-nha-pho-dep.html"
                                                title="7 ý tưởng trang trí tường phòng phòng khách khi thiết kế nội thất nhà phố đẹp">7
                                                ý tưởng trang trí tường phòng phòng khách khi thiết kế nội thất nhà phố
                                                đẹp</a>
                                        </h3>
                                        <div class="date">
                                            01/08/2022
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">D.HOMELUXURY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="avarta"><a
                                            href="https://dhomesluxury.com/tin-tuc/chi-tiet/phong-cach-wabi-sabi.html"
                                            title="Phong cách Wabi Sabi"><img
                                                src="https://dhomesluxury.com/uploads/images/phong-cach-wabi-sabi-1045631130.jpg"
                                                class="img-fluid" width="100%" alt="Phong cách Wabi Sabi"></a></div>
                                    <div class="info">
                                        <h3>
                                            <a href="https://dhomesluxury.com/tin-tuc/chi-tiet/phong-cach-wabi-sabi.html"
                                                title="Phong cách Wabi Sabi">Phong cách Wabi Sabi</a>
                                        </h3>
                                        <div class="date">
                                            01/08/2022
                                        </div>
                                        <div class="desc">
                                            <p style="text-align: justify;">D.HOMELUXURY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"><a href="javascript:0"><img
                                    src="https://dhomesluxury.com/frontend/images/right1.png" class="img-fluid"
                                    alt="Trang chủ"></a></div>
                        <div class="swiper-button-prev"><a href="javascript:0"><img
                                    src="https://dhomesluxury.com/frontend/images/left1.png" class="img-fluid"
                                    alt="Trang chủ"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="box-baochi">
            <div class="container">
                <div class="title">
                    <h2><span>Đối tác</span></h2>
                </div>
                <div class="swiper-container slide-partner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="2020" class="seoquake-nofollow">
                                        <img src="{{ asset('frontend/images/doi-tac-1870750298.png') }}"
                                            class="img-fluid" alt="2020">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="" class="seoquake-nofollow">
                                        <img src="{{ asset('frontend/images/doi-tac-2011999575.png') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="" class="seoquake-nofollow">
                                        <img src="{{ asset('frontend/images/doi-tac-1902727625.png') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="" class="seoquake-nofollow">
                                        <img src="{{ asset('frontend/images/doi-tac-1442292892.png') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="" class="seoquake-nofollow">
                                        <img src="{{ asset('frontend/images/doi-tac-2011999575.png') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="avarta d-flex justify-content-center">
                                    <a rel="nofollow" target="_blank" href="" class="seoquake-nofollow">
                                        <img src="{{ asset('frontend/images/doi-tac-1442292892.png') }}"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
