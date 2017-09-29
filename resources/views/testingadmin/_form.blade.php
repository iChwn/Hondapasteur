<div class="form-group {!! $errors->has('mobil_id') ? 'has-error' : '' !!}">
	{!! Form::label('mobil_id', 'Nama Mobil', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('mobil_id', [''=>'']+App\Mobil::pluck('nama_mobil','id')->all(), null) !!}
		{!! $errors->first('mobil_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('modell_id') ? 'has-error' : '' !!}">
	{!! Form::label('modell_id', 'Nama Model', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('modell_id', [''=>'']+App\Modell::pluck('nama_model','id')->all(), null) !!}
		{!! $errors->first('modell_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('audio') ? ' has-error' : '' }}">
{!! Form::label('audio', 'Audio', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('audio', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('audio', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('mil') ? ' has-error' : '' }}">
{!! Form::label('mil', 'Multi Information LCD Display (MIL)', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('mil', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('mil', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('econ') ? ' has-error' : '' }}">
{!! Form::label('econ', 'Econ', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('econ', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('econ', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('one_push_ignition_system') ? ' has-error' : '' }}">
{!! Form::label('one_push_ignition_system', 'One Push Ignition System', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('one_push_ignition_system', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('one_push_ignition_system', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('leather_steering_shift_knob') ? ' has-error' : '' }}">
{!! Form::label('leather_steering_shift_knob', 'Leather Steering Shift Knob', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('leather_steering_shift_knob', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('leather_steering_shift_knob', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('audio_steering_switch') ? ' has-error' : '' }}">
{!! Form::label('audio_steering_switch', 'Audio Steering Switch', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('audio_steering_switch', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('audio_steering_switch', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('paddle_shift') ? ' has-error' : '' }}">
{!! Form::label('paddle_shift', 'Paddle Shift', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('paddle_shift', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('paddle_shift', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('cruise_control') ? ' has-error' : '' }}">
{!! Form::label('cruise_control', 'Cruise Control', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('cruise_control', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('cruise_control', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('auto_door_lock_by_speed') ? ' has-error' : '' }}">
{!! Form::label('auto_door_lock_by_speed', 'Auto Door Lock by Speed', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('auto_door_lock_by_speed', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('auto_door_lock_by_speed', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('power_window') ? ' has-error' : '' }}">
{!! Form::label('power_window', 'Power Window', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('power_window', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('power_window', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('tweeter') ? ' has-error' : '' }}">
{!! Form::label('tweeter', 'Tweeter', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('tweeter', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('tweeter', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('trunk_capacity') ? ' has-error' : '' }}">
{!! Form::label('trunk_capacity', 'Trunk Capacity (liter)', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('trunk_capacity', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('trunk_capacity', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('green_glass') ? ' has-error' : '' }}">
{!! Form::label('green_glass', 'Green Glass', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('green_glass', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('green_glass', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('driver_seat_heigh_adjuster') ? ' has-error' : '' }}">
{!! Form::label('driver_seat_heigh_adjuster', 'Driver Seat Heigh Adjuster', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('driver_seat_heigh_adjuster', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('driver_seat_heigh_adjuster', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('front_rear_seat_reclining') ? ' has-error' : '' }}">
{!! Form::label('front_rear_seat_reclining', 'Front Rear Seat Reclining', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('front_rear_seat_reclining', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('front_rear_seat_reclining', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('navi_system') ? ' has-error' : '' }}">
{!! Form::label('navi_system', 'Navi System', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('navi_system', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('navi_system', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('hft') ? ' has-error' : '' }}">
{!! Form::label('hft', 'Hands-Free Telephone (HFT)', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('hft', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('hft', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('meter_cluster') ? ' has-error' : '' }}">
{!! Form::label('meter_cluster', 'Meter Cluster', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('meter_cluster', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('meter_cluster', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('auto_dimming_rearview_mirror') ? ' has-error' : '' }}">
{!! Form::label('auto_dimming_rearview_mirror', 'Auto Dimming Rearview Mirror', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('auto_dimming_rearview_mirror', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('auto_dimming_rearview_mirror', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('testr') ? ' has-error' : '' }}">
{!! Form::label('testr', 'testr', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('testr', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('testr', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('speed_sensitive_volume_compensation') ? ' has-error' : '' }}">
{!! Form::label('speed_sensitive_volume_compensation', 'Speed Sensitive Volume Compensation', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('speed_sensitive_volume_compensation', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('speed_sensitive_volume_compensation', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('rear_ventilation_ac') ? ' has-error' : '' }}">
{!! Form::label('rear_ventilation_ac', 'Rear Ventilation AC', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('rear_ventilation_ac', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('rear_ventilation_ac', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('seat_trim_material') ? ' has-error' : '' }}">
{!! Form::label('seat_trim_material', 'Seat Trim Material', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('seat_trim_material', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('seat_trim_material', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('power_seat_adjustmenta') ? ' has-error' : '' }}">
{!! Form::label('active_noise_cancelation', 'Active Noise Cancelation', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('active_noise_cancelation', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('active_noise_cancelation', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('power_seat_adjustment') ? ' has-error' : '' }}">
{!! Form::label('power_seat_adjustment', 'Power Seat Adjustment', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('power_seat_adjustment', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('power_seat_adjustment', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('driver_seat') ? ' has-error' : '' }}">
{!! Form::label('driver_seat', 'Driver Seat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('driver_seat', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('driver_seat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('side_sunshade') ? ' has-error' : '' }}">
{!! Form::label('side_sunshade', 'Side Sunshade', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('side_sunshade', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('side_sunshade', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('power_rear_sunshade') ? ' has-error' : '' }}">
{!! Form::label('power_rear_sunshade', 'Power Rear Sunshade', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('power_rear_sunshade', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('power_rear_sunshade', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('rear_audio_switch_control') ? ' has-error' : '' }}">
{!! Form::label('rear_audio_switch_control', 'Rear Audio Switch Control', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('rear_audio_switch_control', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('rear_audio_switch_control', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('auto_dimming_rear_view') ? ' has-error' : '' }}">
{!! Form::label('auto_dimming_rear_view', 'Auto Dimming Rear View', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('auto_dimming_rear_view', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('auto_dimming_rear_view', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('rear_seat_fold_down') ? ' has-error' : '' }}">
{!! Form::label('rear_seat_fold_down', 'Rear Seat Fold Down', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('rear_seat_fold_down', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('rear_seat_fold_down', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('active_noise_cancellation') ? ' has-error' : '' }}">
{!! Form::label('active_noise_cancellation', 'Active Noise Cancellation', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('active_noise_cancellation', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('active_noise_cancellation', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('automatic_ac') ? ' has-error' : '' }}">
{!! Form::label('automatic_ac', 'Automatic AC', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('automatic_ac', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('automatic_ac', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
