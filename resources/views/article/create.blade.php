@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
		<div class="col-md-10"></div>
		<div class="col-md-2 text-right">
			<a href="{{ url('articles') }}" class="btn btn-warning"><b><i class="fas fa-hand-point-left"></i> Retour</b></a>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ url('articles') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }} <!-- auto cont pour stocker les imputs avant l'envoi à la BD -->
				<p><label style="color: #A0A0A0FF" for="title"><b>Titre:</b> </label><br>
				<input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"></p>

				<p><label style="color: #A0A0A0FF" for="content"><b>Corps de l'article:</b> </label><br>
			<textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea></p>

			<p><label style="color: #A0A0A0FF" for="photo"><b>Image:</b> </label><br>
			<input type="file" name="photo" id="photo" class="form-control" value="{{ old('photo') }}"></p>

			<p><label style="color: #A0A0A0FF" for="video"><b>Lien youtube de vidéo:</b> </label><br>
			<input type="video" name="video" id="video" class="form-control" value="{{ old('video') }}"></p>

			<a style="color:green" href="{{ url('category/categoryAdd') }}"><i class="fas fa-plus-circle"></i></a>
			<select name="cat">
				@foreach ($category as $cat)
					<option value="{{ $cat->id }}">{{ $cat->name }}</option>
					@endforeach
				
			</select>
			<br><br>
			<div class="row">
				<div class="col-md-3"></div>
				<button type="submit" class="col-md-2 btn btn-success mb-2 mr-1 ml-1"><b>Publier</b></button>
				<div class="col-md-2"></div>
				<button id="reset" class="col-md-2 btn btn-danger mb-2 mr-1 ml-1" type="reset"><b>Annuler</b></button>
			</div>
		</div>
		
	</form>
	
</div>
</div>
</div>
@endsection