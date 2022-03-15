<?php

namespace App\Http\Controllers;

use App\Models\Pharmacie;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    public function  show(Request $request){
         
         if(isset($request->Recherche)) {
             $searchValue = $request->Recherche;
             $pharmacies = \App\Models\Pharmacie::where('pharmaCode','LIKE', $searchValue . '%')->get();
             //return view("viewlaboratoire", ["laboratoires" => $laboratoires]);
         }else {
             $pharmacies = \App\Models\Pharmacie::orderBy("pharmaCode","asc")->paginate(10);
             //return view("laboratoire", ["laboratoires" => $laboratoires]);
         }
 
         return view("pharmacie", ["pharmacies" => $pharmacies]);}
 
     public function index()
     {
         $pharmacie = Pharmacie::all();
 
         return view('index', compact('laboratoire'));
     }
}
