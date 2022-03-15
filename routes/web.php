<?php

use App\Http\Controllers\CommandesController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\LigneCommandeController;
use App\Http\Controllers\PharmacieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pharmacie', [PharmacieController::class, "index"]);

Route::get('/employe', [EmployeController::class, "index"]);

Route::get('/utilisateur', [UtilisateurController::class, "index"]);

Route::get('/produit', [ProduitController::class, "index"]);

Route::get('/commande', [CommandesController::class, "index"]);

Route::get('/lignecommande', [LignecommandeController::class, "index"]);