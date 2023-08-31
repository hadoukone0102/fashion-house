<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use App\Models\Posts;
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
        $trouver = false;
        $user_email = Fashion::pluck('email');
        if(auth()->check()){
            $user_connect_email = auth()->user()->email;
            $user_co = Posts::where('email', $user_connect_email )->exists();

            foreach($user_email as $user_data){
                if($user_data == auth()->user()->email){
                   $trouver= true;
                   break;
                }
            }
            if($trouver){
                return redirect('/index');
            }
        }else{
            $user_co= null;
        }
        //$data_users = Fashion::where('email','kone@gmail.com')->first();
            return view('welcome',[
                'user_co' => $user_co,
                    'produits' => $data_produit,
                    'request' => $lastSegment
                ]);
    }
}
