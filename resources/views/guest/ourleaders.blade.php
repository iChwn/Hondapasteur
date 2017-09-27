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