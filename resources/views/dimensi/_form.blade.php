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
 <div class="form-group{{ $errors->has('plt') ? ' has-error' : '' }}">
{!! Form::label('plt', 'Panjang x Lebar x Tinggi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('plt', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('plt', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('jarak_sumbu_roda') ? ' has-error' : '' }}">
{!! Form::label('jarak_sumbu_roda', 'Jarak Sumbu Roda', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('jarak_sumbu_roda', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('jarak_sumbu_roda', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('jarak_pijak_db') ? ' has-error' : '' }}">
{!! Form::label('jarak_pijak_db', 'Jarak Pijak Depan/Belakang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('jarak_pijak_db', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('jarak_pijak_db', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('kapasitas_tangki') ? ' has-error' : '' }}">
{!! Form::label('kapasitas_tangki', 'Kapasitas Tangki', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('kapasitas_tangki', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('kapasitas_tangki', '<p class="help-block">:message</p>') !!}
	</div>
</div>
 <div class="form-group{{ $errors->has('berat_kosong') ? ' has-error' : '' }}">
{!! Form::label('berat_kosong', 'Berat Kosong', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('berat_kosong', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('berat_kosong', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>