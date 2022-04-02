<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function index() {
        $produits = Produit::paginate(10);
        return view("produit", compact('produits'));
    }

    public function create() {
        $produits = Produit::all();
        return view('produitCreate', compact('produits'));
    }

    public function store(Request $request) {
        
        $request->validate([
            "PRODRef"=>"required",
            "PRODLibelle"=>"required",
            "PRODPrixUnitaire"=>"required"
        ]);

        Produit::create($request->all());

        return back()->with("success", "Produit ajouté avec succès !");
    }

    public function delete(Produit $produit){
        $produit->delete();

        return back()->with("successDelete", "Produit supprimé avec succès !");

    }

    public function update(Request $request, Produit $produit)
    {

        $request->validate([
            "PRODRef"=>"required",
            "PRODLibelle"=>"required",
            "PRODPrixUnitaire"=>"required"
        ]);

        $produit->update([
            "PRODRef" => $request->PRODRef,
            "PRODLibelle" => $request->PRODLibelle,
            "PRODPrixUnitaire" => $request->PRODPrixUnitaire
        ]);

        return back()->with("successEdit", "Produit mis à jour avec succès !");
    }

    public function edit(Produit $produit) {
        $produits = Produit::all();
        return view('produitEdit', compact('produit'));
    }
}