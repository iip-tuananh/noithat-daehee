@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-content">
					<ul class="nav">
						<li><a href="{{route('home')}}">Trang chủ</a></li>
						<li>Kết quả tìm kiếm</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 </div>
 <div class="shop-category-area mt-30px">
	<div class="container">
	   <div class="row">
		  <div class="col-lg-12 col-md-12">
			 <!-- Shop Top Area Start -->
			 {{-- <div class="shop-top-bar d-flex"> --}}
				@if (count($resultPro)>0)
				<h3>Tìm thấy <strong>{{$countproduct}}</strong> kết quả với từ khóa <strong>"{{$keyword}}"</h3>
				@else
				<h3>Không tìm thấy kết quả với từ khóa <strong>"{{$keyword}}"</h3>
				@endif
			 {{-- </div> --}}
			 <!-- Shop Top Area End -->
			 <!-- Shop Bottom Area Start -->
			 <div class="shop-bottom-area mt-35">
				<!-- Shop Tab Content Start -->
				<div class="tab-content jump">
				   <!-- Tab One Start -->
				   <div id="shop-1" class="tab-pane active">
					  <div class="row responsive-md-class">
						@foreach ($resultPro as $pro)
						@php
						$img = json_decode($pro['images']);
						@endphp
						 <div class="col-xl-3 col-md-4 col-sm-6">
							<article class="list-product">
								<div class="img-block">
								   <a href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}" class="thumbnail">
								   <img class="first-img" src="{{$img[0]}}" alt="" />
								   <img class="second-img" src="{{$img[1]}}" alt="" />
								   </a>
								</div>
								@if ($pro['discount'] > 0)
								<ul class="product-flag">
								   <li class="new">-{{$pro['discount']}}%</li>
								</ul>
								@endif
								<div class="product-decs">
								   <a class="inner-link" href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'type'=>$pro['type_slug'] ? $pro['type_slug'] : 'loai','id'=>$pro['slug']])}}"><span>{{languageName($pro['name'])}}</span></a>
								   <div class="pricing-meta">
									  @if ($pro['price'] > 0)
										 <ul>
											@if ($pro['discount'] > 0)
											<li class="old-price">{{number_format($pro['price'])}}đ</li>
											<li class="current-price">{{number_format($pro['price']-($pro['price']*($pro['discount']/100)))}}đ</li>
											@else
											<li class="current-price">{{number_format($pro['price'])}}đ</li>
											@endif
										 </ul>
									  @else 
										  <ul>
											<li class="current-price">Liên hệ</li>
										 </ul>
										 @endif
										 {!!languageName($pro['description'])!!}
								  </div>
								</div>
								<div class="add-to-link">
								   <ul>
									  <li class="cart">
										 <input type="hidden"  id="inputqty" value="1">
										 <a class="cart-btn" href="javascript:;" onclick="addToCart({{$pro['id']}},1)">Thêm giỏ hàng</a
											></li>
								   </ul>
								</div>
							 </article>
						 </div>
						 @endforeach
					  </div>
				   </div>
				   
				   <!-- Tab One End -->
				</div>>
			 </div>
			 <!-- Shop Bottom Area End -->
		  </div>
	   </div>
	</div>
 </div>
@endsection