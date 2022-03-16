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
}