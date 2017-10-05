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
 <div class="form-group{{ $errors->has('tipe') ? ' has-error' : '' }}">
{!! Form::label('tipe', 'Tipe', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('tipe', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('tipe', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no1') ? ' has-error' : '' }}">
{!! Form::label('no1', '1', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('no1', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('no1', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no2') ? ' has-error' : '' }}">
{!! Form::label('no2', '2', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('no2', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('no2', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no3') ? ' has-error' : '' }}">
{!! Form::label('no3', '3', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('no3', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('no3', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no4') ? ' has-error' : '' }}">
{!! Form::label('no4', '4', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('no4', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('no4', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no5') ? ' has-error' : '' }}">
{!! Form::label('no5', '5', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('no5', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('no5', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no6') ? ' has-error' : '' }}">
{!! Form::label('no6', '6', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('no6', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('no6', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('reverse') ? ' has-error' : '' }}">
{!! Form::label('reverse', 'Reverse', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('reverse', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('reverse', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('final_gear') ? ' has-error' : '' }}">
{!! Form::label('final_gear', 'Final Gear', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('final_gear', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('final_gear', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>