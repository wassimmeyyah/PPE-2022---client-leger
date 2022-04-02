<?php

namespace App\Http\Controllers;

use App\Models\Lignecommande;
use Illuminate\Http\Request;

class LignecommandeController extends Controller
{
    function index()
    {
        $lignecommandes = Lignecommande::orderBy('PRODRef')->paginate(40);
        return view("lignecommande", compact('lignecommandes'));
    }

    public function create()
    {
        $lignecommandes = Lignecommande::all();
        return view('lignecommandeCreate', compact('lignecommandes'));
    }

    public function store(Request $request)
    {

        $request->validate([
            "COMRef" => "required",
            "PRODRef" => "required",
            "Quantité" => "required"
        ]);

        Lignecommande::create($request->all());

        return back()->with("success", "Détail de la commande ajouté avec succès !");
    }

    public function delete(Lignecommande $lignecommande)
    {
        $lignecommande->delete();

        return back()->with("successDelete", "Détail de la commande supprimé avec succès !");
    }

    public function search()
    {
        $recherche = request()->input('recherche');

        $lignecommandes = Lignecommande::where('PRODRef', 'LIKE', "%$recherche")
            ->orWhere('COMRef', 'like', "%$recherche%")
            ->orWhere('Quantité', 'like', "%$recherche%")
            ->paginate(10);

        return view('lignecommandeSearchResults')->with('lignecommandes', $lignecommandes);
    }
}
