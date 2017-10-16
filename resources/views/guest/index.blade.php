<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from forbetterweb.com/html/universal/indexkenburns2-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2017 13:15:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('honda-xxl.png')}}">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Honda Pasteur
  </title>
  <!-- Bootstrap Core CSS-->
  <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom CSS-->
  <link href="{{asset('/frontend/css/universal.css')}}" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
  <!-- Preloader-->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!-- Navigation One Page-->
  <nav class="navbar navbar-universal navbar-custom navbar-fixed-top navbar-onepage">
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button><a href="#page-top" class="navbar-brand page-scroll">
        <!-- Text or Image logo--><img src="/img/" alt="Honda Pasteur" class="logodrak">{{-- <img src="img/logodark.png" alt="Honda Pasteur" class="logodark"> --}}</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling-->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section-->
          <li class="dropdown">
            <a>Model<i class="fa fa-chevron-down fa-fw"></i></a>
            <ul class="dropdown-menu">
              @foreach($modell as $data)       
              <li>
                <a href="{{route('showperkategori', $data->slug)}}">{!! $data->nama_model !!}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#services" class="page-scroll">Services</a></li>
            <li><a href="#news" class="page-scroll">News</a></li>
            <li><a href="#portfolio" class="page-scroll">Works</a></li>
            <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle"><i class="fa fa-search fa-lg"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <form action="search_code" method="post" class="search-form">
                    <button name="Submit" type="submit" title="Search" class="search-button"><i class="fa fa-search fa-lg"></i></button>
                    <input name="search_code" type="text" placeholder="SEARCH" class="form-control search-field">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="intro">
      <!-- Intro Header-->
      <div class="intro-body">
        <h2>Deler <span class="bold">Mobil</span> Honda
        </h2>
        <h1>Honpas<span class="badge hidden-sm hidden-xs ">Sience<br>2003</span></h1>
        <div data-wow-delay="1s" class="scroll-btn wow fadeInDown"><a href="#about" class="page-scroll"><span class="mouse"><span class="weel"><span></span></span></span></a></div>
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

                  @foreach($perusahaan as $data)
                  <br>
                  <div class="item active" hidden=""><img src="/img/img1/{{$data->cover}}" alt="" class="img-responsive center-block"></div>
                  <div class="item"><img src="/img/img2/{{$data->cover2}}" alt="" class="img-responsive center-block"></div>
                  <div class="item"><img src="/img/img3/{{$data->cover3}}" alt="" class="img-responsive center-block"></div>
                  @endforeach
                </div>

              </div>
            </p>
          </div>

        </div>
      </div>
    </section>
    <!-- About Section-->
    <section id="about2" class="bg-gray">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-6">
            <h3>Persentasi Perusahan Kami</h3>
            <p>Setiap harinya kami mengalami kenaikan yang begitu drastis, sehingga memajukan perusahaan kami begitu PESAT, dan mengalahkan beberapa perusahaan ternama di Indonesia</p><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">Check it out</a>
          </div>
          <div class="col-lg-5 col-lg-offset-1 text-center">
            <h3>&nbsp;</h3>
            <div data-thickness="4" data-value="0.93" class="circle"><span></span>
              <div class="agenda">Pendapatan</div>
            </div>
            <div data-thickness="10" data-value="0.82" class="circle"><span></span>
              <div class="agenda">Pengabdian</div>
            </div>
            <div data-thickness="18" data-value="0.68" class="circle"><span></span>
              <div class="agenda">Pengeluaran</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section-->
    <section id="services" class="bg-img4 text-center">
      <div class="overlay"></div>
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
    <div>
    <a href="paket_cermat_waifu2x_photo_noise3_scale_tta_1.png" class="btn btn-dark-border swipebox">Lihat Paket</a>
    </div>
  </section>

  <!-- Slider-->
  <section id="action-slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h3>Awesome Template</h3>
          <p>Universal is the perfect template for your next project! It’s time to grow your business. Go make something awesome. Designed for Everyone. Let’s give your website a brand.</p><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">Get it Now!</a>
        </div>
        <div class="col-lg-6 col-lg-offset-1">
          <div id="carousel-light" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
              <li data-target="#carousel-light" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-light" data-slide-to="1"></li>
              <li data-target="#carousel-light" data-slide-to="2"></li>
            </ol>
            <div role="listbox" class="carousel-inner">
              <div class="item active"><img src="img/misc/1.png" alt="" class="img-responsive center-block"></div>
              <div class="item"><img src="img/misc/2.png" alt="" class="img-responsive center-block"></div>
              <div class="item"><img src="img/misc/3.png" alt="" class="img-responsive center-block"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Subscribe Section-->
  <section id="subscribe" class="section-small bg-img5 text-center">
    <div class="overlay-white"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-offset-2">
          <h3>Datang Kemari</h3>
          <h5>Dan Buktikan Secara Langsung Di Outlet Kami</h5>
          <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
          {{-- <i class="icon icon-big ion-ios-analytics-outline"></i> --}}
          <!-- End MailChimp Signup Form--><img src="{{asset('honda-xxl.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- News Block-->
  <section id="news">
    <div class="container">
      <h3 class="pull-left">Latest news</h3>
      <div class="pull-right">
        <h5><a href="/news">SEE ALL</a></h5>
      </div>
      <div class="clearfix"></div>
      <div class="row grid-pad">
        @foreach($mobils as $data)
        <div class="col-sm-4"><a href="{{route('show.show',$data->slug)}}"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block">
          <h5>{{$data->nama_mobil}}</h5></a>
          <p>{!! substr($data->deskripsi,0,200)."..." !!}</p>
          <a class="btn btn-default" href="{{route('show.show',$data->slug)}}">Read more</a>
        </div>
        @endforeach       
      </div>
    </div>
  </section>
  <!-- Portfolio-->
  <section id="portfolio" class="bg-gray no-pad-btm">
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h3>Portfolio</h3>
        {{-- <ul class="portfolio-sorting list-inline text-center">
          <li><a href="portfolio-single.html" data-group="all" class="active">All</a></li>
          <li><a href="portfolio-single.html" data-group="photo">Photo</a></li>
          <li><a href="portfolio-single.html" data-group="design">Design</a></li>
          <li><a href="portfolio-single.html" data-group="branding">Branding</a></li>
        </ul> --}}
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div id="grid" class="row portfolio-items">
      @foreach($mobils as $data)
      <div data-groups="[&quot;design&quot;, &quot;branding&quot;]" class="col-md-3 col-sm-6 no-pad">
        <div class="portfolio-item"><a href="{{route('show.show',$data->slug)}}"><img src="/img/{{$data->cover}}" alt="">
          <div class="portfolio-overlay">
            <div class="caption">
              <h5>{{$data->nama_mobil}}</h5><span>{{$data->modell->nama_model}}</span>
            </div>
          </div></a></div>
        </div>
        @endforeach
        <div data-groups="[&quot;photo&quot;, &quot;branding&quot;]" class="col-md-3 col-sm-6 no-pad">
          <div class="portfolio-item"><a href="portfolio-single.html"><img src="img/portfolio/7.jpg" alt="">
            <div class="portfolio-overlay">
              <div class="caption">
                <h5>Form Image Creative</h5><span>Lorem ipsum dolor sit amet</span>
              </div>
            </div></a></div>
          </div>
        </div>
      </div>
    </section>
    <div class="section-small action bg-gray text-center"><a href="/portfolio" class="btn btn-dark-border">View All Portfolio</a></div>
    <!-- Team Section-->
    <section id="team" class="bg-white text-center">
      <div class="container">
        <h3>Berkenalan dengan Anggota</h3>
        <div class="row">
          <center>
            @foreach($leader as $data)
            <div class="col-md-3 col-sm-6">
              <p><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block"></p>
              <font color="grey"> <h2 class="classic"> <br> {{$data->nama}}</h2> </font>
              <ul class="list-inline">
                <li><a href="http://forbetterweb.com/"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="{{$data->link_fb}}"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="{{$data->link_google}}"><i class="fa fa-google-plus fa-lg"></i></a></li>
              </ul>
              <h6>{{$data->jabatan}}</h6>
            </div>
            @endforeach
          </center>
        </div>
      </div>
    </section>
    <!-- Quotes-->
    <section class="quote section-small bg-img3 text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          @foreach($perusahaan as $data)
          <div class="col-sm-8 col-sm-offset-2">
            <p><i class="icon fa fa-quote-left fa-lg"></i></p>
            <p>{!!$data->motto!!}</p>
            <h2 class="no-pad classic">"Honda Pasteur"</h2>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Why Section-->
    <section>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h3>Mengapa Memilih Kita?</h3>
          </div>
        </div>
        <div class="row">
          <div data-wow-delay=".2s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big icon ion-ios-infinite-outline"></i> Banyak Pilihan</h4>
            <p>Honda Pasteur memiliki banyak pilihan mobil yang dijual, berbagai macam model dan warna yang kami tawarkan</p>
          </div>
          <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big ion-ios-sunny-outline"></i> Sambutan Hangat</h4>
            <p>Sambutan hangat dari para Sales kami yang akan menuntun anda untuk memilih mobil-mobil yang kami sediakan</p>
          </div>
          <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big ion-ios-glasses-outline"></i> Mudah Ditemukan</h4>
            <p>Lokasi yang strategis memungkinkan anda untuk memudahkan datang ke deler kami berkat akses jalan yang mudah dan bebas kemacetan</p>
          </div>
          <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big fa fa-money"></i> Pembayaran Mudah</h4>
            <p>Kami memberi kemudahan anda dalam melakukan pembayaran, Kami memberikan Cicilan untuk pembelian di Deler kami</p>
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

          {{-- @foreach($perusahaan as data)
          <div class="col-sm-3"><span data-min="0" data-max="{{$data->persentase1}}" data-delay="5" data-increment="1" class="numscroller">0</span>
            <h5 class="no-pad">Mobil Terjual</h5>
          </div>
          @endforeach --}}

        </div>
      </div>
    </section>
    <!-- Testimonials Section-->
    <section id="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">Testimonials</h3>
            <div id="carousel-testimonials" data-ride="carousel" class="carousel slide carousel-fade">
              <!-- Indicators-->
              <ol class="carousel-indicators">
                {{-- <li data-target="#carousel-testimonials" data-slide-to="0" hidden=""></li> --}}
                <li data-target="#carousel-testimonials" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                <li data-target="#carousel-testimonials" data-slide-to="3"></li>
              </ol>
              <!-- Wrapper for slides-->
              <div role="listbox" class="carousel-inner">
                @foreach($leadera as $data)
                <div class="item active"><img src="/img/{{$data->cover}}" alt="" class="center-block" hidden="">
                  <div class="carousel-caption">
                    <h2 class="classic">{{$data->nama}}</h2>
                    <h5 class="no-pad">{!! $data->testimoni !!}</h5>
                  </div>
                </div>
                @endforeach
                @foreach($leader as $data)
                <div class="item"><img src="/img/{{$data->cover}}" alt="" class="center-block">
                  <div class="carousel-caption">
                    <h2 class="classic">{{$data->nama}}</h2>
                    <h5 class="no-pad">Adorable minimalist theme! Should be working well as a canvas for any upcoming project.</h5>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Action video-->
    <section class="section-small bg-img2 text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2"><a href="https://www.youtube.com/watch?v=0FtX0oIMIPM" class="swipebox-video"><i class="icon icon-big ion-ios-videocam-outline"></i></a>
            <h2>Tonton <span class="bold">Video</span>
            </h2>
            <p>Perjalanan perusahaan kami dari tahun... hingga sekarang, Sangat banyak pengetahuan yang kami Dapatkan.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h3>contact us</h3>
            <p>Ingin Mengetahui Layanan Kami Lebih Lanjut? Silahkan Hubungi Call Center Kami</p>
            <hr>
            <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> Jl. Dr. Djunjunan No. 168 B Bandung 40163 - Jawa Barat - Indonesia
            </h5>
            <h5><i class="fa fa-envelope fa-fw fa-lg"></i> info@hondapasteur.com 
            </h5>
            <h5><i class="fa fa-phone fa-fw fa-lg"></i> [022] 2000977, 2000975 Fax. 2015 193
            </h5>
          </div>
          <div class="col-md-5 col-md-offset-2">
            <h3>Booking Services</h3>
            <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
            <form id="contactForm" name="sentMessage" novalidate="">
              <div id="success"></div>
              <a href="/contact" class="btn btn-dark">Booking Service, HERE!</a>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section-->
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9894479328914!2d107.57960831438643!3d-6.89186479501998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e67c6a5aa085%3A0xe09e4e96aa2767fa!2sHonda+Pasteur!5e0!3m2!1sen!2sid!4v1505792187288" width="1350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Action Section-->
    <section class="action section-small bg-gray2">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-md-10">
            <h3 class="no-pad"><span class="bold">Honda</span> Adalah Pilihan Tepat Anda Untuk Di Masa Depan;)
            </h3>
          </div>
          {{-- <div class="col-md-2 text-right"><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">Pesan Sekarang!</a></div> --}}
        </div>
      </div>
    </section>
    <!-- Footer Section-->
    <section class="section-small footer bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h5>About</h5>
            <p>Honda didirikan pada 24 September 1948 oleh Soichiro Honda. Honda merupakan produsen sepeda motor terbesar di dunia sejak 1959,dan juga produsen mesin pembakaran dalam terbesar dengan produksi lebih dari 14 juta unit tiap tahun.
            </p>
          </div>
          <div class="col-sm-2 col-sm-offset-1 footer-menu">
            <h5>Company</h5>
            <h6 class="no-pad"><a href="{{ url('/service') }}">Our Services</a></h6>
            <h6 class="no-pad"><a href="{{ url('/contact')}}">Booking Service</a></h6>
          </div>
          <div class="col-sm-2 footer-menu">
            <h5>&nbsp;</h5>
            <h6 class="no-pad"><a href="{{ url('/about') }}">About us</a></h6>
            <h6 class="no-pad"><a href="{{ url('/portfolio') }}">Portfolio</a></h6>
          </div>
          {{-- <div class="col-sm-3 text-right">
            <h5>Total downloads</h5><span data-min="0" data-max="2785" data-delay="5" data-increment="3" class="numscroller">0</span>
          </div> --}}
        </div>
      </div>
    </section>
    <section class="section-small footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h6>Powered By <a href="https://laravel.com/"> Laravel<img src="laravel-256-black.png" width="15%"></a>
            </h6>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
            <h6>We <i class="fa fa-heart fa-fw"></i> Happy Costumers
            </h6>
          </div>
          <div class="col-sm-3 col-sm-offset-1 text-right">
            <ul class="list-inline">
              <li><a href="https://www.google.co.id/maps/place/Honda+Pasteur/@-6.8918648,107.581797,15z/data=!4m2!3m1!1s0x0:0xe09e4e96aa2767fa?sa=X&ved=0ahUKEwjP0b_ilPTWAhXGnZQKHQBgCC4Q_BIIejAK&hl=id"><i class="fa fa-map-marker fa-fw fa-lg"></i></a></li>
              <li><a href="https://www.facebook.com/hargahondamobilbandung/?rf=407126959360728"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
              {{-- <li><a href="http://forbetterweb.com/"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li> --}}
              <li><a href="https://www.instagram.com/hondapasteur/"><i class="fa fa-instagram   fa-fw fa-lg"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    @yield('footer')
    <!-- jQuery-->
    <script src="{{asset('/frontend/js/jquery-1.12.4.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Plugin JavaScript-->
    <script src="{{asset('/frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/frontend/js/device.min.js')}}"></script>
    <script src="{{asset('/frontend/js/form.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.parallax.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.swipebox.min.js')}}"></script>
    <script src="{{asset('/frontend/js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('/frontend/js/wow.min.js')}}"></script>
    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3E86i8mx1BZDlAaLcknh_mWl4F70i4os"></script>
    <script src="js/map.js"></script>
    <!-- Background Slider-->
    <script src="{{asset('/frontend/js/vegas/vegas.min.js')}}"></script>
    <script>
      $('body').vegas({
        delay: 7000,
        timer: false,
        transitionDuration: 2000,
        slides: [
        @foreach($mobil as $data)
        {src: '/img/{{$data->cover}}'},
        @endforeach              
        ],
        transition: ['swirlRight', 'swirlLeft'],
        animation: ['kenburns']
      });
    </script>
    <!-- Custom Theme JavaScript-->
    <script src="{{asset('/frontend/js/universal.js')}}"></script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('universal')
  </body>

  <!-- Mirrored from forbetterweb.com/html/universal/indexkenburns2-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2017 13:15:29 GMT -->
  </html>