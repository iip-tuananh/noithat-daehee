@extends('layouts.main.master')
@section('title')
Đặt bàn tại Lynh
@endsection
@section('description')
Bún đậu mắm tôm Lynh
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('content')
<div class="breadcrumb-area">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="breadcrumb-content">
                   <ul class="nav">
                       <li><a href="index.html">Trang chủ</a></li>
                       <li>Hoàn tất đặt hàng</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="checkout-area mt-60px mb-40px">
   <div class="container">
      <form method="post" action="{{route('postBill')}}">
         @csrf
       <div class="row">
           <div class="col-lg-7">
               <div class="billing-info-wrap">
                   <h3>Thông tin đặt hàng</h3>
                   <div class="row">
                       <div class="col-lg-12 col-md-12">
                           <div class="billing-info mb-20px">
                               <label>Họ và tên</label>
                               <input type="text" name="billingName" required>
                           </div>
                       </div>
                       <div class="col-lg-12">
                           <div class="billing-info mb-20px">
                               <label>Địa chỉ</label>
                               <input type="text" name="billingAddress" required>
                           </div>
                       </div>
                       <div class="col-lg-12 col-md-12">
                           <div class="billing-info mb-20px">
                               <label>Phone</label>
                               <input type="text" name="billingPhone" required>
                           </div>
                       </div>
                       <div class="col-lg-12 col-md-12">
                           <div class="billing-info mb-20px">
                               <label>Lời nhắn</label>
                               <textarea class="form-control" rows="4" name="note"></textarea>
                           </div>
                       </div>
                        <button type="submit" class="btn btn-default">Đặt hàng</button>
                   </div>
               </div>
           </div>
           <div class="col-lg-5 mt-md-30px mt-lm-30px ">
               <div class="your-order-area">
                  @php $total = 0; $qty = 0 ; @endphp
                  @foreach((array) session('cart') as $id => $details)
                           @php 
                           $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
                           $qty += $details['quantity'] ;
                           @endphp
                  @endforeach
                   <h3>Đơn hàng của bạn</h3>
                   <div class="your-order-wrap gray-bg-4">
                       <div class="your-order-product-info">
                           <div class="your-order-top">
                               <ul>
                                   <li>Product</li>
                                   <li>Total</li>
                               </ul>
                           </div>
                           <div class="your-order-middle">
                               <ul>
                                 @foreach ($cart as $id => $details)
                                   <li><span class="order-middle-left">{{ languageName($details['name']) }} X {{$details['quantity']}}</span> <span class="order-price">{{ number_format(($details['price'] - ($details['price']*($details['discount']/100)))*$details['quantity']) }}₫ </span></li>
                                 @endforeach
                               </ul>
                           </div>
                           <div class="your-order-total">
                               <ul>
                                   <li class="order-total">Tổng</li>
                                   <li>{{number_format($total)}}</li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   
               </div>
           </div>
       </div>
      </form>
   </div>
</div>

@endsection