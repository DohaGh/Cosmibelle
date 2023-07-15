<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;

class MyController extends Controller
{
  public function welcome(){
    return view('welcome');
  }  
    public function produit(){
      $datas=Categorie::all();
      return view('produit',compact('datas'));
    }
    public function categorie(){
      return view('categorie');
    }
    public function createC(request $request){
      $categorie=new Categorie();
      $categorie->nomcategorie=$request->nomcategorie;
      $categorie->save();
      $datas=Categorie::all();
      return view('produit',compact('datas'));

    }
    public function index()
    {
      $produit = Produit::all(); // Retrieve all produits from the database
      return view('index')->with('produit', $produit);
    }
    public function create()
    {
      return view('produit');
    }
    public function store(Request $request)
{
    $request->validate([
        'description' => 'required',
        'nomcategorie' => 'required',
        'prix' => 'required',
    ]);

    $produit = new Produit();
    $produit->description = $request->input('description');
    $produit->id_categorie = $request->input('nomcategorie');
    $produit->prix = $request->input('prix');

    if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // Corrected method name
        $filename = time() . '.' . $extension;
        $file->move('uploads/produits/', $filename);
        $produit->image = $filename;
    } else {
        $produit->image = '';
    }

    $produit->save();

    return view('index')->with('produit',[$produit]);
}
public function show($produit)
{
    return view('show',['produit'=>Produit::findOrFail($produit)]);
}
public function contact(){
  return view('contact');
}

  
}