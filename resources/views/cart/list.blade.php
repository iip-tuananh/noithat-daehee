@extends('layouts.main.master')
@section('title')
Giỏ hàng của bạn
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
                       <li><a href="{{route('home')}}">Trang chủ</a></li>
                       <li>Giỏ hàng</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="cart-main-area mtb-60px">
   <div class="container">
       <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
       <div class="row">
           <div class="col-lg-8 col-md-8 col-sm-12 col-12">
               <form action="#">
                   <div class="table-content table-responsive cart-table-content">
                       <table>
                           <thead>
                               <tr>
                                   <th>Ảnh</th>
                                   <th>Thông tin sản phẩm</th>
                                   <th>Đơn giá</th>
                                   <th>Số lượng</th>
                                   <th>Thành tiền</th>
                                   <th>Hành động</th>
                               </tr>
                           </thead>
                           @php $total = 0; $qty = 0 ; @endphp
                           @foreach((array) session('cart') as $id => $details)
                                    @php 
                                    $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
                                    $qty += $details['quantity'] ;
                                    @endphp
                           @endforeach
                           <tbody class="cartlist">
                              @foreach ($cart as $id => $details)
                               <tr>
                                   <td class="product-thumbnail">
                                       <a href="javascript:;"><img class="img-responsive" src="{{ url(''.$details['image']) }}" alt=""></a>
                                   </td>
                                   <td class="product-name"><a href="">{{ languageName($details['name']) }}</a></td>
                                   <td class="product-price-cart"><span class="amount">{{ number_format($details['price'] - ($details['price']*($details['discount']/100))) }}₫</span></td>
                                   <td class="product-quantity">
                                       <div class="cart-plus-minus">
                                          <div class="dec qtybutton" onclick="qtyminus({{$details['idpro']}})">-</div>
                                          <input class="cart-plus-minus-box" id="quantity-{{$details['idpro']}}" type="text" name="qtybutton" value="{{$details['quantity']}}">
                                          <div class="inc qtybutton" onclick="qtyplus({{$details['idpro']}})">+</div>
                                       </div>
                                   </td>
                                   <td class="product-subtotal cartprice-{{$id}}">{{ number_format(($details['price'] - ($details['price']*($details['discount']/100)))*$details['quantity']) }}₫</td>
                                   <td class="product-remove">
                                       <a href="javascript:;" onclick="removeCart({{$details['idpro']}})"><i class="icon-close"></i></a>
                                   </td>
                               </tr>
                               @endforeach
                           </tbody>
                       </table>
                   </div>
               </form>
           </div>
           <div class="col-lg-4 col-md-12 mt-md-30px">
            <div class="grand-totall">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gary-cart">Tổng</h4>
                </div>
                <h5>Tổng tiền <span class="total-price">{{number_format($total)}}₫</span></h5>
                <a href="javascript:;" onclick="location.href='/thanh-toan.html'">Thanh toán</a>
            </div>
        </div>
       </div>
   </div>
</div>
@endsection