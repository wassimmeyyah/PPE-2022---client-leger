<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    function index() {
        $employes = Employes::orderBy('EMPLOYPharmacie', 'asc')->paginate(10);
        return view("employe", compact('employes'));
    }
}
