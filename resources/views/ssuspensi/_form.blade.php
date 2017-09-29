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
 <div class="form-group{{ $errors->has('suspensi_depan') ? ' has-error' : '' }}">
{!! Form::label('suspensi_depan', 'Suspensi Depan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('suspensi_depan', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('suspensi_depan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('suspensi_belakang') ? ' has-error' : '' }}">
{!! Form::label('suspensi_belakang', 'suspensi_belakang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('suspensi_belakang', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('suspensi_belakang', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
	

	