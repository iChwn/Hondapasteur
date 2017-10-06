<div class="form-group{{ $errors->has('nama_model') ? ' has-error' : '' }}">
{!! Form::label('nama_model', 'Nama Model', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('nama_model', null, ['class'=>'form-control']) !!}
	{!! $errors->first('nama_model', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
	{!! Form::label('deskripsi', 'Deskripsi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('deskripsi', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>