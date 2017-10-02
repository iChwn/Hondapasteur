@extends('layouts.user')
@section('content')

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
  <!-- Preloader-->
  <!-- Navigation-->
  <!-- Header-->
  @foreach($mobile1 as $datas)
  <header data-background="/img/{{$datas->cover}}" class="intro introhalf">
    @endforeach
    <!-- Intro Header-->
    <div class="intro-body">
      <h1>About Us</h1>
      <h4>Siapakah Kami?</h4>
    </div>
  </header>
  <!-- Slider-->
  <section id="about" class="section-small">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Siapakah Kami?</h3>
          @foreach($perusahaan as $data)
          <p class="no-pad">{!!$data->about!!}</p> 
          @endforeach
          <h2 class="classic">Team Honda Pasteur</h2>
        </div>

        <div data-wow-duration="2s" data-wow-delay=".2s" class="col-lg-5 col-lg-offset-1 wow zoomIn">
          <p>
            <div id="carousel-light2" class="carousel slide carousel-fade">
              <ol class="carousel-indicators">
                <li data-target="#carousel-light2" data-slide-to="0" class="active"></li> 
                <li data-target="#carousel-light2" data-slide-to="1"></li>
                <li data-target="#carousel-light2" data-slide-to="2"></li>
              </ol>
              
              <div role="listbox" class="carousel-inner">

                @foreach($poto as $data)
                <br>
                <div class="item active"><img src="/img/img1/{{$data->cover}}" alt="" class="img-responsive center-block"></div>
                <div class="item"><img src="/img/img2/{{$data->cover2}}" alt="" class="img-responsive center-block"></div>
                @endforeach
                <div class="item"><img src="/img/img3/{{$data->cover3}}" alt="" class="img-responsive center-block"></div> 
              </div>
              
            </div>
          </p>
        </div>

      </div>
    </div>
  </section>
  <!-- Facts section-->
  <section class="facts section-small bg-img">
    <div class="overlay"></div>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-3"><span data-min="0" data-max="29" data-delay="5" data-increment="1" class="numscroller">0</span>
          <h5 class="no-pad">Mobil Dikeluarkan</h5>
        </div>
        <div class="col-sm-3"><span data-min="0" data-max="2785" data-delay="5" data-increment="3" class="numscroller">0</span>
          <h5 class="no-pad">Customers Bahagia</h5>
        </div>
        <div class="col-sm-3"><span data-min="0" data-max="12" data-delay="5" data-increment="1" class="numscroller">0</span>
          <h5 class="no-pad">Mendapat Penghargaan</h5>
        </div>
        <div class="col-sm-3"><span data-min="0" data-max="78" data-delay="5" data-increment="1" class="numscroller">0</span>
          <h5 class="no-pad">Mobil Terjual</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- Why Section-->
  @include('guest.whysection')
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
  <!-- Team Section-->
  @include('guest.ourleaders')
  <!-- Footer Section-->
  @include('layouts.footer')
</body>
@endsection