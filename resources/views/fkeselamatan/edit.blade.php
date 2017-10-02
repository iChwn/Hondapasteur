@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/fkeselamatans') }}">Fitur Keselamatan</a></li>
				<li class="active">Ubah Fitur Keselamatan</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah Profil Fitur Keselamatan</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($fkeselamatan, ['url' => route('fkeselamatans.update', $fkeselamatan->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('fkeselamatan._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection