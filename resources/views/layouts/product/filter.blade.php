@foreach ($product as $item)
<div class="col-lg-15 col-md-15 col-sm-4 col-6">
    <div class="evo-product-block-item">
        @php
            $img = json_decode($item->images);
        @endphp
        <a href="/iphone-12-pro-max-256gb-chinh-hang-vn-a" title="{{languageName($item->name)}}"
            class="product__box-image">
            <img class="lazy loaded"
                src="{{$img[0]}}"
                alt="{{languageName($item->name)}}" />
            @if ($item->discount > 0)
            <span class="sales">
                <i class="icon-flash2"></i> Giảm
                {{number_format($item->price*($item->discount/100))}}₫
            </span>
            @endif
            
        </a>
        <a href="/iphone-12-pro-max-256gb-chinh-hang-vn-a" title="{{languageName($item->name)}}"
            class="product__box-name">{{languageName($item->name)}}</a>
        @if ($item->discount > 0)
        <div class="product__box-price">
            <span class="price">{{number_format($item->price-($item->price*($item->discount/100)))}}₫</span>
            <span class="old-price">{{number_format($item->price)}}₫</span>
        </div>
        @else 
        <div class="product__box-price">
            <span class="price">{{number_format($item->price)}}₫</span>
        </div>
        @endif
        <div class="box-promotion">
            <span class="bag">KM</span>
            <div class="box-promotions">
                <p>Mua Đồng hồ thời trang giảm 40% (không kèm khuyến mãi khác).</p>
                <p>Combo phụ kiện iPhone 12 Series thời trang&nbsp;giá chỉ&nbsp;<strong>890.000đ</strong>&nbsp;(giá gốc
                    1.240.000đ)</p>
                <p>Mua&nbsp;đế sạc không dây Apple MagSafe&nbsp;giá chỉ&nbsp;<strong>1.490.000đ</strong>&nbsp;(giá gốc
                    1.650.000đ)</p>
                <p>Trade-in thu cũ lên đời tiết kiệm đến<strong>&nbsp;19,5 triệu</strong></p>
            </div>
        </div>
        <div class="product__box-btn">
            <a href="/iphone-12-pro-max-256gb-chinh-hang-vn-a" class="btn-buy" title="Chi tiết">Chi tiết</a>
            <a href="javascript:void(0)" title="Mua ngay" data-handle="iphone-12-pro-max-256gb-chinh-hang-vn-a"
                class="btn-compare js-btn-wishlist">Mua ngay</a>
        </div>
    </div>
</div>
@endforeach