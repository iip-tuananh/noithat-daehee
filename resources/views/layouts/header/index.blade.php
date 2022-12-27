<header style="background: ">
    <div class="header-menu">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ $setting->logo }}" style="height: 70px;" class="img-fluid logo-scr"
                                    alt="{{ $setting->company }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <ul>
                            <li class="">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="">
                                <a href="{{ route('aboutUs') }}">Giới thiệu</a>
                            </li>
                            <li class="pages-services">
                                <a href="{{ route('allProduct') }}">Thiết kế nội thất</a>
                                <ul>
                                    @foreach ($categoryhome as $cate)
                                        <li>
                                            <a
                                                href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}">{{ languageName($cate->name) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @foreach ($blogCate as $cate)
                                <li class="pages-news">
                                    <a
                                        href="{{ route('listCateBlog', ['slug' => $cate->slug]) }}">{{ languageName($cate->name) }}</a>
                                </li>
                            @endforeach
                            <li class="">
                                <a href="{{ route('lienHe') }}">Liên hệ</a>
                            </li>
                            {{-- <li>
                                <a href="javascript:0">
                                    <img src="{{ url('frontend/images/search.png') }}" class="img-fluid"
                                        alt="{{ $setting->company }}">
                                </a>
                                <div class="search">
                                    <form action="https://dhomesluxury.com/ket-qua-tim-kiem" method="post">
                                        <input type="hidden" name="_token"
                                            value="UH44csGCVA1GMO1ax6MkmGzhUBFs2XZsWCD9z8ru"> <input type="text"
                                            class="form-control" name="keyword" placeholder="Tìm kiếm ...">
                                    </form>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-mobile" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-9 col-sm-9">
                    <div class="logo"><a href="{{ route('home') }}">
                            <img src="{{ $setting->logo }}" class="img-fluid avarta-logo"
                                alt="{{ $setting->company }}"></a>
                    </div>
                </div>
                <div class="col-md-3 col-3 col-sm-3">
                    <div class="header"><a href="#menu"><i class="fa fa-bars"></i></a></div>
                </div>
            </div>
        </div>
        <nav id="menu">
            <ul>
                {{-- <li>
                    <form action="https://dhomesluxury.com/ket-qua-tim-kiem" method="post">
                        <input type="hidden" name="_token" value="UH44csGCVA1GMO1ax6MkmGzhUBFs2XZsWCD9z8ru"> <input
                            type="text" class="form-control" name="keyword" placeholder="Tìm kiếm ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li> --}}
                <li><a href="{{ route('home') }}">Trang chủ</a> </li>
                <li><a href="{{ route('aboutUs') }}">Giới thiệu</a> </li>
                <li>
                    <a href="{{ route('allProduct') }}">Thiết kế nội thất</a>
                    <ul>
                        @foreach ($categoryhome as $cate)
                            <li>
                                <a
                                    href="{{ route('allListProCate', ['danhmuc' => $cate->slug]) }}">{{ languageName($cate->name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @foreach ($blogCate as $blCate)
                    <li>
                        <a
                            href="{{ route('listCateBlog', ['slug' => $cate->slug]) }}">{{ languageName($blCate->name) }}</a>
                    </li>
                @endforeach
                <li><a href="{{ route('lienHe') }}">Liên hệ</a> </li>
            </ul>
        </nav>
    </div>
</header>
