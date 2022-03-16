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
}