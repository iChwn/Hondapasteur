@extends('layouts.user')
@section('content')
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
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
            <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
            <h4>{{$mobile->nama_mobil}}</h4>
            <div id="carousel-news" class="carousel slide carousel-fade">
              <ol class="carousel-indicators indicators-inside">
                {{-- <li data-target="#carousel-news" data-slide-to="0" hidden=""></li> --}}
                <li data-target="#carousel-news" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-news" data-slide-to="2"></li>
                <li data-target="#carousel-news" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
              @foreach($potoa as $data)
                <div class="item active"><img src="/img/img1/{{$data->cover}}" alt="" class="img-responsive"></div>
                <div class="item"><img src="/img/img2/{{$data->cover}}" alt="" class="img-responsive"></div>
                <div class="item"><img src="/img/img3/{{$data->cover}}" alt="" class="img-responsive"></div>
              @endforeach
              </div><a href="#carousel-news" data-slide="prev" class="left carousel-control"><span class="icon-prev"></span></a><a href="#carousel-news" data-slide="next" class="right carousel-control"><span class="icon-next"></span></a>
            </div>
            <blockquote class="no-pad"> <font size="40ps"> Buat Judul </font></blockquote>
            <p>{!!$mobile->deskripsi!!}</p>
            <blockquote></blockquote>
            <p></a>
            </p>
            <ul>
              <li>{!!$sub_kalimat!!}</li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>

          </div>
          <div class="col-md-3 col-md-offset-1">
            <h4>search</h4>
            <form action="#" method="post" class="form-inline subscribe-form">
              <div class="input-group input-group-lg">
                <input type="search" name="search" placeholder="Search..." class="form-control"><span class="input-group-btn">
                  <button type="submit" name="search" class="btn btn-dark"><i class="fa fa-search fa-lg"></i></button></span>
              </div>
            </form>
            <hr>
            <h4>categories</h4>
            <ul class="list-unstyled">
              <li><a href="#">Design</a></li>
              <li><a href="#">Frameworks</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Front End</a></li>
            </ul>
            <hr>
            <h4>Partners</h4>
            <div class="row no-pad">
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo1.png" alt="" class="img-responsive"></a></p>
              </div>
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo3.png" alt="" class="img-responsive"></a></p>
              </div>
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo5.png" alt="" class="img-responsive"></a></p>
              </div>
              <div class="col-md-6 col-sm-3">
                <p><a href="client-single.html"><img src="img/clients/logo6.png" alt="" class="img-responsive"></a></p>
              </div>
            </div>
            <hr>
            <h4>subscribe</h4>
            <p>Sign up with your email address to receive news and updates.</p>
            <!-- MailChimp Signup Form - Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs!-->
            <form id="mc-embedded-subscribe-form" action="http://forbetterweb.us11.list-manage.com/subscribe/post?u=4f751a6c58b225179404715f0&amp;id=18fc72763a" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="" class="form-inline subscribe-form">
              <div class="input-group input-group-lg">
                <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email address..." class="form-control"><span class="input-group-btn">
                  <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="btn btn-dark">go</button></span>
                <div id="mce-responses"></div>
                <div id="mce-error-response" style="display:none" class="response"></div>
                <div id="mce-success-response" style="display:none" class="response"></div>
              </div>
            </form>
            <!-- End MailChimp Signup Form--><img src="img/misc/mailchimp.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="section-small bg-white">
      <div class="container grid-pad">
        <h3>Recent News</h3>
        <div class="row">
        @foreach($mobil as $data)
          <div class="col-sm-6 col-md-3"><a href="news-single.html"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block"/>
              <h5>Lorem ipsum</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum.</p>
          </div>
        @endforeach
        </div>
      </div>

    </section>
    <div class="section section-small">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <nav>
              <ul class="pager">
                <li class="previous"><a href="portfolio-single.html" class="text-muted"><span aria-hidden="true"></span><i class="fa fa-angle-left"></i> PREVIOUS</a></li>
                <li><a href="portfolio-masonry-4.html"><i class="fa ion-grid fa-2x"></i></a></li>
                <li class="next"><a href="portfolio-single.html" class="text-muted">NEXT <span aria-hidden="true"></span><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Section-->
    <section class="section-small footer bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h5>About</h5>
            <p>Thanks for choosing Universal for your next project! Universal is a unique template for building  beautiful business website. We have a dedicated support team ready to answer your questions.</p>
          </div>
          <div class="col-sm-2 col-sm-offset-1 footer-menu">
            <h5>Company</h5>
            <h6 class="no-pad"><a href="services.html">Our Services</a></h6>
            <h6 class="no-pad"><a href="clients.html">Our Clients</a></h6>
            <h6 class="no-pad"><a href="contact.html">Contact Us</a></h6>
            <h6 class="no-pad"><a href="shop.html">Shop</a></h6>
          </div>
          <div class="col-sm-2 footer-menu">
            <h5>&nbsp;</h5>
            <h6 class="no-pad"><a href="about.html">About us</a></h6>
            <h6 class="no-pad"><a href="portfolio-masonry-4.html">Portfolio</a></h6>
            <h6 class="no-pad"><a href="team.html">Our Team</a></h6>
            <h6 class="no-pad"><a href="register.html">Register</a></h6>
          </div>
          <div class="col-sm-3 text-right">
            <h5>Total downloads</h5><span data-min="0" data-max="2785" data-delay="5" data-increment="3" class="numscroller">0</span>
          </div>
        </div>
      </div>
    </section>
    <section class="section-small footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h6>Powered By <a href="http://forbetterweb.com/"> forbetterweb.com</a>
            </h6>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
            <h6>We <i class="fa fa-heart fa-fw"></i> creative people
            </h6>
          </div>
          <div class="col-sm-3 col-sm-offset-1 text-right">
            <ul class="list-inline">
              <li><a href="http://forbetterweb.com/"><i class="fa fa-twitter fa-fw fa-lg"></i></a></li>
              <li><a href="http://forbetterweb.com/"><i class="fa fa-facebook fa-fw fa-lg"></i></a></li>
              <li><a href="http://forbetterweb.com/"><i class="fa fa-google-plus fa-fw fa-lg"></i></a></li>
              <li><a href="http://forbetterweb.com/"><i class="fa fa-linkedin fa-fw fa-lg"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>

<!-- Mirrored from forbetterweb.com/html/universal/news-single-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2017 13:20:01 GMT -->
@endsection