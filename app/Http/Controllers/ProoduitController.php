<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\View\Components\Forms\liste_product;

class ProoduitController extends Controller
{
    //pour les produits

    public function CreateProduct(Request $request){

        $user = auth()->user();
        $userName = $user->email;
        $folderPath = public_path($userName);
        if (!file_exists($folderPath)) {
            mkdir($folderPath);
        }
        $produits = $request->validate([

            'email' => 'required|string',
            'number' => 'required|string',
            'nom_p' => 'required|string',
            'prix' => 'required|integer',
            'prod'=>'required|image|mimes:jpeg,png,gif,svg',
            'desc' => 'required|string'

        ], [

            'email.required' => 'Votre identifiant',
            'number.required' => 'Numéro en cas de commande',
            'nom_p.required' => 'Le nom du produit',
            'prix.required' => 'Le prix de votre produit',
            'prod.required' => 'Charger un produit',
            'prod.mimes' => 'Nous acceptons uniquement les fichiers .png, .jpg, .jpeg',
            'desc.required' => 'La description du produit'

        ]);

        $imageName = time().'_'.$produits['prod']->getClientOriginalName();
        $chemin = $produits['prod']->move($folderPath , $imageName);
        $url_absolute = $chemin->getPathname();
        $stock_bd = $chemin->getBasename();
        $pathinfo = pathinfo($stock_bd);

        $extension = $pathinfo['extension']; // "png"
        $filenameWithoutExtension = $pathinfo['filename']; // "1254835149_01"
        $lastPart = Str::afterLast($filenameWithoutExtension, '_');
        $finalResult = $lastPart . '.' . $extension; // "01.png"

         // Création d'une nouvelle instance de Produits et sauvegarde dans la base de données
         $save_prod = new Produits();
         $save_prod->iduser = $produits['email'];
         $save_prod->numero_commande = $produits['number'];
         $save_prod->nom_produit = $produits['nom_p'];
         $save_prod->prix = $produits['prix'];
         $save_prod->prod = $stock_bd; // Stockage du chemin dans la base de données
         $save_prod->description = $produits['desc'];
         $save_prod->save();
         return redirect()->route('dashboard');
        //  return view('dashboard',[
        //     'data'=>$produits,
        //  ]);
    }

    public function getProduct(Request $request){
        $liste_prod = produits::all();
        dd($liste_prod);
        View::component('forms.liste_product', liste_product::class); // Assurez-vous que le chemin est correct
        return view('components.forms.liste_product',[
            'liste' => $liste_prod,
        ]);
    }



    // suprimer un produit 
    public function delete($id){
        $produit = produits::findOrFail($id);
        $produit->delete();
    
        return redirect()->back()->with('success', 'Produit supprimé avec succès');
    
    }
    
}
