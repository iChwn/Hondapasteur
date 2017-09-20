@extends('layouts.user')
@section('carousel')
@include('guest.carousel')
@endsection
@section('content')
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation-->
    <nav class="navbar navbar-universal navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#page-top" class="navbar-brand page-scroll">
            <!-- Text or Image logo--><img src="img/logo.png" alt="Logo" class="logo"><img src="img/logodark.png" alt="Logo" class="logodark"></a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="#">Home <span class="caret"></span></a>
              <ul class="dropdown-menu columns-3">
                <li><strong class="text-muted">Multi Page</strong></li>
                <li><a href="indexparallax.html">image parallax</a></li>
                <li><a href="indexslider.html">slider parallax</a></li>
                <li><a href="indexkenburns.html">ken burns slider</a></li>
                <li><a href="indexkenburns2.html">ken burns 2 slider</a></li>
                <li><a href="indexvideo.html">fullscreen video</a></li>
                <li><a href="indexvideo2.html">fullscreen video 2 <span class="label label-danger">new</span></a></li>
                <li><a href="indexdark.html">home dark <span class="label label-danger">new</span></a></li>
                <li><a href="indexparallaxhalf.html">half screen parallax</a></li>
                <li><a href="indexsmallheader.html">small header</a></li>
                <li><a href="indexsolidcolor.html">solid color</a></li>
                <li><a href="indexsolidcolor2.html">solid color 2</a></li>
                <li><a href="indexsolidcolor3.html">solid color 3</a></li>
                <li><strong class="text-muted">One Page</strong></li>
                <li><a href="indexparallax-one.html">image parallax</a></li>
                <li><a href="indexslider-one.html">slider parallax</a></li>
                <li><a href="indexkenburns-one.html">ken burns slider</a></li>
                <li><a href="indexkenburns2-one.html">ken burns 2 slider</a></li>
                <li><a href="indexvideo-one.html">fullscreen video</a></li>
                <li><a href="indexvideo2-one.html">fullscreen video 2</a></li>
                <li><a href="indexdark-one.html">home dark</a></li>
                <li><a href="indexparallaxhalf-one.html">half screen parallax</a></li>
                <li><a href="indexsmallheader-one.html">small header</a></li>
                <li><a href="indexsolidcolor-one.html">solid color</a></li>
                <li><a href="indexsolidcolor2-one.html">solid color 2</a></li>
                <li><a href="indexsolidcolor3-one.html">solid color 3</a></li>
                <li><strong class="text-muted">Special demos</strong></li>
                <li><a href="indexportfolio.html">Agency / Portfolio Home</a></li>
                <li><a href="indexportfolio2.html">Photographer Portfolio</a></li>
                <li><a href="indexpersonal.html">Personal / Freelancer</a></li>
                <li><a href="indexpersonal2.html">Personal/ Freelancer 2 <span class="label label-danger">new</span></a></li>
                <li><a href="landing.html">landing page</a></li>
                <li><a href="landing2.html">landing page 2</a></li>
                <li><a href="landingdark.html">landing page dark <span class="label label-danger">new</span></a></li>
                <li><a href="comingsoon.html">coming soon landing</a></li>
                <li><a href="comingsoon2.html">coming soon canvas</a></li>
                <li><a href="comingsoon3.html">coming soon canvas 2</a></li>
                <li><a href="comingsoon4.html">simple coming soon</a></li>
                <li><a href="index.html" class="btn-nav"><span class="btn btn-dark-border btn-sm">More Demos</span></a></li>
              </ul>
            </li>
            <li><a href="#">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about.html">about us 1</a></li>
                <li><a href="about2.html">about us 2</a></li>
                <li><a href="contact.html">contact us 1</a></li>
                <li><a href="contact2.html">contact us 2 <span class="label label-danger">new</span></a></li>
                <li><a href="clients.html">clients</a></li>
                <li><a href="team.html">team</a></li>
                <li><a href="services.html">services</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register-login.html">Register/Login</a></li>
                <li><a href="faq.html">faq</a></li>
                <li><a href="404.html">error 404</a></li>
                <li><a href="blank.html">blank page</a></li>
              </ul>
            </li>
            <li><a href="#">Portfolio <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Masonry <span class="angle-right"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-masonry-2.html">2 columns</a></li>
                    <li><a href="portfolio-masonry-3.html">3 columns</a></li>
                    <li><a href="portfolio-masonry-4.html">4 columns</a></li>
                  </ul>
                </li>
                <li><a href="#">Wide <span class="angle-right"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-wide-2.html">2 columns</a></li>
                    <li><a href="portfolio-wide-3.html">3 columns</a></li>
                    <li><a href="portfolio-wide-4.html">4 columns</a></li>
                  </ul>
                </li>
                <li><a href="#">Boxed <span class="angle-right"></span><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-boxed-2.html">2 columns</a></li>
                    <li><a href="portfolio-boxed-3.html">3 columns</a></li>
                    <li><a href="portfolio-boxed-4.html">4 columns</a></li>
                  </ul>
                </li>
                <li><a href="portfolio-single.html">Single project</a></li>
              </ul>
            </li>
            <li><a href="#">News <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="news2.html">2 columns</a></li>
                <li><a href="news2-sidebar.html">2 columns sidebar</a></li>
                <li><a href="news3.html">3 columns</a></li>
                <li><a href="news4.html">4 columns</a></li>
                <li><a href="news-single.html">single fullwidth</a></li>
                <li><a href="news-single-sidebar.html">single sidebar</a></li>
              </ul>
            </li>
            <li><a href="#">Shop <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shop2.html">Shop sidebar</a></li>
                <li><a href="shop3.html">Shop  sidebar  wide</a></li>
                <li><a href="shop-single.html">Single product</a></li>
                <li><a href="shop-cart.html">Shopping cart</a></li>
              </ul>
            </li>
            <li><a href="#">Elements <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="headers.html"><i class="fa fa-server fa-lg fa-fw"></i> Headers & Page titles</a></li>
                <li><a href="buttons.html"><i class="fa fa-hand-pointer-o fa-lg fa-fw"></i> Buttons</a></li>
                <li><a href="carousels.html"><i class="fa fa-clone fa-lg fa-fw"></i> Carousels</a></li>
                <li><a href="columns.html"><i class="fa fa-th-list fa-lg fa-fw"></i> Columns <span class="label label-primary">update</span></a></li>
                <li><a href="pricing.html"><i class="fa fa-credit-card fa-lg fa-fw"></i> Pricing tables</a></li>
                <li><a href="countdown.html"><i class="fa fa-clock-o fa-lg fa-fw"></i> Countdown Timer</a></li>
                <li><a href="bars-charts.html"><i class="fa fa-pie-chart fa-lg fa-fw"></i> Bars and Charts</a></li>
                <li><a href="animate-on-scroll.html"><i class="fa fa-chevron-down fa-fw"></i> Animate On Scroll</a></li>
                <li><a href="typography.html"><i class="fa fa-text-width fa-lg fa-fw"></i> Typography</a></li>
                <li><a href="accordions.html"><i class="fa fa-plus-square-o fa-lg fa-fw"></i> Accordions</a></li>
                <li><a href="video-sound.html"><i class="fa fa-video-camera fa-lg fa-fw"></i> Video / Sound</a></li>
                <li><a href="tabs.html"><i class="fa fa-columns fa-lg fa-fw"></i> Tabs</a></li>
              </ul>
            </li>
            <li class="menu-divider visible-lg">&nbsp;</li>
            <li class="dropdown"><a href="#" class="dropdown-toggle"><i class="fa fa-shopping-bag fa-lg"></i><span class="badge">3</span><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="shop-nav">
                  <div class="shop-cart"><a href="shop-cart.html"><img src="img/shop/1.jpg" alt=" ">
                      <div class="btn-dark-border btn btn-xs">$128.99</div><i class="fa fa-times float-right"></i><br>Jacket with contrasting hood</a></div>
                </li>
                <li class="shop-nav">
                  <div class="shop-cart"><a href="shop-cart.html"><img src="img/shop/2.jpg" alt=" ">
                      <div class="btn-dark-border btn btn-xs">$186.99</div><i class="fa fa-times float-right"></i><br>Jacket with a seam on the lapel</a></div>
                </li>
                <li class="shop-nav">
                  <div class="shop-cart"><a href="shop-cart.html"><img src="img/shop/3.jpg" alt=" ">
                      <div class="btn-dark-border btn btn-xs">$98.99</div><i class="fa fa-times float-right"></i><br>Faux leather jacket</a></div><span class="text-left">Subtotal:</span><span class="float-right"><b>$386.99</b></span>
                </li>
                <li><a href="shop-cart.html"><span class="btn btn-dark-border btn-sm">Checkout</span></a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle"><i class="fa fa-search fa-lg"></i><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <form method="post" class="search-form">
                    <button type="submit" title="Search" class="search-button"><i class="fa fa-search fa-lg"></i></button>
                    <input type="text" placeholder="SEARCH" class="form-control search-field">
                  </form>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle">English<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Deutsch</a></li>
                <li><a href="#">Français</a></li>
                <li><a href="#">Русский</a></li>
                <li><a href="#">日本語</a></li>
                <li><a href="#">中文(简体)</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header data-background="img/header/9.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h4>Home / Latest news / March 12, 2020</h4>
              <h2>O tempora, o mores. Aequam memento rebus in arduis servare mentem.</h2>
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
            <h4>Efficiently unleash cross-media information without cross-media value. Quickly maximize deliverables for real-time schemas. Dramatically maintain clicks-and-mortar.</h4>
            <div id="carousel-news" class="carousel slide carousel-fade">
              <ol class="carousel-indicators indicators-inside">
                <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-news" data-slide-to="1"></li>
                <li data-target="#carousel-news" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="img/portfolio/4.jpg" alt="" class="img-responsive"></div>
                <div class="item"><img src="img/portfolio/9.jpg" alt="" class="img-responsive"></div>
                <div class="item"><img src="img/portfolio/7.jpg" alt="" class="img-responsive"></div>
              </div><a href="#carousel-news" data-slide="prev" class="left carousel-control"><span class="icon-prev"></span></a><a href="#carousel-news" data-slide="next" class="right carousel-control"><span class="icon-next"></span></a>
            </div>
            <p>Collaboratively administrate empowered markets  via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
            <blockquote>A business has to be involving, it has to be fun, and it ahas to exercise your creative instincts. Start where you are. Use what you have. Do what you can.</blockquote>
            <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain <a href="#">exercise your creative</a> clicks-and-mortar solutions without functional solutions.
            </p>
            <ul>
              <li> Collaboratively administrate</li>
              <li> Empowered markets via plug-and-play</li>
              <li> Dynamically procrastinate B2C</li>
              <li> Dramatically visualize customer</li>
              <li> Efficiently unleash cross-media</li>
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
          <div class="col-sm-6 col-md-3"><a href="news-single.html"><img src="img/header/13.jpg" alt="" class="img-responsive center-block"/>
              <h5>Lorem ipsum</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum.</p>
          </div>
          <div class="col-sm-6 col-md-3"><a href="news-single.html"><img src="img/header/9.jpg" alt="" class="img-responsive center-block"/>
              <h5>Consectetur elit</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum.</p>
          </div>
          <div class="col-sm-6 col-md-3"><a href="news-single.html"><img src="img/header/3.jpg" alt="" class="img-responsive center-block"/>
              <h5>Pulvinar vestibulum</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum.</p>
          </div>
          <div class="col-sm-6 col-md-3"><a href="news-single.html"><img src="img/header/7.jpg" alt="" class="img-responsive center-block"/>
              <h5>Lorem ipsum</h5></a>
            <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla convallis pulvinar vestibulum.</p>
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
 
  </body>

@endsection