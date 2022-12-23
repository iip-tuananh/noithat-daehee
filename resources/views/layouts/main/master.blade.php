<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <link rel="icon" href="{{url(''.$setting->favicon)}}"
         type="image/x-icon" />
      <link rel="apple-touch-icon"
         href="{{url(''.$setting->favicon)}}">
      <meta name="robots" content="noodp,index,follow" />
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>@yield('title')</title>

      <link rel="canonical" href="{{\Request::url()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{\Request::url()}}" />
      <meta property="og:site_name" content="JicaFood" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="548" />
      <meta property="og:image:height" content="343" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!--link css-->
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/fancybox.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/style-freedom.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/jquery.mmenu.all.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/cust.css')}}"/>
      <link rel="stylesheet" href="{{asset('frontend/css/loban.css')}}"/>
      <link rel="stylesheet" href="{{asset('frontend/css/slick.min.css')}}"/>
   
      
   </head>
   <body>
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
      <div id="mm-0" class="mm-page mm-slideout">
         <div class="zalo">
               <a href="https://zalo.me/{{$setting->phone1}}">
                  <span class="before-hotline">
                  <span class="hotline-number">Zalo</span>
               </a>
         </div>
         <div class="hotline">
               <a href="tel:{{$setting->phone1}}">
                  <span class="before-hotline"><img src="{{url('frontend/images/phone-black.svg')}}" alt="" style="width: 33px;height: 26px;vertical-align: middle;"></span>
                  <span class="hotline-number">{{$setting->phone1}}</span>
               </a>
         </div>
   </div>
      <!--Link js-->
   </body>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
   <script>
      $(document).ready(function() {
         $('.active').closest('ul').closest('li').find('> a').addClass('active');
         $('.active').closest('ul').closest('ul').closest('li').find('> a').addClass('active');
      });
   </script>
   <script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/slick.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.mmenu.all.js')}}"></script>
   <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/iscroll.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/functions.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/lazysizes.min.js')}} " async></script>
   @yield('js')
   <script>
      function init() {
         var vidDefer = document.getElementsByTagName('iframe');
         for (var i=0; i<vidDefer.length; i++) {
            if(vidDefer[i].getAttribute('data-src')) {
                  vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
            } } }
      window.onload = init;
   </script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script>
      $('.avarta').click(function() {
         var src = $(this).find('.thumbnail-image').data('src');
         $('.subscription-img').html('<img src="'+src+'"class="img-responsive" alt="">');
      })
   </script>
   </body>
</html>