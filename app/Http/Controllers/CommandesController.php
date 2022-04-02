<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    function index() {
        $commandes = Commandes::paginate(10);
        return view("commande", compact('commandes'));
    }

    public function create() {
        $commandes = Commandes::all();
        return view('commandeCreate', compact('commandes'));
    }

    public function store(Request $request) {
        
        $request->validate([
            "COMRef"=>"required",
            "COMDate"=>"required",
            "UTILCode"=>"required"
        ]);

        Commandes::create($request->all());

        return back()->with("success", "Commande ajoutée avec succès !");
    }

    public function delete(Commandes $commande){
        $commande->delete();

        return back()->with("successDelete", "Commande supprimée avec succès !");

    }

    public function update(Request $request, Commandes $commande)
    {

        $request->validate([
            "COMRef"=>"required",
            "COMDate"=>"required",
            "UTILCode"=>"required"
        ]);

        $commande->update([
            "COMRef" => $request->COMRef,
            "COMDate" => $request->COMDate,
            "UTILCode" => $request->UTILCode
        ]);

        return back()->with("successEdit", "Commande mise à jour avec succès !");
    }

    public function edit(Commandes $commande)
    {
        $commandes = Commandes::all();
        return view('commandeEdit', compact('commande'));
    }
}