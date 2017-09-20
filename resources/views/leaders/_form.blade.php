<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama Leader', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
	{!! Form::label('jabatan', 'Jabatan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('jabatan', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('link_fb') ? ' has-error' : '' }}">
	{!! Form::label('link_fb', 'Link FB', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('link_fb', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('link_fb', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('link_google') ? ' has-error' : '' }}">
	{!! Form::label('link_google', 'Link Google', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('link_google', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('link_google', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		@if (isset($leader) && $leader->cover)
		<p>
			{!! Html::image(asset('img/'.$leader->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>