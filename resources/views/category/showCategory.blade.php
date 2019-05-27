@extends('layouts.app')
@section ('content')
<div class="col-md-12 text-center">
	<?php foreach ($cat as $value): ?>
	<a href="{{ url('category/'.$value->id.'/showCategory') }}"><button class="btn btn-danger ml-2 mb-2"><b>{{ $value->name }}: <span class="text-white">{{ $value->articles->count()  }}</span></b></button></a>
	
	<?php endforeach; ?>
	
	<div class="row mt-3">
		<div class="col-md-12 text-center">
			<p class="h2 text-white pb-2">Nombre d'articles:<b> <span class="text-warning"><b>{{ $category->articles->count() }}</b></span></p>
		</div>
	</div>			</div>
	<hr>
	<div class="container-fluid">
		<div style="max-width:1900px; margin:auto;" class="row">
			<div class="col-md-9 d-inline">
				<div class="container">
					<div class="row text-center ">
						
						<?php foreach ($category ->articles as $article): ?>
						
						
						<div style="background-color: #00000080" class="shadow-lg p-3 mb-5  rounded col-md-4" style="width: 18rem;">
							<img style="width: 300px;height: 200px" class="img-thumbnail" src="{{ asset('storage/'.$article->photo) }}" class="card-img-top">
							<div class="card-body">
								<h4 class="card-title"><b><i class="fas fa-newspaper"></i>{{  $article->title }}</b></h4>
								<p  style="color: grey"><b><i class="fas fa-pen-alt"></i> Publié par:</b> <span style="color: #55AA00FF"><b>{{ $article->user->nom.' '.$article->user->name }}</b></span></p>
								
								<time><span style="color: grey"><i class="fas fa-clock"></i> Le </span>{{ $article->created_at }} </time>
								<p class="card-text"><b><span style="color: #A0A0A0FF"><i class="fas fa-bookmark"></i> Catégorie:</span> <span style="color: #55AA00FF">{{ $article->category->name }}</span></b></p>
								<a href="{{ url('articles/'.$article->id.'/show') }}" class="btn btn-primary" ><b>Voir l'article</b></a>
								<a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-warning">Modifier</a>
								<a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/blog/article.php?id={{ $article->id }}" class="sharebox btn btn-info" target="blank">
									<span class="fb-icon"></span><b><i class="fab fa-facebook"></b></i> partager</b></a>
								</div>
							</div>
							<?php endforeach ?>
							
						</div>
					</div>
				</div>
				@endsection