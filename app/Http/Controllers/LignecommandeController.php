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
}