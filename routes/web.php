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

Route::get('/',[HomeController::class,'walcome_f_h'])->name('welcome');
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
Route::get('/myfashion/{iduser}/{idprod}', [FashionHouseController::class, 'showUserProfile'])->name('myfashion.fave');

// information pour enregistremnt d'un produit
Route::post('/produits', [ProoduitController::class,'CreateProduct']);
Route::get('/produit/delete/{id}',  [ProoduitController::class,'delete'])->name('produit.delete');

// modifier mon produit
Route::post('/products/{id}/update', [ProoduitController::class,'modifier_produit'])->name('products.update');

Route::get('/test',[ProoduitController::class,'getProduct'] );


// Route::get('/tests/{iduser}/{idprod}', function( $iduser, $idprod){

//      // Récupérer l'utilisateur par son ID
//      $all_of_user = Fashion::findOrFail($iduser);

//      // Récupérer le produit par son ID
//      $this_prod = produits::findOrFail($idprod);

//     $select_all_form_this = Fashion::where('id',$all_of_user)->get();
//     return view('welcome',[
//         'this_fashion' => $all_of_user,
//         'all_for_me'=> $select_all_form_this,
//         'produit' => $this_prod,
//     ]);
// });



Route::get('/dashboard', function () {
     //affichage des éléments
     $us = strtolower(auth()->user()->email);
     $iduser = strtolower('iduser');
     $data_connecter = produits::where($iduser, $us)->paginate(3);
     $data_produit = produits::paginate(3);
    return view('dashboard',[
        'connecter' => $data_connecter,
        'produits' => $data_produit
    ]);
})->middleware(['auth', 'verified'])->name('dashboard'); // je dois ajouter ça après 'is.fashion'

Route::get('/index', [ProoduitController::class,'index_admin'])->middleware(['auth','is.fashion']);

// Route::get('/index', function(){
//     return view('index');
// })->middleware(['auth','is.fashion']);

Route::middleware(['is.fashion'])->group(function(){
    Route::get('/index', [FashionHouseController::class, 'Main_page'])->name('index_page');
});

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // se connecté si il a déja un compte professionnel 
    Route::get('userCompte', [FashionHouseController::class,'Se_conneter_compte_exist'])->name('user.exist');
    Route::post('/connect-user', [FashionHouseController::class,'conncter_utilisateur'])->name('user.connect');

    // redirection vers la page du couturier 
    //Route::get('/index', [FashionHouseController::class, 'Main_page'])->name('index_page');
        
});

require __DIR__.'/auth.php';
