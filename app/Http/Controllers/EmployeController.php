<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    function index()
    {
        $employes = Employes::orderBy('EMPLOYNom', 'asc')->paginate(10);
        return view("employe", compact('employes'));
    }

    public function create()
    {
        $employes = Employes::all();
        return view('employeCreate', compact('employes'));
    }

    public function store(Request $request)
    {

        $request->validate([
            "EMPLOYCode" => "required",
            "EMPLOYNom" => "required",
            "EMPLOYPrenom" => "required",
            "EMPLOYPoste" => "required",
            "EMPLOYMail" => "required",
            "EMPLOYTelephone" => "required",
            "EMPLOYPharmacie" => "required"
        ]);

        Employes::create($request->all());

        return back()->with("success", "Employé ajouté avec succès !");
    }

    public function delete(Employes $employe)
    {
        $employe->delete();

        return back()->with("successDelete", "Employé supprimé avec succès !");
    }

    public function update(Request $request, Employes $employe)
    {

        $request->validate([
            "EMPLOYCode" => "required",
            "EMPLOYNom" => "required",
            "EMPLOYPrenom" => "required",
            "EMPLOYPoste" => "required",
            "EMPLOYMail" => "required",
            "EMPLOYTelephone" => "required",
            "EMPLOYPharmacie" => "required"
        ]);

        $employe->update([
            "EMMPLOYCode" => $request->EMPLOYCode,
            "EMPLOYNom" => $request->EMPLOYNom,
            "EMPLOYPrenom" => $request->EMPLOYPrenom,
            "EMPLOYPoste" => $request->EMPLOYPoste,
            "EMPLOYMail" => $request->EMPLOYMail,
            "EMPLOYTelephone" => $request->EMPLOYTelephone,
            "EMPLOYPharmacie" => $request->EMPLOYPharmacie
        ]);

        return back()->with("successEdit", "Employé mis à jour avec succès !");
    }

    public function edit(Employes $employe)
    {
        $employes = Employes::all();
        return view('employeEdit', compact('employe'));
    }

    public function search()
    {
        $recherche = request()->input('recherche');

        $employes = Employes::where('EMPLOYCode', 'LIKE', "%$recherche")
            ->orWhere('EMPLOYNom', 'like', "%$recherche%")
            ->orWhere('EMPLOYPrenom', 'like', "%$recherche%")
            ->orWhere('EMPLOYPoste', 'like', "%$recherche%")
            ->orWhere('EMPLOYMail', 'like', "%$recherche%")
            ->orWhere('EMPLOYTelephone', 'like', "%$recherche%")
            ->orWhere('EMPLOYPharmacie', 'like', "%$recherche%")
            ->paginate(10);

        return view('employeSearchResults')->with('employes', $employes);
    }
}
