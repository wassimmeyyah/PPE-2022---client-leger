<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    function index() {
        $employes = Employes::orderBy('EMPLOYemploye', 'asc')->paginate(10);
        return view("employe", compact('employes'));
    }

    public function create() {
        $employes = Employes::all();
        return view('employeCreate', compact('employes'));
    }
}