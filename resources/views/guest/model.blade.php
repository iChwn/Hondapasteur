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
					<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Eksterior</a></li>
					<li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Interior</a></li>
					<li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Harga	</a></li>

				</ul>
				<!-- Tab panes-->
				<div class="tab-content">
					<div id="tab1" role="tabpanel" class="tab-pane fade in active">
						@foreach($filtercategori as $data)
						<h3><p>{{$data->nama_mobil}}</p></h3> 
						<p class="no-pad">{!!$data->deskripsi!!}</p>
						<hr width="1150px" class="no-pad">
						<hr width="1150px" class="no-pad">
						<hr width="1150px" class="no-pad">
						<hr width="1150px" class="no-pad">
						<hr width="1150px" class="no-pad"> 
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
												<div class="panel-body">
													<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>PanjangxLebaxTinggi</td>
															@foreach($dimensi as $data)
															<td>{{$data->plt}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Jarak Sumbu Roda</td>
															@foreach($dimensi as $data)
															<td>{{$data->jarak_sumbu_roda}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Jarak Pijak Depan/Belakang</td>
															@foreach($dimensi as $data)
															<td>{{$data->jarak_pijak_db}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Kapasitas Tangki</td>
															@foreach($dimensi as $data)
															<td>{{$data->kapasitas_tangki}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Berat Kosong</td>
															@foreach($dimensi as $data)
															<td>{{$data->berat_kosong}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Transmisi --}}
										<div class="panel panel-default">
											<div id="headingThree" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Transmisi</a></h4>
											</div>
											<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
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
															@foreach($transmisi as $data)
															<td>{{$data->tipe}}</td>
															@endforeach
														</tr>
														<tr>
															<td>1</td>
															@foreach($transmisi as $data)
															<td>{{$data->no1}}</td>
															@endforeach
														</tr>
														<tr>
															<td>2</td>
															@foreach($transmisi as $data)
															<td>{{$data->no2}}</td>
															@endforeach
														</tr>
														<tr>
															<td>3</td>
															@foreach($transmisi as $data)
															<td>{{$data->no3}}</td>
															@endforeach
														</tr>
														<tr>
															<td>4</td>
															@foreach($transmisi as $data)
															<td>{{$data->no4}}</td>
															@endforeach
														</tr>
														<tr>
															<td>5</td>
															@foreach($transmisi as $data)
															<td>{{$data->no5}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Reverse</td>
															@foreach($transmisi as $data)
															<td>{{$data->reverse}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Final Gear</td>
															@foreach($transmisi as $data)
															<td>{{$data->final_gear}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Kemudi --}}
										<div class="panel panel-default">
											<div id="headingFour" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">Sistem Kemudi</a></h4>
											</div>
											<div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" class="panel-collapse collapse">
												<div class="panel-body">
													<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>Sistem</td>
															@foreach($skemudi as $data)
															<td>{{$data->sistem}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Tilt Steering</td>
															@foreach($skemudi as $data)
															<td>{{$data->tilt_steering}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Telescopic Steering</td>
															@foreach($skemudi as $data)
															<td>{{$data->telescopic_steering}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Suspensi --}}
										<div class="panel panel-default">
											<div id="headingFive" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">Sistem Suspensi</a></h4>
											</div>
											<div id="collapseFive" role="tabpanel" aria-labelledby="headingFive" class="panel-collapse collapse">
												<div class="panel-body">
													<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>Suspensi Depan</td>
															@foreach($ssuspensi as $data)
															<td>{{$data->suspensi_depan}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Suspensi Belakang</td>
															@foreach($ssuspensi as $data)
															<td>{{$data->suspensi_belakang}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Rem --}}
										<div class="panel panel-default">
											<div id="headingSix" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="collapsed">Sistem Rem</a></h4>
											</div>
											<div id="collapseSix" role="tabpanel" aria-labelledby="headingSix" class="panel-collapse collapse">
												<div class="panel-body"></div>
												<table class="table">	
													<tr>
														<th></th>
														@foreach($filtercategori as $data)
														<th>{{$data->nama_mobil}}</th>
														@endforeach
													</tr>
													<tr>
														<td>ABS + EBD</td>
														@foreach($rem as $data)
														<td>{{$data->absebd}}</td>
														@endforeach
													</tr>
													<tr>
														<td>Brake Assist</td>
														@foreach($rem as $data)
														<td>{{$data->brake_assist}}</td>
														@endforeach
													</tr>
													<tr>
														<td>Rem Depan</td>
														@foreach($rem as $data)
														<td>{{$data->rem_belakang}}</td>
														@endforeach
													</tr>
												</table>
											</div>
										</div>
										{{-- Ban --}}
										<div class="panel panel-default">
											<div id="headingSeven" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="collapsed">Ban</a></h4>
											</div>
											<div id="collapseSeven" role="tabpanel" aria-labelledby="headingSeven" class="panel-collapse collapse">
												<div class="panel-body">
													<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>Ban</td>
															@foreach($ban as $data)
															<td>{{$data->ban}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Roda</td>
															@foreach($ban as $data)
															<td>{{$data->roda}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Eksterior --}}
										<div class="panel panel-default">
											<div id="headingEight" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="collapsed">Eksterior</a></h4>
											</div>
											<div id="collapseEight" role="tabpanel" aria-labelledby="headingEight" class="panel-collapse collapse">
												<div class="panel-body">
													<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>Front Lamp</td>
															@foreach($eksterior as $data)
															<td>{{$data->front_lamp}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Fog Lamp</td>
															@foreach($eksterior as $data)
															<td>{{$data->fog_lamp}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Door Mirror</td>
															@foreach($eksterior as $data)
															<td>{{$data->door_mirror}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Door Handle</td>
															@foreach($eksterior as $data)
															<td>{{$data->door_handle}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Led High Mount Stop Lamp</td>
															@foreach($eksterior as $data)
															<td>{{$data->led_high_mount_stop_lamp}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Exhaust Pipe Finisher</td>
															@foreach($eksterior as $data)
															<td>{{$data->exhaust_pipe_finisher}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Glass Print Antenna</td>
															@foreach($eksterior as $data)
															<td>{{$data->glass_print_antenna}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Auto Wiper</td>
															@foreach($eksterior as $data)
															<td>{{$data->auto_wiper}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Hydrophillic Mirror</td>
															@foreach($eksterior as $data)
															<td>{{$data->hydrophillic_mirror}}</td>
															@endforeach
														</tr>
													</table>
												</div>
											</div>
										</div>
										{{-- Interior --}}
										<div class="panel panel-default">
											<div id="headingNine" role="tab" class="panel-heading">
												<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" class="collapsed">Interior</a></h4>
											</div>
											<div id="collapseNine" role="tabpanel" aria-labelledby="headingNine" class="panel-collapse collapse">
												<div class="panel-body">
													<table class="table">	
														<tr>
															<th></th>
															@foreach($filtercategori as $data)
															<th>{{$data->nama_mobil}}</th>
															@endforeach
														</tr>
														<tr>
															<td>Audio</td>
															@foreach($interior as $data)
															<td>{{$data->audio}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Multi Information LCD Display</td>
															@foreach($interior as $data)
															<td>{{$data->mil}}</td>
															@endforeach
														</tr>
														<tr>
															<td>ECON Button</td>
															@foreach($interior as $data)
															<td>{{$data->econ}}</td>
															@endforeach
														</tr>
														<tr>
															<td>One Push Ignition System</td>
															@foreach($interior as $data)
															<td>{{$data->one_push_ignition_system}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Leather Steering & Shift Knob</td>
															@foreach($interior as $data)
															<td>{{$data->leather_steering_shift_knob}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Audio Steering Switch</td>
															@foreach($interior as $data)
															<td>{{$data->audio_steering_switch}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Paddle Shift</td>
															@foreach($interior as $data)
															<td>{{$data->paddle_shift}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Cruise Control</td>
															@foreach($interior as $data)
															<td>{{$data->cruise_control}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Auto Door Lock by Speed</td>
															@foreach($interior as $data)
															<td>{{$data->auto_door_lock_by_speed}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Power Window</td>
															@foreach($interior as $data)
															<td>{{$data->power_window}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Tweeter</td>
															@foreach($interior as $data)
															<td>{{$data->tweeter}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Trunk Capacity (liter)</td>
															@foreach($interior as $data)
															<td>{{$data->trunk_capacity}}</td>
															@endforeach
														</tr>
														<tr>
															<td>Green Glass</td>
															@foreach($interior as $data)
															<td>{{$data->green_glass}}</td>
															@endforeach
														</tr><tr>
														<td>Driver Seat Height Adjuster</td>
														@foreach($interior as $data)
														<td>{{$data->driver_seat_heigh_adjuster}}</td>
														@endforeach
													</tr>
													<tr>
														<td>Front & Rear Seat Reclining</td>
														@foreach($interior as $data)
														<td>{{$data->front_rear_seat_reclining}}</td>
														@endforeach
													</tr><tr>
													<td>NAVI System</td>
													@foreach($interior as $data)
													<td>{{$data->navi_system}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Hands-Free Telephone (HFT)</td>
													@foreach($interior as $data)
													<td>{{$data->hft}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Meter Cluster</td>
													@foreach($interior as $data)
													<td>{{$data->meter_cluster}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Auto Dimming Rearview Mirror</td>
													@foreach($interior as $data)
													<td>{{$data->auto_dimming_rearview_mirror}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Speed Sensitive Volume Compensation</td>
													@foreach($interior as $data)
													<td>{{$data->speed_sensitive_volume_compensation}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Rear Ventilation AC</td>
													@foreach($interior as $data)
													<td>{{$data->rear_ventilation_ac}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Active Noise Cancelation</td>
													@foreach($interior as $data)
													<td>{{$data->active_noise_cancelation}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Power Seat Adjustment</td>
													@foreach($interior as $data)
													<td>{{$data->power_seat_adjustment}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Diver Seat</td>
													@foreach($interior as $data)
													<td>{{$data->driver_seat}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Side Sunshade</td>
													@foreach($interior as $data)
													<td>{{$data->side_sunshade}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Power Rear Sunshade</td>
													@foreach($interior as $data)
													<td>{{$data->power_rear_sunshade}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Rear Audio Switch Control</td>
													@foreach($interior as $data)
													<td>{{$data->rear_audio_switch_control}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Auto Dimming Rear View</td>
													@foreach($interior as $data)
													<td>{{$data->auto_dimming_rear_view}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Rear Seat Fold Down</td>
													@foreach($interior as $data)
													<td>{{$data->rear_seat_fold_down}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Active Noise Cancellation</td>
													@foreach($interior as $data)
													<td>{{$data->active_noise_cancellation}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Automatic AC</td>
													@foreach($interior as $data)
													<td>{{$data->automatic_ac}}</td>
													@endforeach
												</tr>
											</table>
										</div>
									</div>
								</div>
								{{-- Keselamatan --}}
								<div class="panel panel-default">
									<div id="headingTen" role="tab" class="panel-heading">
										<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen" class="collapsed">Fitur Keselamatan</a></h4>
									</div>
									<div id="collapseTen" role="tabpanel" aria-labelledby="headingTen" class="panel-collapse collapse">
										<div class="panel-body">
											<table class="table">	
												<tr>
													<th></th>
													@foreach($filtercategori as $data)
													<th>{{$data->nama_mobil}}</th>
													@endforeach
												</tr>
												<tr>
													<td>Struktur Rangka Body</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->struktur_rangka_body}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Side Impact Beam</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->side_impact_beam}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Side Airbags</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->side_airbags}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Side Curtain Airbags</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->side_curtain_airbags}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Pedestrian Protection</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->pedestrian_protection}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Dual Front SRS Airbags</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->dual_front_srs_airbags}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Sabuk Keselamatan (Front)</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->sabuk_keselamatan_f}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Sabuk Keselamatan (Rear)</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->sabuk_keselamatan_r}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Pretensioner Load Limiter Seatbelt</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->pretensioner_load_limiter_seatbelt}}</td>
													@endforeach
												</tr>
												<tr>
													<td>ISOFIX & Lether</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->isofix_tether}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Parking Sensor</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->parking_sensor}}</td>
													@endforeach
												</tr>
												<tr>
													<td>VSA</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->vsa}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Hill Start Assist</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->hill_start_assist}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Emergency Stop Signal</td>
													@foreach($fkeselamatan as $data)
													<td>{{$data->emergency_stop_ignal}}</td>
													@endforeach
												</tr>
											</table>
										</div>
									</div>
								</div>
								{{-- Keamanan --}}
								<div class="panel panel-default">
									<div id="headingEleven" role="tab" class="panel-heading">
										<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="collapsed">Sistem Keamanan</a></h4>
									</div>
									<div id="collapseEleven" role="tabpanel" aria-labelledby="headingEleven" class="panel-collapse collapse">
										<div class="panel-body">
											<table class="table">	
												<tr>
													<th></th>
													@foreach($filtercategori as $data)
													<th>{{$data->nama_mobil}}</th>
													@endforeach
												</tr>
												<tr>
													<td>Key Type</td>
													@foreach($skeamanan as $data)
													<td>{{$data->key_type}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Keyless Entry</td>
													@foreach($skeamanan as $data)
													<td>{{$data->keyless_entry}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Immobilizer</td>
													@foreach($skeamanan as $data)
													<td>{{$data->immobilizer}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Alarm System</td>
													@foreach($skeamanan as $data)
													<td>{{$data->alarm_system}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Keyless Trunk Opener</td>
													@foreach($skeamanan as $data)
													<td>{{$data->keyless_trunk_opener}}</td>
													@endforeach
												</tr>
												<tr>
													<td>Smart Entry</td>
													@foreach($skeamanan as $data)
													<td>{{$data->smart_entry}}</td>
													@endforeach
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="tab3" role="tabpanel" class="tab-pane fade">Eksterior</div>
			<div id="tab4" role="tabpanel" class="tab-pane fade">Interior</div>
			<div id="tab5" role="tabpanel" class="tab-pane fade">
				<table class="table">	
					<tr>
						<th></th>
						@foreach($filtercategori as $data)
						<th>{{$data->nama_mobil}}</th>
						@endforeach
					</tr>
					<tr>
						<td>Harga</td>
						@foreach($filtercategori as $data)
						<td>Rp. {{number_format($data->harga,0,'','.').',-'}}</td>
						@endforeach
					</tr>
				</table>
			</div>
		</div>
	</div> {{-- . number_format( $angka , 0 , ” , ‘.’ ) . “,-“; --}}
</div>
</div>
</section>
@include('layouts.footer')
@endsection