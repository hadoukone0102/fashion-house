<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    //
    public function walcome_f_h(Request $request){
        // url pour afficher l'image dans les pages
        $url = $request->url();
        $lastSegment = Str::afterLast($url, '/');

        //affichage des éléments
        $data_produit = produits::all();
        
        return view('welcome',[
            'produits' => $data_produit,
            'request' => $lastSegment
        ]);
        }
}
