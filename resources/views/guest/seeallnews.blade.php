@extends('layouts.user')
@section('content')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/misc/favicon.png">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Universal - News
  </title>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
  <!-- Preloader-->

  <!-- Navigation-->
  <!-- Header-->
  <header data-background="news.jpg" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
      <h1 class="no-pad">News</h1>
      <h4>Latest news</h4>
    </div>
  </header>
  <!-- News Block-->
  <section id="news" class="section-small">
    <div class="container">
      <h3 class="pull-left">News</h3>
      <div class="pull-right">
        <h4>OUR LATEST NEWS</h4>
      </div>
      <div class="clearfix"></div>
      <div class="row grid-pad">
        @foreach($mobils as $data)
        <div class="col-sm-6 col-md-4"><a href="{{route('show.show',$data->slug)}}"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block"/>
         <h5>{{$data->nama_mobil}}</h5></a>
         <p>{!! substr($data->deskripsi,0,200)."..." !!}</p>
         <a href="{{route('show.show',$data->slug)}}" class="btn btn-gray btn-xs">Read more</a>
       </div>
       @endforeach
     </div>
   </div>
 </section>
 <!-- Pagination-->
 <div class="section section-small bg-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <nav>
          <ul class="pagination">
            {!! str_replace('/?', '?', $mobils->render()); !!}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Action Section-->
<div class="section action section-small bg-gray2">
  <div class="container wow fadeIn">
    <div class="row">
      <div class="col-md-10">
        <h3 class="no-pad">Share your passion with the world!</h3>
      </div>
      <div class="col-md-2 text-right"><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark wow fadeInDown">Get Started</a></div>
    </div>
  </div>
</div>
<!-- Footer Section-->
@include('layouts.footer')
</body>
@endsection