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
			<a href="{{ url('articles') }}" class="btn btn-warning"><b><i class="fas fa-hand-point-left"></i> Retour</b></a>
		</div>
		
	</div>
	<div class="row text">
		<div class="col-md-12">
			
			<?php if (session()->has('success')): ?>
			
			<div class="alert alert-success">
				{{ session()->get('success') }}
			</div>
			
			<?php endif ?>
			<fieldset class=" p-3" style="background-color: #00000080" >
				<legend class="text-info"><b><i class="fas fa-sticky-note pt-5"></i> Modifier l'article <span style="color:red"><?php  echo $article->title ?></span></b></legend>
				<form action="{{ url('articles/'.$article->id) }}" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="_method" value="PUT">
				{{ csrf_field() }}
					<p><label for="title"><b>Titre:</b> </label><br>
					<input type="text" name="title" id="title" value=" {{ $article->title }}" class="form-control"></p>
					<p><label for="content"><b>Corps de l'article:</b> </label><br>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $article->content }}</textarea></p>
				<p><label for="photo"><b>Image</b> </label><br>
				<input type="file" name="photo" id="photo" value="{{ $article->photo }}" class="form-control"></p>
				<p><label for="video"><b>Lien youtube de video:</b> </label><br>
				<input type="text" name="video" id="video" value="{{ $article->video }}" class="form-control"></p>
				<a style="color:green" href="{{ url('category/categoryAdd') }}"><i class="fas fa-plus-circle"></i></a>
				<select name="cat">
					@foreach ($category as $cat)
					<option value="{{ $cat->id }}" @if ($article->category_id == $cat->id )
						{{"selected='selected'"}}
					@endif>{{ $cat->name }}</option>
					@endforeach
				</select>
				<br>
				<div class="row">
					<div class="col-md-3"></div>
					<button type="submit" value="modifier" class="col-md-2 btn btn-success mb-2 mr-1 ml-1"><b>Modifier</b></button>
					<div class="col-md-1"></div>
					<button id="reset" class="col-md-2 btn btn-danger mb-2 mr-1 ml-1" type="reset"><b>Annuler</b></button>
				</div>
			</div>
		</form>
	</fieldset>
</div>
</div>
</div>
@endsection