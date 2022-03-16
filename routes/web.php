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
})->name('accueil');

Route::get('/pharmacie', [PharmacieController::class, "index"])->name("pharmacie");
Route::get('/employe', [EmployeController::class, "index"])->name("employe");
Route::get('/utilisateur', [UtilisateurController::class, "index"])->name("utilisateur");
Route::get('/produit', [ProduitController::class, "index"])->name("produit");
Route::get('/commande', [CommandesController::class, "index"])->name("commande");
Route::get('/lignecommande', [LignecommandeController::class, "index"])->name("lignecommande");

Route::get('/pharmacie/create', [PharmacieController::class, "create"])->name("pharmacie.create");
Route::get('/employe/create', [EmployeController::class, "create"])->name("employe.create");
Route::get('/utilisateur/create', [UtilisateurController::class, "create"])->name("utilisateur.create");
Route::get('/produit/create', [ProduitController::class, "create"])->name("produit.create");
Route::get('/commande/create', [CommandesController::class, "create"])->name("commande.create");
Route::get('/lignecommande/create', [LignecommandeController::class, "create"])->name("lignecommande.create");