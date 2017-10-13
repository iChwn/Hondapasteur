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
        <h1>Services</h1>
        <h4>What we do</h4>
      </div>
    </header>
    <!-- Services Section-->
    <section id="services">
      <div class="container text-center">
        <div class="row">
        @foreach($perusahaan as $data)
          <div class="col-lg-8 col-lg-offset-2">
            <h3>{{$data->service}}</h3>
            <p>{!!$data->dekservice!!}</p>
          </div>
        @endforeach
        </div>
        <div class="row">
          <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big fa fa-money"></i> Keuangan</h4>
          <p>Biyaya Perawatan Lebih Hemat</p>
        </div>
        <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon-big ion-ios-pulse"></i> Harga</h4>
          <p>Bebas Kenaikan Harga</p>
        </div>
        <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i> Cicilan</h4>
          <p>Dapat Dicicil Bersama Kredit Mobil</p>
        </div>
        <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big fa fa-car"></i> Kendaraan</h4>
          <p>Kendaraan Tetap Prima</p>
        </div>
        </div>
      </div>
    </section>
    <!-- Services 2 Section-->
    <section class="section-small bg-img4 text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div data-wow-delay="1s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big fa fa-globe"></i>Deler</h4>
          <p>Berlaku Di Seluruh Deler Honda Di Indonesia</p>
        </div>
        <div data-wow-delay="1.2s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big fa fa-crop"></i>Paket Cermat Plus+</h4>
          <p>Potongan Harga Jasa dan Suku Cadang unruk Perbaikan Umum*</p>
        </div>
        <div data-wow-delay="1.4s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big fa fa-refresh"></i>Paket Cermat Plus+</h4>
          <p>Dapat Dipindahkan ke Kendaraan Baru*</p>
        </div>
        <div data-wow-delay="1.6s" class="col-lg-3 col-sm-6 wow fadeIn">
          <h4><i class="icon icon-big fa fa-usd"></i>Paket Cermat Plus+</h4>
          <p>Bebas dari Biaya Perbaikan Tak Terduga</p>
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
            <h3 class="no-pad">Honda Adalah Pilihan Tepat Anda Untuk Di Masa Depan;) </h3>
          </div>
          <div class="col-md-2 text-right"><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark wow fadeInDown">Get Started</a></div>
        </div>
      </div>
    </div>
    <!-- Footer Section-->
    @include('layouts.footer')
  </body>
@endsection