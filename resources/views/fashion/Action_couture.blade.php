<h1>Résultats du traitement du formulaire</h1>

<p>formulaire Livreur:</p>
<ul>
    <li>Nom : {{ $data_couture['nom_ctr'] }}</li>
    <li>Prenom : {{ $data_couture['prenom_ctr'] }}</li>
    <li>Email :{{ $data_couture['email_ctr'] }}</li>
    <li>Contact : {{ $data_couture['contact_ctr']}}</li>
    <li>Ville : {{ $data_couture['ville_ctr']}}</li>
    <li>quartier_ctr : {{ $data_couture['quartier_ctr']}}</li>
    <li>Mot de passe : {{ $data_couture['mdp_ctr']}}</li>
    {{-- <li>Confirmer Mot de passe : {{ $data_couture['mdp_conf_ctr']}}</li> --}}

    <li>piece : {{ $chemin_piece }}</li>
    <li>peremption : {{ $data_couture['date_pem'] }}</li>
    <li>image  :{{ $chemin_img_entreprise }}</li>
    <li>Certificat : {{ $chemin_certif_der }}</li>
    <li>Experience : {{ $data_couture['annee_exp']}}</li>
    <li>domaine : {{ $data_couture['domaine']}}</li>
    <li>commentaire : {{ $data_couture['commentaire']}}</li>

    <!-- Ajoutez d'autres champs ici -->
</ul>
