@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row wow fadeIn">
		<h1>Selamat Datang Di Menu Eksterior</h1>
		<div class="col-sm-12">
			<div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
				<div class="panel panel-default">
					<div id="headingOne" role="tab" class="panel-heading">
						<h4  class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Eksterior</a></h4>
					</div>
					<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<p> <a class="btn btn-primary" href="{{ route('eksteriors.create') }}">Tambah</a> </p>
							{!! $html->table(['class'=>'table-striped']) !!}
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div id="headingThree" role="tab" class="panel-heading">
						<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">Collapsible Group Item #3</a></h4>
					</div>
					<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
						<div class="panel-body">
							<?php


							for( $a=10;$a>0;$a--){
								for($i=1; $i<=$a; $i++){
									echo "&nbsp";

								}
								for($a1=10;$a1>$a;$a1--){
									echo"*";
								}

								echo"<br>";
							}



							for( $a=10;$a>0;$a--)
							{
								for($b=10;$b>$a;$b--)
								{
									echo "*";
								}
								echo"<br>";

							} 
							for( $a=10;$a>0;$a--){
								for($i=0; $i<=$a; $i++){
									echo "&nbsp";

								}
								for($a1=11;$a1>$a;$a1--){
									echo"*";
								}
								for($a2=10;$a2>$a;$a2--){
									echo"*";
								}
								echo"<br>";
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection  