@extends('layouts.app')
@section('content')
<div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Bonjour <span class="text-danger"><b>{{ Auth::user()->name  }}</b></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <?php foreach ($articles as $article): ?>
        
        <div style="background-color: #00000080;width: 100%;" class="shadow-lg mb-3 p-2 rounded col-md-4">
            
            <img style="width: 300px;height: 200px" class="img-thumbnail" src="{{ asset('storage/'.$article->photo) }}" class="card-img-top">
            
            <div class="card-body">
                <h4 class="card-title"><b><i class="fas fa-newspaper"></i> {{ $article->title }}</b></h4>
                
                <p  style="color: grey"><b><i class="fas fa-pen-alt"></i> Publié par:</b> <span style="color: #55AA00FF"><b>{{ $article->user->nom.' '.$article->user->name }}</b></span></p>
                
                <time><span style="color: grey"><i class="fas fa-clock"></i> Le </span> {{ $article->created_at }} </time>
                <p class="card-text"><b><span style="color: #A0A0A0FF"><i class="fas fa-bookmark"></i> Catégorie:</span> <span style="color: #55AA00FF">{{ $article->category->name }}</span></b></p>
                <a href="{{ url('articles/'.$article->id.'/show') }}" class="btn btn-primary" ><b>Voir l'article</b></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/blog/article.php?id={{ $article->id }}" class="sharebox btn btn-info" target="blank">
                    <span class="fb-icon"></span><b><i class="fab fa-facebook"></b></i> partager</b></a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    @endsection