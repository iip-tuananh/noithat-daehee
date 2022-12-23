@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main>
	<section id="banner-cate">
	   <div class="avarta"><img src="{{url('frontend/images/1650423703-lien-he-nadu-design-02.jpg')}}" class="img-fluid" width="100%" alt="">
	   </div>
	</section>
	<section id="breadcrumbs" style="padding-top: 40px;padding-bottom: 40px;">
	   <div class="container">
		  <div class="content">
			 <ul class="list-inline">
				<li class="list-inline-item"><a href="{{route('home')}}"><img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt=""></a></li>
				<li class="list-inline-item"><a href="">Liên hệ</a></li>
			 </ul>
		  </div>
	   </div>
	</section>
	<section id="contact">
	   <div class="container">
		  <div class="content">
			 <div class="row">
				<div class="col-md-6">
				   <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
					  <div class="left">
						 <div class="info">
							<h3>thông tin cá nhân</h3>
							<div class="item"><input type="text" class="form-control" placeholder="Họ và tên" name="fullname" required="">
							</div>
							<div class="item"><input type="number" class="form-control" placeholder="Số điện thoại (*)" min="1" name="phone" required=""></div>
							<div class="item"><input type="text" class="form-control" placeholder="Email" name="email" required=""></div>
						 </div>
					  </div>
				   </form>
				</div>
				<div class="col-md-6">
				   <div class="right">
					  <h3>Thông tin liên hệ</h3>
					  <div class="desc">
						 <p>{{$setting->webname}}<br>
							<strong>Địa chỉ:</strong> {{$setting->address1}}<br>
							<strong>Số điện thoại:</strong> {{$setting->phone1}}<br>
							<strong>Email:</strong> {{$setting->email}}<br>
							<strong>Thời gian làm việc:</strong> 8h - 17h30 kể cả thứ 7.
						</p>
					  </div>
					  
				   </div>
				</div>
				{!!$setting->iframe_map!!}
			 </div>
		  </div>
	   </div>
	</section>
</main>
@endsection