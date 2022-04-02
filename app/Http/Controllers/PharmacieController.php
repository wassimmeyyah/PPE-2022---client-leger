<?php

namespace App\Http\Controllers;

use App\Models\Pharmacie;
use App\Models\Pharmacies;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    function index()
    {
        // $pharmacies = Pharmacies::orderBy('PHARMACode', 'asc')->paginate(2);
        $pharmacies = Pharmacies::orderBy('PHARMACode', 'asc')->get();
        return view("pharmacie", compact('pharmacies'));
    }

    public function create()
    {
        $pharmacies = Pharmacies::all();
        return view('pharmacieCreate', compact('pharmacies'));
    }

    public function store(Request $request)
    {

        $request->validate([
            "PHARMACode" => "required",
            "PHARMAVille" => "required",
            "PHARMAAdresse" => "required",
            "PHARMANumeroTelephone" => "required",
            "PHARMAMail" => "required"
        ]);

        Pharmacies::create($request->all());

        return back()->with("success", "Pharmacie ajoutée avec succès !");
    }

    public function delete(Pharmacies $pharmacie)
    {
        $pharmacie->delete();

        return back()->with("successDelete", "Pharmacie supprimée avec succès !");
    }

    public function update(Request $request, Pharmacies $pharmacie)
    {

        $request->validate([
            "PHARMACode" => "required",
            "PHARMAVille" => "required",
            "PHARMAAdresse" => "required",
            "PHARMANumeroTelephone" => "required",
            "PHARMAMail" => "required"
        ]);

        $pharmacie->update([
            "PHARMACode" => $request->PHARMACode,
            "PHARMAVille" => $request->PHARMAVille,
            "PHARMAAdresse" => $request->PHARMAAdresse,
            "PHARMANumeroTelephone" => $request->PHARMANumeroTelephone,
            "PHARMAMail" => $request->PHARMAMail
        ]);

        return back()->with("successEdit", "Pharmacie mise à jour avec succès !");
    }

    public function edit(Pharmacies $pharmacie)
    {
        $pharmacies = Pharmacies::all();
        return view('pharmacieEdit', compact('pharmacie'));
    }
}
