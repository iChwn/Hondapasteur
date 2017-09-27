<div class="form-group{{ $errors->has('tipe') ? ' has-error' : '' }}">
{!! Form::label('tipe', 'Tipe', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('tipe', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('tipe', '<p class="help-block">:message</p>') !!}
	</div>
</div>
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
 <div class="form-group{{ $errors->has('sistem_bbm') ? ' has-error' : '' }}">
{!! Form::label('sistem_bbm', 'Sistem BBM', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('sistem_bbm', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('sistem_bbm', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('diameter_langkah') ? ' has-error' : '' }}">
{!! Form::label('diameter_langkah', 'Diameter Langkah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('diameter_langkah', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('diameter_langkah', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('silinder') ? ' has-error' : '' }}">
{!! Form::label('silinder', 'silinder', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('silinder', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('silinder', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('perbandingan_kompresi') ? ' has-error' : '' }}">
{!! Form::label('perbandingan_kompresi', 'Perbandingan Kompresi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('perbandingan_kompresi', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('perbandingan_kompresi', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('daya_maksimum') ? ' has-error' : '' }}">
{!! Form::label('daya_maksimum', 'Daya Maksimum', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('daya_maksimum', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('daya_maksimum', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('momen_puntri_maksimum') ? ' has-error' : '' }}">
{!! Form::label('momen_puntri_maksimum', 'Mamen Puntri Max', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('momen_puntri_maksimum', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('momen_puntri_maksimum', '<p class="help-block">:message</p>') !!}
	</div>
</div> 
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>