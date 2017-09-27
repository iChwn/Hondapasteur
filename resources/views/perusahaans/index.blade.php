@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row wow fadeIn">
		<h1>Selamat Datang Di Menu Perusahaan</h1>
		<div class="col-sm-12">
			<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
				<div class="panel panel-default">
					<div id="headingOne" role="tab" class="panel-heading">
						<h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Perusahaan</a></h4>
					</div>
					<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<p> <a class="btn btn-primary" href="{{ route('perusahaans.create') }}">Tambah</a> </p>
							{!! $html->table(['class'=>'table-striped']) !!}
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div id="headingTwo" role="tab" class="panel-heading">
						<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Lebih Lengkap</a></h4>
					</div>
					<div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
           {{-- beritanya --}}
           <section id="services">
            <div class="container text-center">
              <div class="row">
                @foreach($perusahaan as $data)
                <div class="col-lg-8 col-lg-offset-2">
                  <h3>"About"</h3>
                  <p>{!!$data->about!!}</p>
                  <h2 class="classic">Team Honda Pasteur</h2>
                </div>
                @endforeach
                <hr width="1150px" class="no-pad">
                <hr width="1150px" class="no-pad">
                <hr width="1150px" class="no-pad">
                <hr width="1150px" class="no-pad">
                <hr width="1150px" class="no-pad">
                <hr width="1150px" class="no-pad">
                <hr width="1150px" class="no-pad">
                <hr width="1150px" >

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
                  <p>Dengan merek yang begitu dikenal.</p>
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
              </div>
            </div>            
            <section id="news-single" class="section-small">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <font size="200px"><p class="no-pad">"Cover"</p></font>  
                    </center>
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
                  </div>
                </div>
              </div>
            </section>
          </section>
        </div>
      </div>
      <div class="panel panel-default">
       <div id="headingThree" role="tab" class="panel-heading">
        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Collapsible Group Item #3</a></h4>
      </div>
      <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
       -
     </div>
   </div>
 </div>
</div>
</div>
</div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection