<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\LigneCommandeController;
use App\Http\Controllers\PharmacieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;

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
    return view("auth/login");
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// PAGE DE CONSULTATION
Route::get('/pharmacie', [PharmacieController::class, "index"])->name("pharmacie");
Route::get('/employe', [EmployeController::class, "index"])->name("employe");
Route::get('/utilisateur', [UtilisateurController::class, "index"])->name("utilisateur");
Route::get('/produit', [ProduitController::class, "index"])->name("produit");
Route::get('/commande', [CommandesController::class, "index"])->name("commande");
Route::get('/lignecommande', [LignecommandeController::class, "index"])->name("lignecommande");

// PAGE D AJOUT
Route::get('/pharmacie/create', [PharmacieController::class, "create"])->name("pharmacie.create");
Route::get('/employe/create', [EmployeController::class, "create"])->name("employe.create");
Route::get('/utilisateur/create', [UtilisateurController::class, "create"])->name("utilisateur.create");
Route::get('/produit/create', [ProduitController::class, "create"])->name("produit.create");
Route::get('/commande/create', [CommandesController::class, "create"])->name("commande.create");
Route::get('/lignecommande/create', [LignecommandeController::class, "create"])->name("lignecommande.create");

// AJOUTS (CREATE)

Route::post('/pharmacie/create', [PharmacieController::class, "store"])->name("pharmacie.ajouter");
Route::post('/employe/create', [EmployeController::class, "store"])->name("employe.ajouter");
Route::post('/utilisateur/create', [UtilisateurController::class, "store"])->name("utilisateur.ajouter");
Route::post('/produit/create', [ProduitController::class, "store"])->name("produit.ajouter");
Route::post('/commande/create', [CommandesController::class, "store"])->name("commande.ajouter");
Route::post('/lignecommande/create', [LignecommandeController::class, "store"])->name("lignecommande.ajouter");

// SUPPRESSION 
Route::delete('/pharmacie/{pharmacie}', [PharmacieController::class, "delete"])->name("pharmacie.supprimer");
Route::delete('/employe/{employe}', [EmployeController::class, "delete"])->name("employe.supprimer");
Route::delete('/utilisateur/{utilisateur}', [UtilisateurController::class, "delete"])->name("utilisateur.supprimer");
Route::delete('/produit/{produit}', [ProduitController::class, "delete"])->name("produit.supprimer");
Route::delete('/commande/{commande}', [CommandesController::class, "delete"])->name("commande.supprimer");
Route::delete('/lignecommande/{lignecommande}', [LigneCommandeController::class, "delete"])->name("lignecommande.supprimer");

// UPDATE
Route::put('/pharmacie/{pharmacie}', [PharmacieController::class, "update"])->name("pharmacie.update"); 
Route::put('/employe/{employe}', [EmployeController::class, "update"])->name("employe.update"); 
Route::put('/utilisateur/{utilisateur}', [UtilisateurController::class, "update"])->name("utilisateur.update"); 
Route::put('/produit/{produit}', [ProduitController::class, "update"])->name("produit.update"); 
Route::put('/commande/{commande}', [CommandesController::class, "update"])->name("commande.update"); 

// EDIT
Route::get('/pharmacie/{pharmacie}', [PharmacieController::class, "edit"])->name("pharmacie.edit");
Route::get('/employe/{employe}', [EmployeController::class, "edit"])->name("employe.edit"); 
Route::get('/utilisateur/{utilisateur}', [UtilisateurController::class, "edit"])->name("utilisateur.edit"); 
Route::get('/produit/{produit}', [ProduitController::class, "edit"])->name("produit.edit"); 
Route::get('/commande/{commande}', [CommandesController::class, "edit"])->name("commande.edit");

// SEARCH

Route::get('/pharmacieSearch', [PharmacieController::class, "search"])->name("pharmacie.search");
Route::get('/employeSearch', [EmployeController::class, "search"])->name("employe.search");
Route::get('/produitSearch', [ProduitController::class, "search"])->name("produit.search");
Route::get('/commandeSearch', [CommandesController::class, "search"])->name("commande.search");
Route::get('/lignecommandeSearch', [LigneCommandeController::class, "search"])->name("lignecommande.search");