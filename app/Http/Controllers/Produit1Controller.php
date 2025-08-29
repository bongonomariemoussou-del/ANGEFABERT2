<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Produit;

class Produit1Controller extends Controller
{
    function __construct()
    {
         $this->middleware('auth');
         $this->middleware(['permission:peut modifier'])->only(['update','edit']);
         $this->middleware(['permission:peut ecrire'])->only(['create','store']);
         $this->middleware(['permission:peut voir'])->only(['index']);
         $this->middleware(['permission:peut lire'])->only(['index']);
         $this->middleware(['permission:peut supprimer'])->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $produits = Produit::all();

        return view("liste", compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('produit');

        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->merge(['slug' => Str::slug($request->nom)]);
        Produit::create($request->all());

        return redirect()->route('produits.index')->with('success', 'produit creer avec success');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $produit=Produit::find($id);
        return view("produitedit", compact('produit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->merge(['slug' => Str::slug($request->nom)]);
        $produit=Produit::find($id);

        $produit->update($request->all());

        return redirect()->route('produits.index')->with('success','produit modifier avec success');

        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $produit=Produit::find($id);
        $produit->delete();
        return redirect()->route('produits.index')->with('success','produit supprimer avec success');
    }
}
