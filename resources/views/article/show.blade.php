@extends('layouts.app')
@section ('content')
<div class="row mt-4 text-right mb-5 mr-3">
	<div class="col-md-12">
		<a href="{{ url('articles') }}" class="btn btn-info"><b><i class="fas fa-hand-point-left"></i> Retour au articles</b></a>
	</div>
</div>
<br><br>
<div style="background-color: #E0E0E0FF" class="container shadow p-3 mb-5 rounded pl-4 pr-2" >
	<div class="row">
		<h1 ><b>{{ $article->title }} </b></h1>
	</div>
	<div class="row">
		<div class="col-md-6 mb-2">
			<img style="border: 2px solid #13B3EBFF" class="w-100 rounded"  src="{{ asset('storage/'.$article->photo) }}">
		</div>
		<div class="col-md-6">
			<p  style="color: grey"><b><i class="fas fa-pen-alt"></i> Publié par:</b> <span style="color: #55AA00FF"><b>{{ $article->user->nom.' '.$article->user->name }}</b></span></p>
			<p style="color: grey"><b><i class="fas fa-clock"></i> Publié le:</b> <time style="color: #55AA00FF">{{ $article->created_at }}</time></p>
			<p style="color: grey"><b><i class="fas fa-bookmark"></i> Catégorie: <span style="color: #55AA00FF">{{ $article->category->name }}</span></b></p>
			
			<form action="{{ url('articles/'.$article->id) }}" method="post">
				<!--Pour la suppression-->
				{{ csrf_field() }}
				{{method_field('DELETE')}}
				<a class='btn btn-danger' href="{{ url('articles/'.$article->id.'/edit') }}" ><b><i class="fas fa-edit"></i> Modifier </b></a>
				@can('delete', $article)
				<button type="submit" onclick="return confirm('Vous ètes sure de suppression de cette article ?')" class="btn btn-danger"><b><i class="fas fa-trash"></i> Supprimer</b></button>
				@endcan
			</form>
		</div>
		<div class=" divider"></div>
		<br>
		<div class="col-md-12  ">
			<p style="color: #A6585DFF"><b><i class="fas fa-scroll"></i> Description:</b></p>
			<p class="row text-dark">{{ $article->content }} </p>
		</div>
	</div>
	<hr>
	<div class="col-md-12  ">
		<p style="color: #A6585DFF"><b><i class="fas fa-video"></i> Vidéo à propos: {{ $article->title }} </b></p>
		<iframe style="border:3px solid white " class="w-100 rounded" width="560" height="500" src="{{ $article->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<hr>
<div class="row mt-4 text-center mb-5">
	<div class="col-md-12">
		<a href="{{ url('articles') }}" class="btn btn-info"><b><i class="fas fa-hand-point-left"></i> Retour au articles</b></a>
	</div>
</div>
@endsection