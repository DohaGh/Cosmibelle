@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('createC') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="">ajouter categorie : </label>
    <input type="text" class="form-control" name="nomcategorie" id="categorie">
  </div><br>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
@endsection