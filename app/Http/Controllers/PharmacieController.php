<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    function index() {
        return view("pharmacie");        
    }
}
