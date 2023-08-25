<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use App\Models\livreurs;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FashionHouseController extends Controller
{
    
    // ma fonction qui va lister tous les etudians

    public function Main_page(Request $request){
        $url = $request->url();
        $path = parse_url($url,PHP_URL_PATH);
        $seg = explode('/', $path);
        $result = $seg[1];
        return view('Fashion.index',['request' =>$result]);
    }
   
    public function Couturier_page(Request $request){
        $url = $request->url();
        $path = parse_url($url,PHP_URL_PATH);
        $seg = explode('/', $path);
        $result = $seg[1];
        return view('Fashion.couture',['request' => $result]);
    }

    public function Service_livreur(){
        return view('Fashion.livreur');
    }

    public function Inscription_user(){
        return view(('Fashion.inscription'));
    }

    public function Compte_client(){
        return view('fashion.client');
    }

    public function Compte_livreur(){
        return view('Fashion.compte_livreur');
    }


    public function processForm(Request $request){

        $data = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'ville' => 'required|string',
            'quartier' => 'required|string',
            'mdp' => 'required|string',
        ],[
            'nom.required' => 'Le nom est vide.',
            'prenom.required' => 'Le prénom est vide.',
            'email.required' => 'Le email est vide.',
            'contact.required' => 'Le contact est vide.',
            'ville.required' => 'La ville est vide.',
            'quartier.required' => 'Le quartier est vide.',
            'mdp.required' => 'Le mot de passe est vide.',
            // Messages d'erreur pour les autres champs
        ]);        
        
        // vérifion maintenant si l'utilisateur est déja inscrit 
        $IlExiste = Posts::where('email',$data['email'])->first();
        if($IlExiste){
            return back()->withInput()->withErrors(['email' =>'Cette addresse Email existe déja']);
        }
        $post = new Posts();
    
        $post->nom = $data['nom'];
        $post->prenom = $data['prenom'];
        $post->email = $data['email'];
        $post->contact = $data['contact'];
        $post->ville = $data['ville'];
        $post->quartier = $data['quartier'];
        $post->mdp = $data['mdp']; 
        $post->save();
        
        return redirect('/index')->with('message', 'Données enregistrées avec succès !');

        // Traitez les données, enregistrez-les en base de données, etc.
        // return view('Fashion.traitement', ['donnees' => $data]);
    }
    

    public function traitement_compte_livreur(Request $request){

        $data_livreur = $request->validate([
            'nom_livreur' => 'required|string',
            'prenom_livreur' => 'required|string',
            'email_livreur' => 'required|string',
            'contact_livreur' => 'required|string',
            'piece_livreur' =>'required|file|mimes:pdf',
            'date_piece' => 'required|date',
            // 'ville_livreur' => 'required|string',
            'mdp_livreur' => 'required|string',
        ],[
            'nom_livreur.required' => 'le nom est vide',
            'prenom_livreur.required' => 'le prenom est vide',
            'email_livreur.required' => 'email est vide',
            'contact_livreur.required' => 'contact est vide',
            'piece_livreur.required' => 'Veuillez sélectionner un fichier',
            'piece_livreur.mimes' => 'le fichier doit etre au format .pdf',
            'date_piece.required' => 'la date est vide',
            // 'ville_livreur.required' => 'la ville est vide',
            'mdp_livreur.required' => 'le mot de passe ne peut être vide !'
        ]);

        //verifon maintenant si le deja utiliser ou pas !!

        $Emails_livreurs = livreurs::where('email_livreur',$data_livreur['email_livreur'])->first();
        if($Emails_livreurs){
            return back()->withInput()->withErrors(['email_livreur' => 'Cette addresse email est déja utilisé']);
        }
        $existingContact = livreurs::where('contact_livreur', $data_livreur['contact_livreur'])->first();
        if ($existingContact) {
             return back()->withInput()->withErrors(['contact_livreur' => 'Ce contact est déjà utilisé.']);
        }

       $chemin = Storage::disk('local')->put('avatars',$request->file('piece_livreur'));
    //    $contents = Storage::get($chemin);
       $url = Storage::url($chemin);

       $livreurs_cout = new livreurs();
        $livreurs_cout->nom_livreur = $data_livreur['nom_livreur'];
        $livreurs_cout->prenom_livreur = $data_livreur['prenom_livreur'];
        $livreurs_cout->email_livreur = $data_livreur['email_livreur'];
        $livreurs_cout->contact_livreur = $data_livreur['contact_livreur'];
        $livreurs_cout->piece_livreur = $url;
        $livreurs_cout->date_piece = $data_livreur['date_piece'];
        // $livreurs_cout->ville_livreur = $data_livreur['ville_livreur'];
        $livreurs_cout->mdp_livreur = $data_livreur['mdp_livreur'];
       $livreurs_cout->save();

        // $data_livreur = $request->all();
        return view('Fashion.Action_livreur',['AllData' => $data_livreur]);
    }


    public function Traitement_couturier(Request $request){

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

        $Emails_fashion = Fashion::where('email_ctr',$data_fashion['email_ctr'])->first();
        if($Emails_fashion){
            return back()->withInput()->withErrors(['email_ctr' => 'Cette addresse email est déja utilisé']);
        }

        $chemin_pieces = Storage::disk('local')->put('fashion_house', $request->file('piece_ctr'));
        $chemin_image_user = Storage::disk('local')->put('fashion_house.images', $request->file('img_entreprise'));
        $chemin_certif_user = Storage::disk('local')->put('fashion_house.certif', $request->file('certif_red'));

        $url_chemin_piece = Storage::url($chemin_pieces);
        $url_chemin_image_user = Storage::url($chemin_image_user);
        $url_chemin_certif_user = Storage::url($chemin_certif_user);

        $data_ctrs = new Fashion();

        $data_ctrs->nom = $data_fashion['nom_ctr'];
        $data_ctrs->prenom = $data_fashion['prenom_ctr'];
        $data_ctrs->email = $data_fashion['email_ctr'];
        $data_ctrs->contact = $data_fashion['contact_ctr'];
        $data_ctrs->ville = $data_fashion['ville_ctr'];
        $data_ctrs->quartier = $data_fashion['quartier_ctr'];
        $data_ctrs->mdp = $data_fashion['mdp_ctr'];
        $data_ctrs->piece = $url_chemin_piece;
        $data_ctrs->date_pem = $data_fashion['date_pem'];
        $data_ctrs->img_entreprise = $url_chemin_image_user;
        $data_ctrs->certif_red = $url_chemin_certif_user;
        $data_ctrs->annee_exp = $data_fashion['annee_exp'];
        $data_ctrs->domaine = $data_fashion['domaine'];
        $data_ctrs->commentaire = $data_fashion['commentaire'];

        //$data_ctrs->save();

        return view('Fashion.Action_couture', [
            'data_couture' => $data_fashion,
            'chemin_piece' => $url_chemin_piece,
            'chemin_img_entreprise' => $url_chemin_image_user,
            'chemin_certif_der' => $url_chemin_certif_user,
        ]);

    }


    public function Profils(Request $request){
        $url = $request->url();
        $path = parse_url($url,PHP_URL_PATH);
        $seg = explode('/', $path);
        $result = $seg[1];
        return view('Fashion.profils',['request' => $result]);
    }



    public function Search_fashion(Request $request) {
        $url = $request->url();
        $path = parse_url($url,PHP_URL_PATH);
        $seg = explode('/', $path);
        $result = $seg[1];

        $all_fashion = $request->validate([
            'ma_ville' => 'required|string',
            'mon_quartier' => 'required|string',
            'main_search' => 'required|string',
        ], [
            'ma_ville.required' => 'votre ville ?',
            'mon_quartier.required' => 'votre quartier',
            'main_search.required' => 'ville ou quartier du couturier',
        ]);
    
        $tous = Fashion::where('ville', 'like', '%' . $all_fashion['ma_ville'] . '%')
                        ->orWhere('quartier', 'like', '%' . $all_fashion['main_search'] . '%')
                        ->paginate(6);
        
        $search_quartier_result =Fashion::where(function ($query) use ($all_fashion) {
                                        $query->where('ville', 'like', '%' . $all_fashion['main_search'] . '%')
                                            ->orWhere('quartier', 'like', '%' . $all_fashion['main_search'] . '%');
                                    })
                                    ->paginate(6);

        $search_mon_quartier =Fashion::where(function ($query) use ($all_fashion) {
                                $query->where('quartier', 'like', '%' . $all_fashion['mon_quartier'] . '%')
                                        ->orWhere('ville', 'like', '%' . $all_fashion['mon_quartier'] . '%');
                                    })
                                    ->paginate(6);
        return view('Fashion.myfashion', [
            'req' => $tous,
            'All' => $all_fashion,
            'request' => $result,
            'seach_fash' => $search_quartier_result,
            'search_quart' => $search_mon_quartier
        ]);
    }
    
    // methode pour le profils de l'utilisateur 
    public function showUserProfile($id) {
        $user = Fashion::findOrFail($id); // Récupère l'utilisateur avec l'ID spécifié
        return view('welcome', ['userkey' => $user]);
    }

}
