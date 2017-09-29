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
<div class="form-group{{ $errors->has('front_lamp') ? ' has-error' : '' }}">
{!! Form::label('front_lamp', 'Front Lamp', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('front_lamp', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('front_lamp', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('fog_lamp') ? ' has-error' : '' }}">
{!! Form::label('fog_lamp', 'Fog Lamp', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('fog_lamp', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('fog_lamp', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('door_mirror') ? ' has-error' : '' }}">
{!! Form::label('door_mirror', 'Door Mirror', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('door_mirror', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('door_mirror', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('door_handle') ? ' has-error' : '' }}">
{!! Form::label('door_handle', 'Door Handle', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('door_handle', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('door_handle', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('led_high_mount_stop_lamp') ? ' has-error' : '' }}">
{!! Form::label('led_high_mount_stop_lamp', 'Led High Mount Stop Lamp', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('led_high_mount_stop_lamp', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('led_high_mount_stop_lamp', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('exhaust_pipe_finisher') ? ' has-error' : '' }}">
{!! Form::label('exhaust_pipe_finisher', 'Exhaust Pipe Finisher', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('exhaust_pipe_finisher', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('exhaust_pipe_finisher', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('glass_print_antenna') ? ' has-error' : '' }}">
{!! Form::label('glass_print_antenna', 'Glass Print Antenna', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('glass_print_antenna', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('glass_print_antenna', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('auto_wiper') ? ' has-error' : '' }}">
{!! Form::label('auto_wiper', 'Auto Wiper', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('auto_wiper', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('auto_wiper', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('hydrophillic_mirror') ? ' has-error' : '' }}">
{!! Form::label('hydrophillic_mirror', 'Hydrophillic Mirror', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('hydrophillic_mirror', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('hydrophillic_mirror', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
