@extends('layouts.app')
@section ('content')
<div class="row" >
  <div class="col-md-3"></div>
  <fieldset style="background-color: #00000080"  class="col-md-6 p-5 m-2 border border-primary rounded" >
    <legend class="text-info text-center pt-5" ><b><i class="fas fa-plus-square"></i> Nouvelle catégorie</b></legend>
    <form action="{{ url('category/categoryAdd') }}" method="POST" >
      {{ csrf_field() }}
      <p><label for="name"><b>Votre catégorie:</b> </label><br>
      <input class="bg-white w-100" style="height: 40px" type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"></p>
      <br><br>
      <div class="row">
        <div class="col-md-3"></div>
        <button type="submit" class="col-md-2 btn btn-success mb-2 mr-1 ml-1"><b>Ajouter</b></button>
        <div class="col-md-2"></div>
        <button id="reset" class="col-md-2 btn btn-danger mb-2 mr-1 ml-1" type="reset"><b>Annuler</b></button>
      </div>
    </form>
  </fieldset>
</div>
<div class="row mt-4 text-center">
  <div class="col-md-12">
    <a href="{{ url('articles') }}" class="btn btn-info"><b><i class="fas fa-hand-point-left"></i> Retour aux articles</b></a>
  </div>
</div>
@endsection