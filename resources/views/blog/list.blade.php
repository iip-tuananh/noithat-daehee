@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<main id="w-cate" class="">
    <section id="breadcrumbs">
       <div class="container">
          <div class="content">
             <ul class="list-inline">
                <li class="list-inline-item"><a href="{{route('home')}}"><img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{$setting->company}}"></a></li>
                <li class="list-inline-item"><a href="{{url()->current()}}">{{$title_page}} </a></li>
             </ul>
          </div>
       </div>
    </section>
    <section id="news">
       <div class="container">
          <div class="content">
             <div class="left">
               @if (count($blog) > 0)
                <div class="new-big">
                   <div class="avarta"><a href="{{route('detailBlog',['slug'=>$blog[0]->slug])}}">
                    <img src="{{$blog[0]->image}}" class="img-fluid" width="100%" alt="{{languageName($blog[0]->title)}}"></a></div>
                   <div class="info">
                      <h2 class="tm-left"><a href="javascript:0">tin mới</a></h2>
                      <h1 class="tm-left">
                         <a href="{{route('detailBlog',['slug'=>$blog[0]->slug])}}" title="{{languageName($blog[0]->title)}}">{{languageName($blog[0]->title)}}</a>
                      </h1>
                      <div class="readnow tm-left"><a href="{{route('detailBlog',['slug'=>$blog[0]->slug])}}">xem
                         ngay <img src="{{url('frontend/images/read-right.png')}}" class="img-fluid" alt="{{languageName($blog[0]->title)}}"></a>
                      </div>
                   </div>
                </div>
                <div class="list-small" id="postPostAjax">
                  @if (count($blog) > 1)
                    @foreach ($blog as $key => $item)
                    @if ($key > 0)
                    <div class="item">
                        <div class="avarta"><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img src="{{$item->image}}" class="img-fluid" width="100%" alt="{{languageName($item->title)}}"></a></div>
                        <div class="info">
                           <h3>
                              <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{($item->title)}}">{{languageName($item->title)}}</a>
                           </h3>
                           <div class="desc">
                              <p style="text-align: justify;">{{languageName($item->description)}}</p>
                           </div>
                        </div>
                     </div>
                    @endif
                    @endforeach
                  @endif
                </div>
                {{$blog->links()}}
                @else 
                <h3>Nội dung đang cập nhật</h3>
                @endif

             </div>
             <div class="right">
                <div class="side-bar">
                   <div class="item">
                      <div class="title-side"><span>danh mục</span></div>
                      <div class="list-room">
                         <div class="row">
                            @foreach ($categoryhome as $item)
                            <div class="col-md-6 col-sm-6">
                                <div class="item-room">
                                   <div class="avarta">
                                    <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">
                                        <img src="{{$item->avatar}}" class="img-fluid" width="100%" alt="{{languageName($item->name)}}">
                                    </a>
                                   </div>
                                   <div class="info">
                                      <h3><a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" class="box first">{{languageName($item->name)}}</a>
                                      </h3>
                                   </div>
                                </div>
                             </div>
                            @endforeach
                         </div>
                      </div>
                   </div>
                   <div class="item">
                      <div class="title-side"><span>Bài viết mới nhất</span></div>
                      <div class="list-read">
                        @foreach ($blognew as $item)
                        <div class="item-read">
                            <div class="avarta"><a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img src="{{($item->image)}}" class="img-fluid" width="100%" alt="{{languageName($item->title)}}"></a>
                            </div>
                            <div class="info">
                               <h3>
                                  <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                               </h3>
                            </div>
                         </div>
                        @endforeach
                      </div>
                   </div>
                   <div class="item">
                      <div class="list-part">
                         <div class="row">
                            @foreach ($partner as $item)
                            <div class="col-md-6">
                                <div class="avarta">
                                    <a rel="nofollow" target="_blank" href="{{$item->link}}">
                                        <img src="{{$item->image}}" class="img-fluid" alt="{{$item->image}}"></a></div>
                             </div>
                            @endforeach
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
 </main>
@endsection