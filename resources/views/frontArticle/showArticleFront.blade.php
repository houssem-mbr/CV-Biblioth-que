@extends('layouts.front')
@section ('content')
<hr>
<div class="row mt-4 text-right mb-5 mr-3">
	<div class="col-md-12">
		<a href="{{ url('/') }}" class="btn btn-info"><b><i class="fas fa-hand-point-left"></i> Retour à l' Acceuil</b></a>
	</div>
</div>
<div style="background-color: #00000080" class="container shadow p-3 mb-5  rounded pl-4 pr-2 pr-3" >
	<div class="row">
		<h2 class="text-white" ><b><?= $article->title ?></b></h2>
	</div>
	<div class="row">
		<div class="col-md-6 mb-2">
			<img style="border: 2px solid #13B3EBFF" class="w-100 rounded"  src="{{ asset('storage/'.$article->photo) }}">
		</div>
		<div class="col-md-6">
			<p  style="color: grey"><b><i class="fas fa-pen-alt"></i> Publié par:</b> <span style="color: #55AA00FF"><b>{{ $article->user->nom.' '.$article->user->name }}</b></span></p>
			<p style="color: grey"><b><i class="fas fa-clock"></i> Publié le:</b> <time style="color: #55AA00FF">{{ $article->created_at }}</time></p>
			<p style="color: grey"><b><i class="fas fa-bookmark"></i> Catégorie: <span style="color: #55AA00FF">{{ $article->category->name }}</span></b></p>
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/blog/http://127.0.0.1:8000/{{ $article->id }}/showArticleFront" class="sharebox btn btn-info" target="blank">
				<span class="fb-icon"></span><b><i class="fab fa-facebook"></b></i> partager</b></a>
			</div>
			<div class=" divider"></div>
			<br>
			<div class="col-md-12  ">
				<p style="color: #A6585DFF"><b><i class="fas fa-scroll"></i> Description:</b></p>
				<p class="row text-white">{{ $article->content }} </p>
			</div>
			<div class="col-md-12  ">
				<p style="color: #A6585DFF"><b><i class="fas fa-video"></i> Vidéo à propos:{{ $article->title }}</b></p>
				<iframe style="border:3px solid white " class="w-100 rounded" width="560" height="500" src="{{ $article->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	@endsection