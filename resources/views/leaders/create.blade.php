@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/leaders') }}">Leader</a></li>
				<li class="active">Tambah Buku</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Leader</h2>
				</div>
				<div class="panel-body">
				{!! Form::open(['url' => route('leaders.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('leaders._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection