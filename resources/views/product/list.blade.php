@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<main>
    <section id="banner-cate">
       <div class="avarta">
        <img data-src="{{ isset($cateno) ? $cateno->imagehome : $banner[0]->image}}" class="img-fluid lazyloaded" width="100%" alt="{{$title}}" src="{{ isset($cateno) ? $cateno->imagehome : $banner[0]->image}}">
       </div>
    </section>
    <section id="service">
       <div class="container">
          <div class="content">
             <div class="title">
                <h2><span>{{$title}}</span></h2>
             </div>
             <div class="desc-title">
                <div id="service">
                   <div class="list-service list-ct list-tk">
                      <div class="container">
                         <div class="row">
                            @if (count($list)>0)
                            @foreach ($list as $item)
                            @php
                                $img = json_decode($item->images);
                            @endphp
                            <div class="col-md-4">
                                <div class="item">
                                    <div class="avarta">
                                        <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'slug'=>$item->slug])}}" target="_blank">
                                            <img class="img-fluid lazyload" alt="{{languageName($item->name)}}" width="100%" data-src="{{$img[0]}}">
                                        </a>
                                    </div>
                                    <div class="info">
                                      <p><strong>{{languageName($item->name)}}</strong></p>
                                      <div class="line3">{!!languageName($item->description)!!}</div>
                                    </div>
                                </div>
                             </div>
                            @endforeach
                            @else
                            <h3>Nội dung đang cập nhật</h3>
                            @endif
                            
                         </div>
                      </div>
                   </div>
                </div>
                <!----------End TOP dự án----------->
             </div>
          </div>
       </div>
    </section>
 </main>
@endsection

