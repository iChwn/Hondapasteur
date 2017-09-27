@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row wow fadeIn">
		<h1>Selamat Datang Di Menu Leader</h1>
		<div class="col-sm-12">
			<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
				<div class="panel panel-default">
					<div id="headingOne" role="tab" class="panel-heading">
						<h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Leader</a></h4>
					</div>
					<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<p> <a class="btn btn-primary" href="{{ route('leaders.create') }}">Tambah</a> </p>
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
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection