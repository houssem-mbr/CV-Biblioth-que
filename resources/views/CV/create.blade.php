@extends('layouts.app')
@section ('content')

<div class="container">
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2 text-right">
			<a href="{{ url('cvs') }}" class="btn btn-warning"><b><i class="fas fa-hand-point-left"></i> Retour</b></a>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('cvs') }}" method="post" enctype="multipart/form-data">


				{{ csrf_field() }} <!-- auto cont pour stocker les imputs avant l'envoi à la BD -->

				<div class="form-group <?php if ($errors->get('titre')): ?>alert alert-danger<?php endif ?>">
					<label for="titre">Titre</label>
					<input type="text" name="titre" class="form-control" value="{{ old('titre') }}">
					<?php if ($errors->get('titre')): ?>
						<?php foreach ($errors->get('titre') as $message): ?>
						<li>{{$message}}</li>
					<?php endforeach ?>
					<?php endif ?>
					
				</div>

				<div class="form-group <?php if ($errors->get('nomprenom')): ?>alert alert-danger<?php endif ?>">
					<label for="nomprenom">Nom et Prénom</label>
					<input type="text" name="nomprenom" class="form-control" value="{{ old('nomprenom') }}">
					<?php if ($errors->get('nomprenom')): ?>
						<?php foreach ($errors->get('nomprenom') as $message): ?>
						<li>{{$message}}</li>
					<?php endforeach ?>
					<?php endif ?>
					
				</div>

				<div class="form-group <?php if ($errors->get('domaine')): ?>alert alert-danger<?php endif ?>">
					<label for="domaine">Domaine d'étude</label>
					<input type="text" name="domaine" class="form-control" value="{{ old('domaine') }}">
					<?php if ($errors->get('domaine')): ?>
						<?php foreach ($errors->get('domaine') as $message): ?>
						<li>{{$message}}</li>
					<?php endforeach ?>
					<?php endif ?>
					
				</div>

				<div class="form-group <?php if ($errors->get('ecole')): ?>alert alert-danger<?php endif ?>">
					<label for="ecole">Université d'étude</label>
					<input type="text" name="ecole" class="form-control" value="{{ old('ecole') }}">
					<?php if ($errors->get('ecole')): ?>
						<?php foreach ($errors->get('ecole') as $message): ?>
						<li>{{$message}}</li>
					<?php endforeach ?>
					<?php endif ?>
					
				</div>

				<div class="form-group <?php if ($errors->get('phone')): ?>alert alert-danger<?php endif ?>">
					<label for="phone">Numéro de Teléphone</label>
					<input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
					<?php if ($errors->get('phone')): ?>
						<?php foreach ($errors->get('phone') as $message): ?>
						<li>{{$message}}</li>
					<?php endforeach ?>
					<?php endif ?>
					
				</div>

				<div class="form-group <?php if ($errors->get('presentation')): ?>alert alert-danger<?php endif ?>">
					<label for="presentation">Présentation</label>
					<textarea  name="presentation" class="form-control" rows="8">{{ old('presentation') }}</textarea>
					<?php if ($errors->get('presentation')): ?>
						<?php foreach ($errors->get('presentation') as $message): ?>
						<li>{{$message}}</li>
					<?php endforeach ?>
					<?php endif ?>
				</div>
				<div class="form-group">
					<label for="">Image</label>
					<input class="form-control" type="file" name="photo">
				</div>

				<div class="form-group">
					<input type="submit" value="enregistre" class="form-control btn btn-primary">
				</div>
				
				
			</form>
			
		</div>
	</div>
</div>
@endsection