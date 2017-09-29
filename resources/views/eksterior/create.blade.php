@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/eksteriors') }}">Eksterior</a></li>
				<li class="active">Tambah Eksterior</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Eksterior</h2>
				</div>
				<div class="panel-body">
				{!! Form::open(['url' => route('eksteriors.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('eksterior._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection