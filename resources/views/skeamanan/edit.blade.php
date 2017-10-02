@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/skeamanans') }}">Sistem Keamanan</a></li>
				<li class="active">Ubah Sistem Keamanan</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah Profil Sistem Keamanan</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($skeamanan, ['url' => route('skeamanans.update', $skeamanan->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('skeamanan._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection