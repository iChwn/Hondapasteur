@extends('layouts.app')
@section('content')
      <div class="container">
        <div class="row wow fadeIn">
        <h1>Selamat Datang Di Dashboard</h1>
          <div class="col-sm-12">
            <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
              <div class="panel panel-default">
                <div id="headingOne" role="tab" class="panel-heading">
                  <h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Model</a></h4>
                </div>
                <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                  <div class="panel-body">
					<p> <a class="btn btn-primary" href="{{ route('models.create') }}">Tambah</a> </p>
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="headingTwo" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Mobil</a></h4>
                </div>
                <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="headingThree" role="tab" class="panel-heading">
                  <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Collapsible Group Item #3</a></h4>
                </div>
                <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

{{-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Model</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Model</h2>
				</div>
				<div class="panel-body">
					<p> <a class="btn btn-primary" href="{{ route('models.create') }}">Tambah</a> </p>
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
			</div>
		</div>
	</div>
</div> --}}
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection