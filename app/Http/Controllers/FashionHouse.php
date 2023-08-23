<?php

namespace App\Http\Controllers;

use App\Models\fashion_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FashionHouse extends Controller
{
    //
    public function ListCouturier(){
        $couturiers = fashion_model::get();
        return response()->json([
            'status'=>'1',
            'message'=>'Liste Couturiers',
            'data'=>$couturiers,
        ],200);
    }

    public function GetCouturier($id){
        $couture = fashion_model::where("id",$id)->get();
        if($couture){
            return response()->json([
                'status'=>'1',
                'message'=>'cout trouver',
                'data'=>$couture,
            ],200);
        }else{
            return response()->json([
                'status'=>'0',
                'message'=>'couturier non trouver',
                'data'=>$couture,
            ],404);
        }
    }
   public function CreateCouturier(Request $request){

    $data_fashion =$request->validate([
        'nom_ctr' => 'required|string',
        'prenom_ctr' => 'required|string',
        'email_ctr' => 'required|string',
        'contact_ctr' => 'required|string',
        'ville_ctr' => 'required|string',
        'quartier_ctr' => 'required|string',
        'mdp_ctr' => 'required|string',
        'piece_ctr' => 'required|file|mimes:pdf',
        'date_pem' => 'required|date',
        'img_entreprise' => 'required|file|mimes:png,jgp,jpeg',
        'certif_red' => 'required|file|mimes:pdf',
        'annee_exp' => 'required|string',
        'domaine' => 'required|string',
        'commentaire' => 'required|string',
    ],[
        'nom_ctr.required' => 'le nom est vide',
        'prenom_ctr.required' => 'le prenom est vide',
        'email_ctr.required' => 'email est vide',
        'contact_ctr.required' => 'contact est vide',
        'ville_ctr.required' => 'ville est vide',
        'quartier_ctr.required' => 'quartier est vide',
        'mdp_ctr.required' => 'mot de passe est vide',

        'piece_ctr.required' => 'Veuillez sélectionner un fichier',
        'piece_ctr.mimes' => 'le fichier doit etre au format .pdf',

        'date_pem.required' => 'la date est vide',

        'img_entreprise.required' => 'Vueillez sélectionner un fichier',
        'img_entreprise.mimes' => 'le fichier doit etre au format .png, .jpg, .jpeg',

        'certif_red.required' => 'Vueillez sélectionner un fichier',
        'certif_red.mimes' => 'le fichier doit etre au format .pdf',

        'annee_exp.required' => 'experience est vide',
        'domaine.required' => 'domaine est vide',
        'commentaire.required' => 'commentaire est vide',
    ]);
    $couturier = new fashion_model();
    // $data_ctrs = new Fashion();

    $chemin_pieces = Storage::disk('local')->put('fashion_house', $request->file('piece_ctr'));
        $chemin_image_user = Storage::disk('local')->put('fashion_house.images', $request->file('img_entreprise'));
        $chemin_certif_user = Storage::disk('local')->put('fashion_house.certif', $request->file('certif_red'));

        $url_chemin_piece = Storage::url($chemin_pieces);
        $url_chemin_image_user = Storage::url($chemin_image_user);
        $url_chemin_certif_user = Storage::url($chemin_certif_user);

    $couturier->nom = $data_fashion['nom_ctr'];
    $couturier->prenom = $data_fashion['prenom_ctr'];
    $couturier->email = $data_fashion['email_ctr'];
    $couturier->contact = $data_fashion['contact_ctr'];
    $couturier->ville = $data_fashion['ville_ctr'];
    $couturier->quartier = $data_fashion['quartier_ctr'];
    $couturier->mdp = $data_fashion['mdp_ctr'];
    $couturier->piece = $url_chemin_piece;
    $couturier->date_pem = $data_fashion['date_pem'];
    $couturier->img_entreprise = $url_chemin_image_user;
    $couturier->certif_red = $url_chemin_certif_user;
    $couturier->annee_exp = $data_fashion['annee_exp'];
    $couturier->domaine = $data_fashion['domaine'];
    $couturier->commentaire = $data_fashion['commentaire'];
    $couturier->save();
    return response()->json([
        'status'=>'1',
        'message'=>'Couturier enregistrer avec succès'
    ]);
   }
}
