<?php

namespace App\Http\Controllers;

use App\Models\Pharmacies;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    function index() {
        // $pharmacies = Pharmacies::orderBy('PHARMACode', 'asc')->paginate(2);
        $pharmacies = Pharmacies::orderBy('PHARMACode', 'asc')->get();
        return view("pharmacie", compact('pharmacies'));
    }
}