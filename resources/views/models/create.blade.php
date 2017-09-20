@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/models') }}">Model</a></li>
				<li class="active">Tambah Model</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
				<h2 class="panel-title">Tambah Model</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => route('models.store'),
					'method' => 'post', 'class'=>'form-horizontal']) !!}
					@include('models._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection