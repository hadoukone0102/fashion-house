<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/couture.css">
    <link rel="stylesheet" href="CSS/compte.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    <script src="JS/couture.js" defer></script>
    <script src="JS/compte.js" defer></script>
  </head>
  <body>

    <div class="container">
        {{-- <div class="first-formulaire"> --}}
            <div class="content_form_main" id="first_form">
                <h1 class="text-center p-5 border">Première Page d'inscription</h1>
                <form action="/action_couture" class="client" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="premier">
                        <h1 class="text-center">Etapes 1/2</h1>
                        <!-- le premier -->
                            <div class="form">
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="name">Votre Nom:</label>
                                    <input type="text" class="form-control" name="nom_ctr">
                                    @error('nom_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="name">Votre Prenom:</label>
                                    <input type="text" class="form-control" name="prenom_ctr">
                                    @error('prenom_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                            </div>
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="name">Votre Email:</label>
                                    <input type="email" class="form-control" name="email_ctr">
                                    @error('email_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="name">Votre Contact:</label>
                                    <input type="number" class="form-control" name="contact_ctr">
                                    @error('contact_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                            </div>
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="Ville">Votre Ville:</label>
                                    <input type="text" class="form-control" name="ville_ctr">
                                    @error('ville_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="name">Votre Quartier:</label>
                                    <input type="text" class="form-control" name="quartier_ctr">
                                    @error('quartier_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                            </div>
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="Ville">Votre Mot de passe:</label>
                                    <input type="password" class="form-control" name="mdp_ctr">
                                    @error('mdp_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="name">Confirmer mot de passe:</label>
                                    <input type="password" class="form-control" name="mdp_conf_ctr">
                                    @error('mdp_conf_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                            </div>
                            <div class="input-form-inscrip">
                                {{-- <a href="#" class="btn" id="last">Retour</a> --}}
                                <a href="#" class="btn" id="next" >Suivants</a>
                            </div>
                            </div>
                        <!-- le premier -->
                    </div>

                    <div class="second">
                        <h1 class="text-center">Etapes 2/2</h1>
                    <!-- le second -->

                        <div class="form">
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="name">Votre Pièce d'identité (pdf)</label>
                                    <input type="file" class="form-control" name="piece_ctr">
                                    @error('piece_ctr')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="date peremption">Date de Péremption</label>
                                    <input type="date" class="form-control" name="date_pem">
                                    @error('date_pem')
                                    <div class="alert alert-danger">{{ $message }}</div>    
                                @enderror
                                </div>
                                
                            </div>
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="name">Image de l'entreprise (png,jpg,jpeg)</label>
                                    <input type="file" class="form-control" name="img_entreprise">
                                    @error('img_entreprise')
                                    <div class="alert alert-danger">{{ $message }}</div>    
                                @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="name">Votre Certificat de Résidence (pdf)</label>
                                    <input type="file" class="form-control" name="certif_red" >
                                    @error('certif_red')
                                    <div class="alert alert-danger">{{ $message }}</div>    
                                @enderror
                                </div>
                            </div>
                            <div class="input-form-inscrip">
                                <div class="input-form-1">
                                    <label for="name">Années d'Expériences</label>
                                    {{-- <input type="number" class="form-control" name="annee_exp" value="{{old('annee_exp')}}"> --}}
                                    <select class="form-select"  name="annee_exp" value="{{old('annee_exp')}}">
                                      
                                        <option selected>Choisissez une option</option>
                                        <option value="debutant">1 à 5 mois</option>
                                        <option value="amateur">1 à 5 ans</option>
                                        <option value="junior">5 à 10 ans</option>
                                        <option value="segnior">10 à 15 ans</option>
                                        <option value="expert">15 ans et plus</option>
                                    </select>
                                    @error('annee_exp')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                                <div class="input-form-1">
                                    <label for="name">Votre Domaine de base</label>
                                    <select class="form-select" name="domaine" value="{{old('domaine')}}">
                                        <option selected>Choisissez une option</option>
                                        <option value="enfant">Enfant</option>
                                        <option value="Hommes">Hommes</option>
                                        <option value="Femmes">Femmes</option>
                                        <option value="tous">tous terrain</option>
                                    </select>
                                    @error('domaine')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                                </div>
                            </div>
                            <div class="input-form-inscrip">
                                    <textarea class="form-control" id="message-text" placeholder="Un mot à vos clients" name="commentaire" value="{{old('commentaire')}}"></textarea>
                                    @error('commentaire')
                                        <div class="alert alert-danger">{{ $message }}</div>    
                                    @enderror
                            </div>
                            <div class="input-form-inscrip">
                                <a href="#" class="btn" id="last">Retour</a>
                                <button type="submit" class="btn">Enregister</button>
                            </div>
                        </div>

                    <!-- fin du second -->
                    </div>


                </form>
            </div>
            <!-- le second formulaire -->
            {{-- <div class="content_form_main" id="second_form">
                <h1 class="text-center p-5 border">Deuxième Page d'inscription</h1>
                <form action="/action_couture" class="client" method="POST" enctype="multipart/form-data">
                        @csrf




                   




                </form>
            </div> --}}
    </div>
{{-- </div> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>