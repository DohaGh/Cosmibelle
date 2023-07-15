@extends('layouts.app')
@section('content')
<div class="container">
  <h1>page index</h1>
  <div class="row">
  @foreach($produit as $produit)
    <div class="col-4 mb-3">
      <div class="card">
        <a href="{{route('show',['produit'=>$produit['id']])}}">
         <img  src="{{ asset('uploads/produits/' . $produit['image']) }}" alt="Product Image"  style="width: 400px; height: 300px;">
         </a>
            <p class="card-text p-4 text-center">{{$produit['description']}}</p>
      </div>
  </div>
  @endforeach
</div>
</div>
@endsection