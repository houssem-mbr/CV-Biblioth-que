@extends('layouts.front')
@section ('content')
        <header  class="row">
            <div class="bd-example  w-100">
                <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/images/header.jpg') }}" class="d-block img-fluid w-100">
                            <div class="carousel-caption d-block d-md-block">
                                <h1 style="color: #01A2A6"><b><i class="fas fa-microphone"></i> ENCORE UN BLOG ?! #NOMMAISSALLO</b> </h1>
                                <br><br>
                                <h2 class="shadow-lg p-3 mb-5 bg-dark rounded-pill text-white"><b>Bienvenue sur le Blog Houssem Eddine Mabrouk</b></h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/images/header4.jpg') }}" class="d-block img-fluid w-100" >
                            <div class="carousel-caption  d-md-block ">
                                <h1 style="color: #01A2A6"><b>Explorer et réagir mes articles !!</b></h1>
                                <br><br>
                                <a href="posts.php" target="blank"><button class="btn btn-success btn-lg"><b>Réagir avec mes articles</b></button></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/images/header5.jpg') }}" class="d-block img-fluid w-100" >
                            <div class="carousel-caption  d-md-block">
                                <h1 style="color: #01A2A6">Tu veux me connaitre ??</h1>
                                <br><br>
                                <a href="contact.phtml"target="blank"><button class="btn btn-success btn-lg"><b>Contactez-moi</b></button></a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <marquee class="pt-2 pb-2 text-white bg-dark border border-white" direction="right"><b><i class="fas fa-door-open"></i> Bienvenue sur mon blog je suis Mabrouk Houssem eddine un Développeur et Intégrateur Web en 3W Academy cet version de Blog est travaillé avec le framework <span class="text-warning">LARAVEL 5.7.2</span></b>
            </marquee>
        </header>
            <div class="row mb-3 mt-5">
                <div class="col-md-12 text-center">
                    <p class="h4 text-success"><b>Choisir par catégorie</b></p>
                </div>
                
                <div class="col-md-12 text-center">
                    <?php foreach ($category as $value): ?>
                    <a href="{{ url('category/'.$value->id.'/showCategory') }}"><button class="btn btn-warning ml-2 mb-2"><b>{{ $value->name }}: <span class="text-white">{{ $value->articles->count()  }}</span></b></button></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <div class="container">
            <div class="row text-center">
                <?php foreach ($articles as $article): ?>
                
                <div style="background-color:#000000BB;width: 100%;" class="shadow-lg mb-3 p-2 rounded col-md-4">
                    
                    <img style="width: 300px;height: 200px" class="img-thumbnail" src="{{ asset('storage/'.$article->photo) }}" class="card-img-top">
                    
                    <div class="card-body">
                        <h4 class="card-title text-info"><b><i class="fas fa-newspaper"></i> {{ $article->title }}</b></h4>
                        
                        <p  style="color: #0094FFFF"><b><i class="fas fa-pen-alt"></i> Publié par:</b> <span style="color: #55AA00FF"><b>{{ $article->user->nom.' '.$article->user->name }}</b></span></p>
                        
                        <time style="color: white"><span style="color: #0094FFFF"><i class="fas fa-clock"></i> Le </span> {{ $article->created_at }} </time>
                        <p class="card-text"><b><span style="color: #0094FFFF"><i class="fas fa-bookmark"></i> Catégorie:</span> <span style="color: #55AA00FF">{{ $article->category->name }}</span></b></p>
                        <a href="{{ url('/'.$article->id.'/showArticleFront') }}" class="btn btn-success mb-1 rounded" ><b>Voir l'article</b></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/blog/article.php?id={{ $article->id }}" class="sharebox btn btn-info" target="blank">
                            <span class="fb-icon"></span><b><i class="fab fa-facebook"></b></i> partager</b></a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        @endsection
      