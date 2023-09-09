<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use App\Models\Panier;
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

        // les utilisateur (les coututier )

        $couturierA = "kone@gmail.com";
        $couturierB = "hadou@gmail.com";

        // Selection des produit par couturier
        $produit_of_couturierA = produits::where('iduser',$couturierA)->paginate(3);
        $produit_of_couturierB = produits::where('iduser',$couturierB)->paginate(3);

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

        // selectionnons tous les élément dans la base de donnée ou le mail correspond à celui de l'utilisateur,
        if(auth()->check()){
            $email_user_connecter = auth()->user()->email;
        }else{
            $email_user_connecter = null;
        }
        $select_all_email = Panier::where('id_client',$email_user_connecter)->paginate(25);
        $counts =$select_all_email->total();
        //dd($select_all_email->total());
        //$data_users = Fashion::where('email','kone@gmail.com')->first();

            return view('welcome',[
                'data_panier' => $select_all_email,
                'counts' => $counts,
                'user_co' => $user_co,
                'produit_of_couturierA' => $produit_of_couturierA,
                'produit_of_couturierB' => $produit_of_couturierB,
                'request' => $lastSegment
            ]);
    }


    public function Ajouter_panier($id){
        $panier_prod = produits::findOrFail($id);
        $panier = session()->get('panier',[]);

        if(isset($panier[$id])){
            $panier[$id]['quantity']++;
        }else{
            $panier[$id] = [
                "name" => $panier_prod->nom_produit,
                "quantity" => 1,
                "prix" => $panier_prod->prix,
                "image" => $panier_prod->prod,
            ];
        }
        session()->put('panier', $panier);
        return redirect()->back()->with('sucess','article ajouter au panier');
    }

}
