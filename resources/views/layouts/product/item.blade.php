
<article class="list-product">
   @php
         $img = json_decode($pro->images);
   @endphp
   <div class="img-block">
      <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}" class="thumbnail">
      <img class="first-img" src="{{$img[0]}}" alt="" />
      <img class="second-img" src="{{$img[1]}}" alt="" />
      </a>
   </div>
   @if ($pro->discount > 0)
   <ul class="product-flag">
      <li class="new">-{{$pro->discount}}%</li>
   </ul>
   @endif
   <div class="product-decs">
      <a class="inner-link" href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}"><span>{{languageName($pro->name)}}</span></a>
      <div class="pricing-meta">
         @if ($pro->price > 0)
            <ul>
               @if ($pro->discount > 0)
               <li class="old-price">{{number_format($pro->price)}}đ</li>
               <li class="current-price">{{number_format($pro->price-($pro->price*($pro->discount/100)))}}đ</li>
               @else
               <li class="current-price">{{number_format($pro->price)}}đ</li>
               @endif
            </ul>
         @else 
             <ul>
               <li class="current-price">Liên hệ</li>
            </ul>
            @endif
            {!!languageName($pro->description)!!}
     </div>
   </div>
   <div class="add-to-link">
      <ul>
         <li class="cart">
            <input type="hidden"  id="inputqty" value="1">
            <a class="cart-btn" href="javascript:;" onclick="addToCart({{$pro->id}},1)">Thêm giỏ hàng</a
               ></li>
      </ul>
   </div>
</article>