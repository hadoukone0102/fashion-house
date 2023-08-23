
<h1>informations personnelle</h1>
<div class="user-profile">
    <h1>{{ $userkey->nom }} {{ $userkey->prenom }}</h1>
    <p>Ville : {{ $userkey->ville }}</p>
    <p>Quartier : {{ $userkey->quartier }}</p>
    <p>Expérience : {{ $userkey->annee_exp }}</p>
    <p>Type de Couture : {{ $userkey->domaine }}</p>
    <p>Contact : {{ $userkey->contact }}</p>
    <!-- Autres informations à afficher -->

    <a href="/couture" class="btn">Retour à la liste</a>
</div>
