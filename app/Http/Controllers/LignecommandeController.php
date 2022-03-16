<?php

namespace App\Http\Controllers;

use App\Models\Lignecommande;
use Illuminate\Http\Request;

class LignecommandeController extends Controller
{
    function index() {
        $lignecommandes = Lignecommande::paginate(40);
        return view("lignecommande", compact('lignecommandes'));
    }

    public function create() {
        $lignecommandes = Lignecommande::all();
        return view('lignecommandeCreate', compact('lignecommandes'));
    }

    public function store(Request $request) {
        
        $request->validate([
            "COMRef"=>"required",
            "PRODRef"=>"required",
            "Quantité"=>"required"
        ]);

        Lignecommande::create($request->all());

        return back()->with("success", "Détail de la commande ajouté avec succès !");
    }
}