<?php

use App\Http\Controllers\FashionHouseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProoduitController;
use App\Models\Fashion;
use App\Models\produits;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/index', [FashionHouseController::class, 'Main_page']);
Route::get('/couture', [FashionHouseController::class, 'Couturier_page']);
Route::get('/livreur', [FashionHouseController::class,'Service_livreur']);
Route::get('/inscription', [FashionHouseController::class, 'Inscription_user']);
Route::get('/client', [FashionHouseController::class, 'Compte_client']);
Route::get('/livreur-compte', [FashionHouseController::class, 'Compte_livreur']);
Route::get('/profils', [FashionHouseController::class, 'Profils']);
// traitement des formulaire 
Route::post('/traitement',[FashionHouseController::class, 'processForm']);
Route::post('/compte_livreur_action', [FashionHouseController::class, 'traitement_compte_livreur']);
Route::post('/action_couture', [FashionHouseController::class, 'Traitement_couturier']);
// gestion de la partie couture .....
Route::post('/myfashion',[FashionHouseController::class,'Search_fashion']);

// information sur le rpfils de l'utiisateur connecté 
Route::get('/myfashion/{id}', [FashionHouseController::class, 'showUserProfile']);

// information pour enregistremnt d'un produit
Route::post('/produits', [ProoduitController::class,'CreateProduct']);
Route::get('/produit/delete/{id}',  [ProoduitController::class,'delete'])->name('produit.delete');


Route::get('/test',[ProoduitController::class,'getProduct'] );





Route::get('/dashboard', function () {
     //affichage des éléments
     $data_produit = produits::all();
    return view('dashboard',['produits' => $data_produit]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/',[HomeController::class,'walcome_f_h']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
