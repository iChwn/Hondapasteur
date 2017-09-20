@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/galeris') }}">Galeri</a></li>
				<li class="active">Tambah Galeri</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
				<h2 class="panel-title">Tambah Galeri</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => route('galeris.store'),
					'method' => 'post', 'class'=>'form-horizontal']) !!}
					@include('galeris._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection