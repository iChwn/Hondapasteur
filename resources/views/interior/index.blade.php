@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row wow fadeIn">
		<h1>Selamat Datang Di Menu Interior</h1>
		<div class="col-sm-12">
			<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
				<div class="panel panel-default">
					<div id="headingOne" role="tab" class="panel-heading">
						<h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Interior</a></h4>
					</div>
					<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<p> <a class="btn btn-primary" href="{{ route('interiors.create') }}">Tambah</a> </p>
							{!! $html->table(['class'=>'table-striped']) !!}
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div id="headingThree" role="tab" class="panel-heading">
						<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Lebih Lengkap</a></h4>
					</div>
					<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
						<div class="panel-body">
							<table class="table">	
								<tr>
									<th>Nama Mobil</th>
									@foreach($interior as $data)
									<th>{{$data->mobil_id}}</th>
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
	</div>
</div>
</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection  