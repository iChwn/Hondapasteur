@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/perusahaans') }}">Perusahaan</a></li>
				<li class="active">Ubah Profil Perusahaan</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah Profil Perusahaan</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($perusahaan, ['url' => route('perusahaans.update', $perusahaan->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('perusahaans._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection