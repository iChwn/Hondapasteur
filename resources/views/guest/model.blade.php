@extends('layouts.user')
@section('content')
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background:rgba(0,0,0, 0.5);;
    color: white;
}
</style>

<div class="small-header bg-img2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Model ->
					@foreach($filtercategori2 as $data)
					<i class="no-pad">{{$data->nama_model}}</i> 
					@endforeach
				</h3>
			</div>
			<div class="col-md-6 text-right">
				<h6 class="breadcrumb"><a href="index.html">Home</a> / <a href="http://forbetterweb.com/">Components</a> / Tabs
				</h6>
			</div>
		</div>
	</div>
</div>

<!-- Tabs-->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Nav tabs-->
				<ul role="tablist" class="nav nav-tabs">
					<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Main</a></li>
					<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Spesifikasi</a></li>
					<li role="presentation"><a href="#tab3" aria-controls="tab2" role="tab" data-toggle="tab">Eksterior</a></li>
					<li role="presentation"><a href="#tab4" aria-controls="tab2" role="tab" data-toggle="tab">Interior</a></li>
					<li role="presentation"><a href="#tab5" aria-controls="tab2" role="tab" data-toggle="tab">Harga	</a></li>

				</ul>
				<!-- Tab panes-->
				<div class="tab-content">
					<div id="tab1" role="tabpanel" class="tab-pane fade in active">
						@foreach($filtercategori as $data)
						<p class="no-pad">{!!$data->deskripsi!!}</p> 
						@endforeach
					</div>
					<div id="tab2" role="tabpanel" class="tab-pane fade">
						<div class="container">
							<div class="row wow fadeIn">
								<h1>Spesifikasi</h1>
								<div class="col-sm-12">
									<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
										{{-- Mesin --}}
										<div class="panel panel-default">
											<div id="headingOne" role="tab" class="panel-heading">
												<h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Mesin</a></h4>
											</div>
											<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
												<div class="panel-body">
												<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>Tipe</td>
															@foreach($mesin as $data)
															<td>{{$data->tipe}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Sistem Suplai BBM</td>
															@foreach($mesin as $data)
															<td>{{$data->sistem_bbm}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Diameter x langkah</td>
															@foreach($mesin as $data)
															<td>{{$data->diameter_langkah}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Isi Silinder</td>
															@foreach($mesin as $data)
															<td>{{$data->silinder}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Perbandingan Kompresi</td>
															@foreach($mesin as $data)
															<td>{{$data->perbandingan_kompresi}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Daya Maksimum</td>
															@foreach($mesin as $data)
															<td>{{$data->daya_maksimum}}</td>
															@endforeach	
														</tr>
														<tr>
															<td>Momen Puntri Maksimum</td>
															@foreach($mesin as $data)
															<td>{{$data->momen_puntri_maksimum}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Dimensi --}}
										<div class="panel panel-default">
											<div id="headingTwo" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Dimensi</a></h4>
											</div>
											<div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
												<div class="panel-body">Dimensi</div>
											</div>
										</div>
										{{-- Transmisi --}}
										<div class="panel panel-default">
											<div id="headingThree" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Transmisi</a></h4>
											</div>
											<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
												<div class="panel-body">Transmisi</div>
											</div>
										</div>
										{{-- Kemudi --}}
										<div class="panel panel-default">
											<div id="headingFour" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">Sistem Kemudi</a></h4>
											</div>
											<div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" class="panel-collapse collapse">
												<div class="panel-body">Sistem Kemudi</div>
											</div>
										</div>
										{{-- Suspensi --}}
										<div class="panel panel-default">
											<div id="headingFive" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">Sistem Suspensi</a></h4>
											</div>
											<div id="collapseFive" role="tabpanel" aria-labelledby="headingFive" class="panel-collapse collapse">
												<div class="panel-body">Sistem Suspensi</div>
											</div>
										</div>
										{{-- Rem --}}
										<div class="panel panel-default">
											<div id="headingSix" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="collapsed">Sistem Rem</a></h4>
											</div>
											<div id="collapseSix" role="tabpanel" aria-labelledby="headingSix" class="panel-collapse collapse">
												<div class="panel-body">Sistem Rem</div>
											</div>
										</div>
										{{-- Ban --}}
										<div class="panel panel-default">
											<div id="headingSeven" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="collapsed">Ban</a></h4>
											</div>
											<div id="collapseSeven" role="tabpanel" aria-labelledby="headingSeven" class="panel-collapse collapse">
												<div class="panel-body">Ban</div>
											</div>
										</div>
										{{-- Eksterior --}}
										<div class="panel panel-default">
											<div id="headingEight" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="collapsed">Eksterior</a></h4>
											</div>
											<div id="collapseEight" role="tabpanel" aria-labelledby="headingEight" class="panel-collapse collapse">
												<div class="panel-body">Eksterior</div>
											</div>
										</div>
										{{-- Interior --}}
										<div class="panel panel-default">
											<div id="headingNine" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" class="collapsed">Interior</a></h4>
											</div>
											<div id="collapseNine" role="tabpanel" aria-labelledby="headingNine" class="panel-collapse collapse">
												<div class="panel-body">Interior</div>
											</div>
										</div>
										{{-- Keselamatan --}}
										<div class="panel panel-default">
											<div id="headingTen" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen" class="collapsed">Fitur Keselamatan</a></h4>
											</div>
											<div id="collapseTen" role="tabpanel" aria-labelledby="headingTen" class="panel-collapse collapse">
												<div class="panel-body">Fitue Keselamatan</div>
											</div>
										</div>
										{{-- Keamanan --}}
										<div class="panel panel-default">
											<div id="headingEleven" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="collapsed">Sistem Keamanan</a></h4>
											</div>
											<div id="collapseEleven" role="tabpanel" aria-labelledby="headingEleven" class="panel-collapse collapse">
												<div class="panel-body">Sistem Keamanan</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="tab3" role="tabpanel" class="tab-pane fade">Null</div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('layouts.footer')
@endsection