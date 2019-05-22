@extends('layouts.app')
@section ('content')
<?php if (count($errors)): ?>
<div class="alert alert-danger" role="alert">
	<ul>
		<?php foreach ($errors->all() as $message): ?>
		<li>{{$message}}</li>
		<?php endforeach ?>
	</ul>
</div>
<?php endif ?>
<div class="container">
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2 text-right">
			<a href="{{ url('cvs') }}" class="btn btn-warning"><b><i class="fas fa-hand-point-left"></i> Retour</b></a>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			
			<?php if (session()->has('success')): ?>
			
			<div class="alert alert-success">
				{{ session()->get('success') }}
			</div>
			<?php endif ?>
			<form action="{{ url('cvs/'.$cv->id) }}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				{{ csrf_field() }} <!-- auto cont pour stocker les imputs avant l'envoi à la BD -->
				
				<div class="form-group">
					<label for="titre">Titre</label>
					<input type="text" name="titre" class="form-control" value="{{ $cv->titre }}">
				</div>
				
				<div class="form-group">
					<label for="titre">Nom et Prénom</label>
					<input type="text" name="nomprenom" class="form-control" value="{{ $cv->nomprenom }}">
				</div>

				<div class="form-group">
					<label for="domaine">Domaine d'étude</label>
					<input type="text" name="domaine" class="form-control" value="{{ $cv->domaine }}">
				</div>

				<div class="form-group">
					<label for="ecole">Université d'étude</label>
					<input type="text" name="ecole" class="form-control" value="{{ $cv->ecole }}">
				</div>

				<div class="form-group">
					<label for="phone">Numéro de Teléphone</label>
					<input type="number" name="phone" class="form-control" value="{{ $cv->phone }}">
				</div>

				
				<div class="form-group">
					<label for="presentation">Présentation</label>
					<textarea  name="presentation" class="form-control" rows="8">{{ $cv->presentation }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Image</label>
					<input class="form-control" type="file" name="photo" value="{{ $cv->photo }}">
				</div>
				<div class="form-group">
					<input type="submit" value="Modifier" class="form-control btn btn-success">
					<a href="{{ url('cvs') }}" class="btn btn-danger form-control mt-2"><b>Annuler</b></a>
				</div>
				
				
			</form>
			
		</div>
	</div>
</div>
@endsection