
<div class="form-group {!! $errors->has('modell_id') ? 'has-error' : '' !!}">
	{!! Form::label('modell_id', 'Nama Model', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('modell_id', [''=>'']+App\Modell::pluck('nama_model','id')->all(), null) !!}
		{!! $errors->first('modell_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('in1') ? ' has-error' : '' }}">
	{!! Form::label('in1', 'Interior 1', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('in1') !!}
		@if (isset($intereks) && $intereks->in1)
		<p>
			{!! Html::image(asset('img/intereks/interior1/'.$intereks->in1), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('in1', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('in2') ? ' has-error' : '' }}">
	{!! Form::label('in2', 'Interior 2', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('in2') !!}
		@if (isset($intereks) && $intereks->in2)
		<p>
			{!! Html::image(asset('img/intereks/interior2/'.$intereks->in2), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('in2', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('in3') ? ' has-error' : '' }}">
	{!! Form::label('in3', 'Interior 3', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('in3') !!}
		@if (isset($intereks) && $intereks->in3)
		<p>
			{!! Html::image(asset('img/intereks/interior3/'.$intereks->in3), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('in3', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('ek1') ? ' has-error' : '' }}">
	{!! Form::label('ek1', 'Eksterior 1', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('ek1') !!}
		@if (isset($intereks) && $intereks->ek1)
		<p>
			{!! Html::image(asset('img/intereks/eksterior1/'.$intereks->ek1), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('ek1', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('ek2') ? ' has-error' : '' }}">
	{!! Form::label('ek2', 'Eksterior 2', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('ek2') !!}
		@if (isset($intereks) && $intereks->ek2)
		<p>
			{!! Html::image(asset('img/intereks/eksterior2/'.$intereks->ek2), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('ek2', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('ek3') ? ' has-error' : '' }}">
	{!! Form::label('ek3', 'Eksterior 3', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('ek3') !!}
		@if (isset($intereks) && $intereks->ek3)
		<p>
			{!! Html::image(asset('img/intereks/eksterior3/'.$intereks->ek3), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('ek3', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>