@extends('layouts.user')

@section('carousel')
@include('guest.carousel')
@endsection

@section('content')
<body>
<!-- Header-->
   
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
                {{-- <li data-target="#carousel-light2" data-slide-to="0" hidden=""></li> --}}
                <li data-target="#carousel-light2" data-slide-to="1" class="active"></li>
                <li data-target="#carousel-light2" data-slide-to="2"></li>
                <li data-target="#carousel-light2" data-slide-to="3"></li>
              </ol>
              
              <div role="listbox" class="carousel-inner">

              @foreach($potoa as $data)
              <br>
                <div class="item active" hidden=""><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block"></div>
                @endforeach
                @foreach($poto as $data)
                 <div class="item"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block"></div>
                 @endforeach
                <div class="item"><img src="img/misc/4.png" alt="" class="img-responsive center-block"></div> 
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
            <h4><i class="icon icon-big ion-ios-analytics-outline"></i> ANALITICS</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big ion-ios-pie-outline"></i> DESIGN</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i> CONSULTING</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big ion-ios-game-controller-b-outline"></i> ADVERTISING</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay="1s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big icon ion-ios-infinite-outline"></i>BRANDING</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay="1.2s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big ion-ios-stopwatch-outline"></i>DEVELOPMENT</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay="1.4s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big ion-ios-monitor-outline"></i>OPTIMIZATION</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
          <div data-wow-delay="1.6s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon icon-big ion-ios-settings"></i>CUSTOMIZATION</h4>
            <p>Lorem ipsum dolor sit amet. Con eleifend sem sed dictum mattis sectetur elit. Nulla convallis pul.</p>
          </div>
        </div>
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
          <h5><a href="news3.html">SEE ALL</a></h5>
        </div>
        <div class="clearfix"></div>
        <div class="row grid-pad">
        @foreach($mobils as $data)
          <div class="col-sm-4"><a href="news-single-sidebar.html"><img src="/img/{{$data->cover}}" alt="" class="img-responsive center-block">
              <h5>{{$data->nama_mobil}}</h5></a>
            <p>{!!$data->deskripsi!!}</p><a href="news-single.html" class="btn btn-gray btn-xs">Read more</a>
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
            <ul class="portfolio-sorting list-inline text-center">
              <li><a href="portfolio-single.html" data-group="all" class="active">All</a></li>
              <li><a href="portfolio-single.html" data-group="photo">Photo</a></li>
              <li><a href="portfolio-single.html" data-group="design">Design</a></li>
              <li><a href="portfolio-single.html" data-group="branding">Branding</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div id="grid" class="row portfolio-items">
        @foreach($mobils as $data)
          <div data-groups="[&quot;design&quot;, &quot;branding&quot;]" class="col-md-3 col-sm-6 no-pad">
            <div class="portfolio-item"><a href="portfolio-single.html"><img src="/img/{{$data->cover}}" alt="">
                <div class="portfolio-overlay">
                  <div class="caption">
                    <h5>{{$data->nama_mobil}}</h5><span>{{$data->harga}}</span>
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
    <div class="section-small action bg-gray text-center"><a href="portfolio-masonry-4.html" class="btn btn-dark-border">View All Portfolio</a></div>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
          </div>
          <div data-wow-delay=".4s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big ion-ios-sunny-outline"></i> Sambutan Hangat</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
          </div>
          <div data-wow-delay=".6s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big ion-ios-glasses-outline"></i> Mudah Ditemukan</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
          </div>
          <div data-wow-delay=".8s" class="col-lg-3 col-sm-6 wow fadeIn">
            <h4><i class="icon-big ion-ios-pulse"></i> Mudah Pembayaran</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum. Donec eleifend, sem sed dictum</p>
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
                    <h5 class="no-pad">Thank you very much, the template is great! Very concise and simple.</h5>
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
          <div class="col-sm-8 col-sm-offset-2"><a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="swipebox-video"><i class="icon icon-big ion-ios-videocam-outline"></i></a>
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
            <p>Feel free to contact us. A business has to be involving, it has to be fun, and it has to exercise your creative instincts. Start where you are. Use what you have. Do what you can. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <hr>
            <h5><i class="fa fa-map-marker fa-fw fa-lg"></i> 1234 Some Avenue, New York, NY 56789
            </h5>
            <h5><i class="fa fa-envelope fa-fw fa-lg"></i> info@youwebsite.com
            </h5>
            <h5><i class="fa fa-phone fa-fw fa-lg"></i> (123) 456-7890
            </h5>
          </div>
          <div class="col-md-5 col-md-offset-2">
            <h3>Get in Touch</h3>
            <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
            <form id="contactForm" name="sentMessage" novalidate="">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="name" class="sr-only control-label">You Name</label>
                  <input id="name" type="text" placeholder="You Name" required="" data-validation-required-message="Please enter name" class="form-control input-lg"><span class="help-block text-danger"></span>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="email" class="sr-only control-label">You Email</label>
                  <input id="email" type="email" placeholder="You Email" required="" data-validation-required-message="Please enter email" class="form-control input-lg"><span class="help-block text-danger"></span>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="phone" class="sr-only control-label">You Phone</label>
                  <input id="phone" type="tel" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number" class="form-control input-lg"><span class="help-block text-danger"></span>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="message" class="sr-only control-label">Message</label>
                  <textarea id="message" rows="2" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
                </div>
              </div>
              <div id="success"></div>
              <button type="submit" class="btn btn-dark">Send</button>
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
          <div class="col-md-2 text-right"><a href="https://themeforest.net/item/universal-smart-multipurpose-html5-template/17268942" class="btn btn-dark">Pesan Sekarang!</a></div>
        </div>
      </div>
    </section>
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
            <h6>Powered By <a href="http://forbetterweb.com/"> Laravel</a>
            </h6>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
            <h6>We <i class="fa fa-heart fa-fw"></i> Happy Costumers
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
