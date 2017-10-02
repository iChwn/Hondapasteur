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
<div class="form-group{{ $errors->has('struktur_rangka_body') ? ' has-error' : '' }}">
{!! Form::label('struktur_rangka_body', 'Struktur Rangka Body', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('struktur_rangka_body', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('struktur_rangka_body', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('side_impact_beam') ? ' has-error' : '' }}">
{!! Form::label('side_impact_beam', 'Side Impact Beam', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('side_impact_beam', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('side_impact_beam', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('side_airbags') ? ' has-error' : '' }}">
{!! Form::label('side_airbags', 'Side Airbags', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('side_airbags', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('side_airbags', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('side_curtain_airbags') ? ' has-error' : '' }}">
{!! Form::label('side_curtain_airbags', 'Side Curtainc Airbags', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('side_curtain_airbags', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('side_curtain_airbags', '<p class="help-block">:message</p>') !!}
	</div>
</div><div class="form-group{{ $errors->has('pedestrian_protection') ? ' has-error' : '' }}">
{!! Form::label('pedestrian_protection', 'Pedestrian Protection', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('pedestrian_protection', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('pedestrian_protection', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('dual_front_srs_airbags') ? ' has-error' : '' }}">
{!! Form::label('dual_front_srs_airbags', 'Dual Front SRS Airbags', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('dual_front_srs_airbags', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('dual_front_srs_airbags', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('sabuk_keselamatan_f') ? ' has-error' : '' }}">
{!! Form::label('sabuk_keselamatan_f', 'Sabuk Keselamatan (Front)', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('sabuk_keselamatan_f', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('sabuk_keselamatan_f', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('sabuk_keselamatan_r') ? ' has-error' : '' }}">
{!! Form::label('sabuk_keselamatan_r', 'Sabuk Keselamatan (Rear)', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('sabuk_keselamatan_r', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('sabuk_keselamatan_r', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('pretensioner_load_limiter_seatbelt') ? ' has-error' : '' }}">
{!! Form::label('pretensioner_load_limiter_seatbelt', 'Pretensioner Load Limiter Seatbelt', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('pretensioner_load_limiter_seatbelt', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('pretensioner_load_limiter_seatbelt', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('isofix_tether') ? ' has-error' : '' }}">
{!! Form::label('isofix_tether', 'Isofix Tether', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('isofix_tether', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('isofix_tether', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('parking_sensor') ? ' has-error' : '' }}">
{!! Form::label('parking_sensor', 'Parking Sensor', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('parking_sensor', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('parking_sensor', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('vsa') ? ' has-error' : '' }}">
{!! Form::label('vsa', 'VSA', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('vsa', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('vsa', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('hill_start_assist') ? ' has-error' : '' }}">
{!! Form::label('hill_start_assist', 'Hill Start Assist', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('hill_start_assist', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('hill_start_assist', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('emergency_stop_ignal') ? ' has-error' : '' }}">
{!! Form::label('emergency_stop_ignal', 'Emergency Stop Ignal', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
	{!! Form::text('emergency_stop_ignal', null, ['class'=>'form-control', 'min'=>1]) !!}
	{!! $errors->first('emergency_stop_ignal', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
