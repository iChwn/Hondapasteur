<div class="form-group{{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
	{!! Form::label('nama_mobil', 'Nama Mobil', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama_mobil', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_mobil', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('modell_id') ? 'has-error' : '' !!}">
	{!! Form::label('modell_id', 'Nama Model', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('modell_id', [''=>'']+App\Modell::pluck('nama_model','id')->all(), null) !!}
		{!! $errors->first('modell_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
{!! Form::label('harga', 'Harga', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::number('harga', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
	{!! Form::label('deskripsi', 'Deskripsi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('deskripsi', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('spesifikasi') ? ' has-error' : '' }}">
	{!! Form::label('spesifikasi', 'Spesifikasi', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('spesifikasi', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('spesifikasi', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		@if (isset($mobil) && $mobil->cover)
		<p>
			{!! Html::image(asset('img/'.$mobil->cover), null, ['class'=>'img-rounded img-responsive']) !!}
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