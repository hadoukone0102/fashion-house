<h1>Résultats du traitement du formulaire</h1>

<p>formulaire Livreur:</p>
<ul>
    <li>Nom : {{ $AllData['nom_livreur'] }}</li>
    <li>Prenom : {{ $AllData['prenom_livreur'] }}</li>
    <li>Email :{{ $AllData['email_livreur'] }}</li>
    <li>Contact : {{ $AllData['contact_livreur']}}</li>
    <li>piece : {{ $url}}</li>
    <li>date : {{ $AllData['date_piece']}}</li>
    {{-- <li>Ville : {{ $AllData['ville_livreur']}}</li> --}}
    <li>Mot de passe : {{ $AllData['mdp_livreur']}}</li>

    <!-- Ajoutez d'autres champs ici -->
</ul>
