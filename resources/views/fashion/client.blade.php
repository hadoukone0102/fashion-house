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
            <h1 class="text-center p-5 border">Création d'un compte client</h1>
            <form action="/traitement" method="POST" class="client">
                @csrf
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="name">Votre Nom: </label>
                        <input type="text" class="form-control" name="nom" value="{{old('nom')}}">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Votre Prenom:</label>
                        <input type="text" class="form-control" name="prenom" value="{{old('prenom')}}">
                        @error('prenom')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="name">Votre Email:</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Votre Contact:</label>
                        <input type="number" class="form-control" name="contact" value="{{old('contact')}}">
                        @error('contact')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="Ville">Votre Ville:</label>
                        <input type="text" class="form-control" name="ville" value="{{old('ville')}}">
                        @error('ville')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Votre Quartier:</label>
                        <input type="text" class="form-control" name="quartier" value="{{old('quartier')}}">
                        @error('quartier')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <div class="input-form-1">
                        <label for="Ville">Votre Mot de passe:</label>
                        <input type="password" class="form-control" name="mdp" value="{{old('mdp')}}">
                        @error('mdp')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-form-1">
                        <label for="name">Confirmer mot de passe:</label>
                        <input type="password" class="form-control" name="mdp_conf" value="{{old('mdp_conf')}}">
                        @error('mdp_conf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="input-form-inscrip">
                    <button type="submit" class="btn">Enregistrer</button>
                        <a href="/index">Se Connecté</a>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>