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
<section class="bread-crumb margin-bottom-30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">						
					<li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="/" title="Trang chủ">
							<span itemprop="name">Trang chủ</span>
							<meta itemprop="position" content="1">
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
					<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
						<strong itemprop="name">Nhận báo giá</strong>
						<meta itemprop="position" content="2">
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container contact margin-bottom-20">
	<div class="row">
		<div class="col-md-4">
			@include('layouts.main.sidebar')
		</div>
		<div class="col-md-8">
			<div class="page-login">
				<div id="login">
					<h3 class="title-head text-center">Nhập thông tin để nhận báo giá</h3>
					<span class="text-center block"></span>
					<span class="text-center margin-bottom-10 block">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
					<form accept-charset="utf-8" action="{{route('postcontact')}}" method="post" class="has-validation-callback">
						@csrf
					<div class="form-signup clearfix">
						<div class="row">
                            <input type="text" style="display:none;" name="mess" value="Đăng ký nhận báo giá">
							<div class="col-sm-6 col-xs-12">
								<fieldset class="form-group">
									<label>Họ tên<span class="required">*</span></label>
									<input type="text" name="name" id="name" class="form-control  form-control-lg" required="">
								</fieldset>
							</div>
							<div class="col-sm-6 col-xs-12">
								<fieldset class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control form-control-lg">
								</fieldset>
							</div>
							<div class="col-sm-12 col-xs-12">
								<fieldset class="form-group">
									<label>Điện thoại<span class="required">*</span></label>
									<input type="tel" name="phone" class="number-sidebar form-control form-control-lg" required="">
								</fieldset>
							</div>
							<div class="col-sm-12 col-xs-12">
								<div class="pull-xs-left" style="margin-top:20px;">
									<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
								</div> 
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection