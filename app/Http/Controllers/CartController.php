<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // selectionnons tous les élément dans la base de donnée ou le mail correspond à celui de l'utilisateur,
        if(auth()->check()){
            $email_user_connecter = auth()->user()->email;
            $select_all_email = Panier::where('id_client',$email_user_connecter)->paginate(25);
            return view('welcome',[
                'data_panier' => $select_all_email,
            ]);
        }else{
            $email_user_connecter = null;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * 
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
{
    // Gestion du panier
    if (auth()->check()) {
        $id_client = auth()->user()->email;
    } else {
        $id_client = null;
    }

    // Vérifiez d'abord si l'article existe déjà dans le panier
    $existingCartItem = Panier::where('id_article', $request->id_prod)
        ->where('id_client', $id_client)
        ->first();

    if ($existingCartItem) {
        // Si l'article existe, incrémente la quantité
        $existingCartItem->increment('quantiter');
    } else {
        // Sinon, ajoutez un nouvel article au panier
        $newCartItem = new Panier();
        $newCartItem->id_article = $request->id_prod;
        $newCartItem->id_client = $id_client;
        $newCartItem->nom_article = $request->prod_name;
        $newCartItem->quantiter = 1;
        $newCartItem->prix_article = $request->prod_price;
        $newCartItem->image_article = $request->img_prod;
        $newCartItem->save();
    }

    // Vous pouvez maintenant rediriger ou faire d'autres opérations ici
    return redirect()->back()->with('sucess','article ajouter au panier');
    
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

