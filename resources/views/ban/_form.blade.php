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
<div class="form-group{{ $errors->has('ban') ? ' has-error' : '' }}">
{!! Form::label('ban', 'Ban', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('ban', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('ban', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('roda') ? ' has-error' : '' }}">
	{!! Form::label('roda', 'Roda', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('roda', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('roda', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>


