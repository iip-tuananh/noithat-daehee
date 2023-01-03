<footer class="footer-hb">
   <div class="click-top"> <a href="javascript:0"><i class="fa fa-angle-double-up"></i></a> </div>
   <div class="container">
      <div class="content">
         {{-- <div class="logo">
            <a href="{{route('home')}}">
               <img width="150" src="{{ $setting->logo }}" class="img-fluid" alt="{{$setting->logo}}">
            </a>
         </div> --}}
         <div class="info-footer">
            <div class="row">
               <div class="col-lg-5">
                  <div class="item">
                     <div class="name">{{$setting->company}}</div>
                     <div class="list-place">
                        <p>
                           <img class="img-fluid" alt="Địa chỉ" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA7klEQVR4nOWUPQrCQBCFvyMIYhCsjIIHsLDwGnoFwWuod5DoBbSw9gS26g0sbAV/KwsjAyuEMMbdJFb54EHgzbxJdpJAEfCACbADHkZbYGy8TPSBGxB+kXi9LOGvhPCPXmmGeD/uPIzpClRcBkyUkDMQGF0Uf+QyYK+E1yO+rwyRxVtzjzVPlZpAWbg1p1hzoNTMYzXSY81GOSI/4jeUI5Iea8bKEi/AzEhbsvRY07T8BsKIWjiydgiXWmfaDk/RISVLi3CpSU3VvEFJv4gaGRkkDBAvFxZK+IocKQGHSPgRKJMzXeBpJNd/YWhUIN7UbagHV+DHjAAAAABJRU5ErkJggg==">
                            Địa chỉ: {{$setting->address1}}</p>
                        <p><img class="img-fluid" alt="Số điện thoại" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAABOElEQVR4nLXUvStGURwH8A9iMjDYKKOimMTEIHnJwGBSRpNS/gD+AS/xDzCwG0hISRYsFFY2yeSZKC/dOk/djnvxePjWqXu6vz73nlf+OcPYw/hfYLN4xTsKaI7en+MMy2j7DpsMULodoCKqq0Y/9rGKmjzwKANM2lSqJkEW0RH609jNQ9dzwPtUTR36sB2GXRXQlSxwLAc8TtXMozv1vBSeD9Aag8nXLjPAnlTNCLYwF/o7YfgDYSo+ZTDCntGeUZegXWFxFsIcnsrJRoTeojGqGQlDrg97trilMlOLqwi9QYMy0oLHDLSpHLQTTxF6FxahFyd4CPu04qdobziCafQl50Q1l/Kn8fCzWqGUCyWZ0+sfoIdKSLL6m19grxgqBSwmORUXEfaGmd9gxVRiFGvhlpooB/s2HxyOfc4Ew20GAAAAAElFTkSuQmCC">
                           Hotline: {{$setting->phone1}}</p>
                        <p><img class="img-fluid" alt="Email" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA20lEQVR4nO3TO0oDYRiF4Uet3IBCCskG7CSdpNE6K4hb0F1kBRZuQUSXMGCVztJKbSwtrFJYODJwEsZh0BkMNnrgwDff5R3+G/9ap7YxxkVPjzP7SZt4wjmmuOzoaWYew1hpD2X8jEmHFU3SW8YVY6Vhkgu8J77CoAU0SK1M7yLxsA1Y4BD3+X7FaZazgRO8pPaA48x8CVwe0Axvyd/GZXKz2kEUXYBL7WNe26c7HDR6ij7ASls4i6vYT4HfqfgV4O4agDvNwk1t8/v6uu1P1V0b4ainR81n98f0AWyMYaZIXXnEAAAAAElFTkSuQmCC">
                           {{$setting->email}}</p>
                        <p><img  class="img-fluid" alt="Website" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAABf0lEQVR4nMXUP0vXURTH8Rcp5CBYbQoaCWGQ/QEhBwcV3ITERVsiam1zsDWIykcgPYrcFHwAQkNTKEhIUPoTNBqi3OoXF843rpdv9tXFD5zhfs69b+7hnnM5Jw1GnFlX8Br3cQtHEcOYwavY00iTaGEPF7GGdsQqurAf+YkmsKM4vIyr+J0Bf6Efb2L9E+P/gvVgNzs8hyfZuorHeJCtW7hcB+zFVBbduF54U+F1F15vCbuARTyLWAj/YeZV8ShyC5m3GIy/ul2UdRD+h5qSX0buS+EP58DpIvkx/M+Fv40xPI/HOMxy002A5S3exaNULXQXm3XApiXnwBTvcRPrMQDHHiV1/1LEi/CfZt5SrHNgO1ptFB1naZt7NcA2fmC2BF6KJq02zdc0dllyG9+xg624xDGNxzhVozdQjF4OrPZ9QqcTNBGD34rPYTUDvg3gV9zBt6yaE5VmMzVw+qpSw6bbpE/jBq5hJPalLy4BN/4HLJUgQzV+XzT3ymmBjfUHBGiZQFk4JVgAAAAASUVORK5CYII=">
                          {{route('home')}}</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="item">
                     <div class="title-footer">chính sách</div>
                     <div class="list-pol">
                        <ul>
                           @foreach ($pageContent as $item)
                              @if($item->type == 'ho-tro-khanh-hang')
                                 <li>
                                    <a href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a>
                                 </li>
                              @endif
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="item">
                     <div class="col-item-3">
                        <div class="title-footer">Vị trí</div>
                        <div class="list-new-ft">
                           {!!$setting->iframe_map!!}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="reserved"> <span>© Nội thất DAEHEE Design 2022. Design by <a class="reserved-link" href="https://sbtsoftware.vn/">SBT Software</a></span> </div>
</footer>