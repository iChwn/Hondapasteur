@extends('layouts.user')
@section('content')

    <!-- Navigation-->
    <!-- Header-->
    @foreach($mobil as $data)
    <header data-background="img/{{$data->cover}}" class="intro introhalf">
    @endforeach
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>Portfolio</h1>
        <h5>Home / Portfolio / Mobil</h5>
      </div>
    </header>
    <!-- Portfolio-->
    <section id="portfolio" class="portfolio-wide">
      <div class="container text-center">
        <div class="row"> 
          <div class="col-sm-10 col-sm-offset-1">
            <h3>Latest Works</h3>
            {{-- <ul class="portfolio-sorting list-inline text-center">
              <li><a href="portfolio-single.html" data-group="all" class="active">All</a></li>
              <li><a href="portfolio-single.html" data-group="design">Design</a></li>
              <li><a href="portfolio-single.html" data-group="photo">Photo</a></li>
              <li><a href="portfolio-single.html" data-group="branding">Branding</a></li>
            </ul> --}}
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div id="grid" class="row portfolio-items">
        @foreach($mobile as $data)
          <div data-groups="[&quot;design&quot;, &quot;branding&quot;]" class="col-sm-3">
            <div class="portfolio-item"><a href="{{route('show.show',$data->id)}}"><img src="img/{{$data->cover}}" alt="">
                <div class="portfolio-overlay">
                  <div class="caption">
                    <h5>{{$data->nama_mobil}}</h5><span>{{$data->modell->nama_model}}</span>
                  </div>
                </div></a></div>
          </div>
        @endforeach
          <!-- sizerli.span3.m-span3.shuffle_sizer
          -->
        </div>
      </div>
    </section>
    <!-- Footer Section-->
    @include('layouts.footer')
@endsection