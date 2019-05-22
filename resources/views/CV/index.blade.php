@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>La liste de mes cv</h1>
			<div class="text-right">
				<a href="{{ url('cvs/create') }}" class="btn btn-success"><b>Nouveau CV</b></a>
			</div>
			<div class="row">
			<?php foreach ($cvs as $cv): ?>
			<div class="card-group col-md-4 mb-2 text-center">
				<div class="card">
					<img style="height: 200px" src="{{ asset('storage/'.$cv->photo) }}" class="img-thumbnail w-100 card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">{{ $cv->titre }}</h5>
						<p class="card-text">{{ $cv->nomprenom }}</p>
						<p class="card-text">Domaine d'étude: {{ $cv->domaine }}</p>
						<p class="card-text">Tèl: {{ $cv->phone }}</p>
						<p>
							<form action="{{ url('cvs/'.$cv->id) }}" method="post">
								<!--Pour la suppression-->
								{{ csrf_field() }}
								{{method_field('DELETE')}}
							<a href="{{ url('cvs/'.$cv->id.'/show') }}" class="btn btn-primary">Détails</a>
							<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning">Modifier</a>
							
							@can('delete', $cv)
							<button type="submit" class="btn btn-danger">Supprimer</button>
							@endcan
						</form>
						</p>
					</div>
				</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
</div>
@endsection