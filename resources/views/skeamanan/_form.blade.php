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
<div class="form-group{{ $errors->has('key_type') ? ' has-error' : '' }}">
{!! Form::label('key_type', 'Key Type', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('key_type', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('key_type', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('keyless_entry') ? ' has-error' : '' }}">
{!! Form::label('keyless_entry', 'Keyless Entry', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('keyless_entry', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('keyless_entry', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('immobilizer') ? ' has-error' : '' }}">
{!! Form::label('immobilizer', 'Immobilizer', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('immobilizer', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('immobilizer', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('alarm_system') ? ' has-error' : '' }}">
{!! Form::label('alarm_system', 'Alarm System', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('alarm_system', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('alarm_system', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('keyless_trunk_opener') ? ' has-error' : '' }}">
{!! Form::label('keyless_trunk_opener', 'Keyless Trunk Opener', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('keyless_trunk_opener', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('keyless_trunk_opener', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('smart_entry') ? ' has-error' : '' }}">
{!! Form::label('smart_entry', 'Smart Entry', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('smart_entry', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('smart_entry', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
