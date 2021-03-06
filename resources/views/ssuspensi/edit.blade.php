@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/ssuspensis') }}">Sistem Suspensi</a></li>
				<li class="active">Ubah Profil ssuspensi</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah Profil Sistem Suspensi</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($ssuspensi, ['url' => route('ssuspensis.update', $ssuspensi->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('ssuspensi._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection