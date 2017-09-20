<div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
	{!! Form::label('about', 'About', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('about', null, ['class'=>'form-control']) !!}
		{!! $errors->first('about', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
	{!! Form::label('service', 'Service', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('service', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('service', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('dekservice') ? ' has-error' : '' }}">
	{!! Form::label('dekservice', 'Deskripsi Service', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('dekservice', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('dekservice', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('motto') ? ' has-error' : '' }}">
	{!! Form::label('motto', 'Motto', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('motto', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('motto', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>