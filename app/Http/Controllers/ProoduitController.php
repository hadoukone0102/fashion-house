<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProoduitController extends Controller
{
    //pour les produits

    public function CreateProduct(Request $request){
        $produits = $request->validate([
            'email' => 'required|string',
            'number' => 'required|string',
            'nom_p' => 'required|string',
            'prix' => 'required|integer',
            'prod' => 'required|file|mimes:png,jpg,jpeg',
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
         // Stockage de l'image dans le dossier public/img
         $path_pro = $request->file('prod')->store('public/produit');

         // Création d'une nouvelle instance de Produits et sauvegarde dans la base de données
         $save_prod = new Produits();
         $save_prod->iduser = $produits['email'];
         $save_prod->numero_commande = $produits['number'];
         $save_prod->nom_produit = $produits['nom_p'];
         $save_prod->prix = $produits['prix'];
         $save_prod->prod = $path_pro; // Stockage du chemin dans la base de données
         $save_prod->description = $produits['desc'];
         $save_prod->save();
 
         return [
             'data' => $produits,
             'chemin' => Storage::url($path_pro) // Utilisation de Storage::url() pour générer le lien
         ];

    }
}
