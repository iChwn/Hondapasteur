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
 <div class="form-group{{ $errors->has('absebd') ? ' has-error' : '' }}">
{!! Form::label('absebd', 'ABS + EBD', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('absebd', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('absebd', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('brake_assist') ? ' has-error' : '' }}">
{!! Form::label('brake_assist', 'Brake Assist (BA)', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('brake_assist', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('brake_assist', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('rem_depan') ? ' has-error' : '' }}">
{!! Form::label('rem_depan', 'Rem Depan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('rem_depan', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('rem_depan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('rem_belakang') ? ' has-error' : '' }}">
{!! Form::label('rem_belakang', 'Rem Belakang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('rem_belakang', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('rem_belakang', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
	

	