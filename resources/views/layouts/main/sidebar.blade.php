<div class="sidebar ">
    <div class="widget widget-categories">
       <div class="widget-title">
          <h3>Danh mục sản phẩm<span></span></h3>
       </div>
       <ul class="cat-list style1 widget-content">
        @foreach ($categoryhome as $item)
          <li >
             <span ><a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a></span>
             @if (count($item->typeCate) > 0)
             <ul class="cat-child" style="display:block">
                @foreach ($item->typeCate as $i)
                <li>
                   <span><a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$i->slug])}}">{{languageName($i->name)}}</a></span>
                   @if ( count($i->typetwo) > 0)
                   <ul class="cat-child-2">
                       @foreach ($i->typetwo as $tt)
                        <li>
                            <a href="{{route('allListTypeTwo',['danhmuc'=>$item->slug,'loaidanhmuc'=>$i->slug,'thuonghieu'=>$tt->slug])}}" title="">{{languageName($tt->name)}}</a>
                        </li>
                       @endforeach
                    </ul>
                   @endif
                   
                </li>
                @endforeach
             </ul>
             @endif
          </li>
          @endforeach
       </ul><!-- /.cat-list -->
    </div>
 </div><!-- /.sidebar -->