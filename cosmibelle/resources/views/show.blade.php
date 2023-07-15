@extends('layouts.app')
@section('content')
<h1>page show</h1>
<ul>
  <img  src="{{ asset('uploads/produits/' . $produit['image']) }}" alt="Product Image"  style="width: 450px; height: 300px;">
<div>le detail de  {{ $produit['prix'] }} et le prix : {{ $produit['description'] }}</div>
</ul>
@endsection