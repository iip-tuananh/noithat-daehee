<footer class="footer-hb">
   <div class="click-top"> <a href="javascript:0"><i class="fa fa-angle-double-up"></i></a> </div>
   <div class="container">
      <div class="content">
         <div class="logo">
            <a href="{{route('home')}}">
               <img width="150" src="{{ $setting->logo }}" class="img-fluid" alt="{{$setting->logo}}">
            </a>
         </div>
         <div class="info-footer">
            <div class="row">
               <div class="col-lg-5">
                  <div class="item">
                     <div class="name">{{$setting->company}}</div>
                     <div class="list-place">
                        <p>
                           <img src="{{url('frontend/images/place1.png')}}" class="img-fluid" alt="Địa chỉ">Địa chỉ: {{$setting->address1}}</p>
                        <p><img src="{{url('frontend/images/place2.png')}}" class="img-fluid" alt="Số điện thoại">Hotline: {{$setting->phone1}}</p>
                        <p><img src="{{url('frontend/images/place3.png')}}" class="img-fluid" alt="Email">{{$setting->email}}</p>
                        <p><img src="{{url('frontend/images/place4.png')}}" class="img-fluid" alt="Website">{{route('home')}}</p>
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
   <div class="reserved"> <span>© Nội thất DAEHEE Design 2022. Design by <a href="https://sbtsoftware.vn/">SBT Software</a></span> </div>
</footer>