<div class="form-group {!! $errors->has('mobil_id') ? 'has-error' : '' !!}">
	{!! Form::label('mobil_id', 'Nama Mobil', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('mobil_id', [''=>'']+App\Mobil::pluck('nama_mobil','id')->all(), null) !!}
		{!! $errors->first('mobil_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('gambar_1') ? ' has-error' : '' }}">
	{!! Form::label('gambar_1', 'Gambar 1', ['class'=>'col-md-2 control-label','enctype'=>'multipart/form-data']) !!}
	<div class="col-md-4">
		{!! Form::file('gambar_1') !!}
		@if (isset($mobil) && $mobil->gambar_1)
		<p>
			{!! Html::image(asset('img/'.$mobil->gambar_1), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('gambar_1', '<p class="help-block">:message</p>') !!}
	</div>
</div>
{{-- <div class="form-group{{ $errors->has('gambar_2') ? ' has-error' : '' }}">
	{!! Form::label('gambar_2', 'Gambar 2', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('gambar_2') !!}
		@if (isset($mobil) && $mobil->gambar_2)
		<p>
			{!! Html::image(asset('img/'.$mobil->gambar_2), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('gambar_2', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('gambar_3') ? ' has-error' : '' }}">
	{!! Form::label('gambar_3', 'Gambar 3', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('gambar_3') !!}
		@if (isset($mobil) && $mobil->gambar_3)
		<p>
			{!! Html::image(asset('img/'.$mobil->gambar_3), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('gambar_3', '<p class="help-block">:message</p>') !!}
	</div>
</div> --}}
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>