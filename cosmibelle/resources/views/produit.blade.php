@extends('layouts.app')
@section('content')
<div class="container">
<form action={{url('store')}} method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">image : </label>
    <input type="file" class="form-control" name="image" id="">
  </div><br>
  <div class="form-group">
    <label for="">description : </label>
    <input type="text" class="form-control" name="description" id="">
  </div><br>
  <div class="form-group">
    <label for="">categorie</label>
    <select class="form-control" name="nomcategorie">
      @foreach($datas as $data)
      <option value="{{ $data->id }}">{{ $data->nomcategorie }}</option>
      @endforeach
    </select>
  </div><br>
  <div class="form-group">
    <label for="">prix : </label>
    <input type="text" class="form-control" name="prix" id="">
  </div><br>
  <div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
@endsection