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
}