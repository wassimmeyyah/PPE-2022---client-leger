<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    function index() {
        $utilisateurs = Utilisateur::paginate(40);
        return view("utilisateur", compact('utilisateurs'));
    }

    public function create() {
        $utilisateurs = Utilisateur::all();
        return view('utilisateurCreate', compact('utilisateurs'));
    }

    public function store(Request $request) {
        
        $request->validate([
            "UTILCode"=>"required",
            "UtilIdentifiant",
            "UTILPassword"=>"required",
            "UTILPharmacieSecteur"=>"required"
        ]);

        Utilisateur::create($request->all());

        return back()->with("success", "Utilisateur ajouté avec succès !");
    }

    public function delete(Utilisateur $utilisateur){
        $utilisateur->delete();

        return back()->with("successDelete", "Utilisateur supprimé avec succès !");

    }
}