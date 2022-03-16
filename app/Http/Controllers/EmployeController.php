<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    function index() {
        $employes = Employes::orderBy('EMPLOYNom', 'asc')->paginate(10);
        return view("employe", compact('employes'));
    }

    public function create() {
        $employes = Employes::all();
        return view('employeCreate', compact('employes'));
    }

    public function store(Request $request) {
        
        $request->validate([
            "EMPLOYCode"=>"required",
            "EMPLOYNom"=>"required",
            "EMPLOYPrenom"=>"required",
            "EMPLOYPoste"=>"required",
            "EMPLOYMail"=>"required",
            "EMPLOYTelephone"=>"required",
            "EMPLOYPharmacie"=>"required"
        ]);

        Employes::create($request->all());

        return back()->with("success", "Employé ajouté avec succès !");
    }
}