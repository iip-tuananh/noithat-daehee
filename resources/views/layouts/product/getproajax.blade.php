@foreach ($product as $item)
<li class="products-block">
    <a href="{{route('detailProduct',['id'=>$item->id])}}" class="product-link">
    @php
        $img = json_decode($item->images);
    @endphp
    <img class="img-responsive" src="{{$img[0]}}"
        alt="">
    <div class="info-wrapper">
        <h2 class="product-title">{{languageName($item->name)}}</h2>
        <span class="price">{{number_format($item->price)}}đ</span>
    </div>
    </a>
    <div class="btn-add-to-cart">
    <a href="javascript:;" class="btn cart-btn" onclick="addToCart({{$item->id}},1)">Đặt món</a>
    </div>
</li>
@endforeach
