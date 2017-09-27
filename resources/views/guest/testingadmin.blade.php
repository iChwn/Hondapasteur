@extends('layouts.user')
@section('content')
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- Preloader-->

    <!-- Navigation-->
    <div class="small-header bg-img2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Accordions</h3>
          </div>
          <div class="col-md-6 text-right">
            <h6 class="breadcrumb"><a href="index.html">Home</a> / <a href="http://forbetterweb.com/">Components</a> / Accordions
            </h6>
          </div>
        </div>
      </div>
    </div>
    <!-- Accordions-->
    <section>
      <div class="container">
        <div class="row wow fadeIn">
          <div class="col-sm-12">
            <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
              <div class="panel panel-default">
                <div id="headingOne" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Mobil</a></h4>
                </div>
                <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <a class="btn btn-primary" href="{{ url('/admin/mobils/create') }}">Tambah</a>
                    <table>
                    <tr>
                      <th hidden="true">Id</th>
                      <th><div class="panel-heading"><u>Nama Mobil</u></div></th>
                      <th><u>Nama Model</u></th>
                      <th><u>Harga</u></th>
                      <th><u>Deskripsi</u></th>
                      <th><u>Spesifikasi</u></th>
                      <th><u>Cover</u></th>
                      <th><u>Action</u></th>
                    </tr>
                    @foreach($mobil as $data)
                    <tr>
                      <th hidden="true">{{$data->id}}</th>
                      <th>{{$data->nama_mobil}}</th>
                      <th>{{$data->nama_model}}</th>
                      <th>{{$data->harga}}</th>
                      <th>{!!$data->deskripsi!!}</th>
                      <th>{!!$data->spesifikasi!!}</th>
                      <th>{{$data->cover}}</th>
                      <th> <a href="{{route('mobils.edit', $data->id)}}">Edit</a> <a href="{{route('mobils.destroy', $data->id)}}">Hapus</a></th>
                    </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="headingTwo" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Collapsible Group Item #2</a></h4>
                </div>
                <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="headingThree" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Collapsible Group Item #3</a></h4>
                </div>
                <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor</div>
                </div>
              </div>
            </div>
          </div>
          
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

