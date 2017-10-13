@extends('layouts.user')
@section('content')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
  <script id="dsq-count-scr" src="//honpas-com-1.disqus.com/count.js" async></script>
  <!-- Preloader-->
  
  <!-- Navigation-->
  
  <!-- Header-->
  <header data-background="/img/{{$mobile->cover}}" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h4>Home / Latest news / {{ date('d F, Y', strtotime($mobile->created_at)) }}</h4>
            <h2>{{$mobile->nama_mobil}}</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="news-single" class="section-small">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>Ketahuilah kabar kabar ter up to date dari kami di Honda Pasteur</p>
          <h4>{{$mobile->nama_mobil}}</h4>
          @if($potoa->count()>0)
          <div id="carousel-news" class="carousel slide carousel-fade">
            <ol class="carousel-indicators indicators-inside">
              <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-news" data-slide-to="1"></li>
              <li data-target="#carousel-news" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              @foreach($potoa as $data)
              <div class="item active"><img src="/img/img1/{{$data->cover}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="/img/img2/{{$data->cover2}}" alt="" class="img-responsive"></div>
              <div class="item"><img src="/img/img3/{{$data->cover3}}" alt="" class="img-responsive"></div>
              @endforeach
            </div><a href="#carousel-news" data-slide="prev" class="left carousel-control"><span class="icon-prev"></span></a><a href="#carousel-news" data-slide="next" class="right carousel-control"><span class="icon-next"></span></a>
          </div>
          @endif
          @if($potoa->count()<=0)
          {{-- Dikosongkan --}}
          @endif
          <blockquote class="no-pad"> <font size="40ps"> {{$mobile->nama_mobil}} </font></blockquote>
          <p>{!!$mobile->deskripsi!!}</p>
          <blockquote> <h5> Honda Memberikan Pelayanan Yang Penuh Untuk Anda </h5> </blockquote>
          <p></a>
          </p>
          <ul>
            <li>{!!$mobile->spesifikasi!!}</li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>

        </div>
        <div class="col-md-3 col-md-offset-1">
          <h4>search</h4>
          <form action="search_code" method="post" class="form-inline subscribe-form">
            <div class="input-group input-group-lg">
              <input name="search_code" name="search" placeholder="Search..." class="form-control"><span class="input-group-btn">
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
              <button name="Submit" type="submit" name="search" class="btn btn-dark"><i class="fa fa-search fa-lg"></i></button></span>
            </div>
          </form>
          <hr>
          <h4>Model</h4>
          <ul class="list-unstyled">
            @foreach($modell as $data)       
            <li>
              <a href="{{route('showperkategori', $data->id)}}">{!! $data->nama_model !!}</a></li>
              @endforeach
            </ul>
            <hr>
            <hr>
          </div>
        </div>
      </div>
    </section>
    <section class="section-small bg-white">
      <div class="container grid-pad">
        <h3>Recent News</h3>
        <div class="row">
          @foreach($mobil as $data)
          <div class="col-sm-6 col-md-3"><a href="{{route('show.show',$data->slug)}}"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block"/>
            <h5>{{$data->nama_mobil}}</h5></a>
            <p>{!! substr($data->deskripsi,0,200)."..." !!}</p>
            <a class="btn btn-default" href="{{route('show.show',$data->slug)}}">Read more</a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div id="disqus_thread"></div>
            <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
  var d = document, s = d.createElement('script');
  s.src = 'https://honpas-com-1.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>
</div>
</div>
</section>
<div class="section section-small">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav>
          <ul class="pager">
            {{-- <li class="previous"><a href="portfolio-single.html" class="text-muted"><span aria-hidden="true"></span><i class="fa fa-angle-left"></i> PREVIOUS</a></li> --}}
            <li><a href="/portfolio"><i class="fa ion-grid fa-2x"></i></a></li>
            {{-- <li class="next"><a href="/port" class="text-muted">NEXT <span aria-hidden="true"></span><i class="fa fa-angle-right"></i></a></li> --}}
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section-->
@include('layouts.footer')
</body>

<!-- Mirrored from forbetterweb.com/html/universal/news-single-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2017 13:20:01 GMT -->
@endsection