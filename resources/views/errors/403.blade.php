@extends('layouts.app')



@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center text-danger">
			<h2><b><i class="fas fa-exclamation-triangle"></i> Cette page est non autoriser !! <i class="fas fa-exclamation-triangle"></i></b></h2>
			<hr>
			<a class="btn btn-info" href="{{ url('cvs') }}"><b><i class="fas fa-hand-point-left"></i> Retour</b></a>
		</div>
	</div>
</div>


@endsection