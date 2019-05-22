@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2 text-right">
			<a href="{{ url('cvs') }}" class="btn btn-warning"><b><i class="fas fa-hand-point-left"></i> Retour</b></a>
		</div>
		
	</div>
	<h1 class="text-center text-success">{{ $cv->titre }}</h1>
	<p class="h6 text-center"><b>Créer le: {{ $cv-> created_at }}</b></p>
	<p class="h6 text-center"><b>Dèrniere modification le: {{ $cv-> updated_at }}</b></p>
	<hr>
	<div class="row">
		<div class="col-md-3"></div>
		<img style="height: 500px" src="{{ asset('storage/'.$cv->photo) }}" class="img-thumbnail w-50 card-img-top" alt="...">
	</div>
	<div class="row">
		<div class="col-md-12">
			
			<div class="card text-white bg-info mb-3 mt-3" style="max-width: 100%;">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10"><h5 class="card-title">Nom et Prénom</h5></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-light"><b>Ajouter</b></button>
						</div>
					</div>
					
				</div>
				<div class="card-body">
					<p class="card-text"><b>{{ $cv->nomprenom }}</b></p>
				</div>
			</div>
			<div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10"><h5 class="card-title">Domaine d'étude:</h5></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-light"><b>Ajouter</b></button>
						</div>
					</div>
				</div>
				<div class="card-body">
					
					<p class="card-text">{{ $cv->domaine }}</p>
				</div>
			</div>
			<div class="card text-white bg-success mb-3" style="max-width: 100%;">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10"><h5 class="card-title">Université d'étude: </h5></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-light"><b>Ajouter</b></button>
						</div>
					</div>
					
				</div>
				<div class="card-body">
					
					<p class="card-text">{{ $cv->ecole }}</p>
				</div>
			</div>
			<div class="card text-white bg-danger mb-3" style="max-width: 100%;">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10"><h5 class="card-title">Numéro de Teléphone: </h5></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-light"><b>Ajouter</b></button>
						</div>
					</div>
					
				</div>
				<div class="card-body">
					
					<p class="card-text">{{ $cv->phone }}</p>
				</div>
			</div>
			<div class="card text-white bg-warning mb-3" style="max-width: 100%;">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10"><h5 class="card-title">Présentation</h5></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-light"><b>Ajouter</b></button>
						</div>
					</div>
					
				</div>
				<div class="card-body">
					
					<p class="card-text">{{ $cv->presentation }}</p>
				</div>
			</div>
		</div>
	</div>
			<form action="{{ url('cvs/'.$cv->id) }}" method="post">
								<!--Pour la suppression-->
								{{ csrf_field() }}
								{{method_field('DELETE')}}
							<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning">Modifier</a>
							
							@can('delete', $cv)
							<button type="submit" class="btn btn-danger">Supprimer</button>
							@endcan
						</form>
</div>
<!--<div class="container">
			
		<h1 class="text-center">{{ $cv->titre }}</h1>
		<hr>
		<div class="row">
				<img style="height: 500px" src="{{ asset('storage/'.$cv->photo) }}" class="img-thumbnail w-50 card-img-top" alt="...">
		</div>
		<hr>
		<h2><b>{{ $cv->nomprenom }}</b></h2>
		<p class="h4"><b>Domaine d'étude: <span style="color:#0094FFFF">{{ $cv->domaine }}</span></b></p>
		<p class="h4"><b>Université d'étude: <span style="color:#0094FFFF">{{ $cv->ecole }}</span></b></p>
		<p class="h4"><b>Numéro de Teléphone: <span style="color:#0094FFFF">{{ $cv->phone }}</span></b></p>
		<p class="h4">Présentation: </p>
		<p  class="h6 border border-rounded p-2">{{ $cv->presentation }}</p>
</div>-->
@endsection