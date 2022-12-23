
<div class="ajax_quick_view">
    <div class="row">
      <div class="col-md-6">
        <div class="product-image">
            @php
                $img = json_decode($product->images);
            @endphp
             <span class="pr_flash bg_green">Sale</span>
           <img id="product_img" src='{{url(''.$img[0])}}' data-zoom-image="{{url(''.$img[0])}}"/>
           <div id="pr_item_gallery" class="product_gallery_item owl-thumbs-slider owl-carousel owl-theme">
               @foreach (json_decode($product->images) as $key => $item)
               <div class="item">
                    <a href="#" class="{{$key == 0 ? 'active' : ""}}" data-image="{{url(''.$item)}}" data-zoom-image="{{url(''.$item)}}">
                        <img src="{{url(''.$item)}}" />
                    </a>
                </div>
               @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-6">
          <div class="pr_detail">
            <div class="product-description">
              <div class="product-title">
                <h4><a href="#">{{languageName($product->name)}}</a></h4>
              </div>
              <div class="product_price float-left">
                  <span class="price">{{$product->price ? number_format($product->price).'đ' : ""}}</span>
              </div>
              <div class="rating mt-2 float-right"><div class="product_rate" style="width:80%"></div></div>
              <div class="clearfix"></div>
              <hr />
              <p>{{languageName($product->description)}}</p>
            </div>
            <hr />
            <div class="cart_extra">
              <div class="cart-product-quantity">
                <div class="quantity">
                  <input type="text" step="1" min="1" name="quantity" id="inputqty" value="1" title="Qty" class="qty" size="4">
                </div>
              </div>
              <div class="cart_btn">
                  <button class="btn btn-default btn-radius btn-sm btn-addtocart" onclick="addToCart({{$product->id}},2)" type="button">Thêm vào giỏ</button>
              </div>
            </div>
            <div class="clearfix"></div>
            <hr />
            <ul class="product-meta list_none">
              <li>Danh mục: <a href="#">{{languageName($product->cate->name)}}</a></li>
            </ul>
            <div class="product_share d-block d-sm-flex align-items-center">
              <span>Chia sẻ với:</span>
                <ul class="list_none social_icons border_social rounded_social">
                      <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                </ul>
            </div>
          </div>
      </div>
  </div>
</div>

<script src="{{asset('frontend/js/shop-quick-view.js')}}"></script>
