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
    <script src="JS/script.js" defer></script>
    <script src="JS/couture.js" defer></script>
  </head>
  <body>

    <div class="container">
        <div class="content_form_main">
            <h1 class="text-center p-5 border">Créeation d'un compte Livreur</h1>
            <form action="/compte_livreur_action" method="POST" class="client" enctype="multipart/form-data">
                @csrf
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="name">Votre Nom:</label> 
                        <input type="text" class="form-control" name="nom_livreur" value="{{old('nom_livreur')}}">
                        @error('nom_livreur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Votre Prenom:</label>
                        <input type="text" class="form-control" name="prenom_livreur" value="{{old('prenom_livreur')}}">
                        @error('prenom_livreur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="name">Votre Email:</label>
                        <input type="email" class="form-control" name="email_livreur" value="{{old('email_livreur')}}">
                        @error('email_livreur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Votre Contact:</label>
                        <input type="number" class="form-control" name="contact_livreur" value="{{old('contact_livreur')}}">
                        @error('contact_livreur')
                        <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="name">Votre Pièce d'identité (pdf)</label>
                        <input type="file" class="form-control" name="piece_livreur" value="{{old('piece_livreur')}}">
                        @error('piece_livreur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="date peremption">Date de Péremption</label>
                        <input type="date" class="form-control" name="date_piece" value="{{old('date_piece')}}">
                        @error('date_piece')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="Ville">Votre Ville:</label>
                        <input type="text" class="form-control" name="ville_livreur" value="{{old('ville_livreur')}}">
                        @error('ville_livreur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Votre mot de passe:</label>
                        <input type="password" class="form-control" name="mdp_livreur" value="{{old('mdp_livreur')}}">
                        @error('mdp_livreur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <button type="submit" class="btn">Enregistrer</button>
                    <a href="{{route('user.exist')}}">Se Connecté</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>