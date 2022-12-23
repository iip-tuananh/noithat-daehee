@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="w-cate" class="">
    <section id="breadcrumbs">
       <div class="container">
          <div class="content">
             <ul class="list-inline">
                <li class="list-inline-item"><a href="{{route('home')}}">
                   <img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{route('home')}}"></a>
                </li>
                <li class="list-inline-item"><span>{{$pagecontentdetail->title}}</span></li>
             </ul>
          </div>
       </div>
    </section>
    <section id="news" style="margin-bottom: 30px;">
       <div class="container">
          <div class="content content-new-detail">
             <div class="info-details aa">
                 {!!($pagecontentdetail->content)!!}
             </div>
          </div>
       </div>
    </section>
 </main>
@endsection