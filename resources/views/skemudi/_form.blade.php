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
 <div class="form-group{{ $errors->has('sistem') ? ' has-error' : '' }}">
{!! Form::label('sistem', 'Sistem', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('sistem', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('sistem', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('tilt_steering') ? ' has-error' : '' }}">
{!! Form::label('tilt_steering', 'Tilt Steering', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('tilt_steering', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('tilt_steering', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('telescopic_steering') ? ' has-error' : '' }}">
{!! Form::label('telescopic_steering', 'Telescopic Steering', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('telescopic_steering', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('telescopic_steering', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
	

	