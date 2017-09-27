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
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		@if (isset($poto) && $poto->cover)
		<p>
			{!! Html::image(asset('img/img1/'.$poto->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('cover2') ? ' has-error' : '' }}">
	{!! Form::label('cover2', 'Cover 2', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover2') !!}
		@if (isset($poto) && $poto->cover2)
		<p>
			{!! Html::image(asset('img/img2/'.$poto->cover2), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover2', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('cover3') ? ' has-error' : '' }}">
	{!! Form::label('cover3', 'Cover 3', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover3') !!}
		@if (isset($poto) && $poto->cover3)
		<p>
			{!! Html::image(asset('img/img3/'.$poto->cover3), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover3', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>