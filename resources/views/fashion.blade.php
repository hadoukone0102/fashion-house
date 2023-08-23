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
    <link rel="stylesheet" href="CSS/livreur.css">
    {{-- <link rel="stylesheet" href="CSS/compte.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    <script src="JS/script.js" defer></script>
    <script src="JS/couture.js" defer></script>
  </head>
  <body>

    <div class="header">

        <header>
      <div class="first">
        <a href="#" class="logo"><span>F</span>ashion<span>_</span><span>H</span>ouse</a>
        <form action="#">
            <label for="Search" class="fa-solid fa-magnifying-glass"></label>
            <input type="text" autocomplete="on" id="search">
        </form>
      </div>
      <div class="second">
        <nav class="navBar" id="none">
            <a href="/">Acceuil</a>
            <a href="#" id="services">Service</a>
            <a href="#" id="produits">Produit</a>
            <a href="#" id="blogs">Blog</a>
        </nav>
        <div id="menubar" class="fa fa-bars"></div>
        <div class="icons">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Favories"><i class="fa-regular fa-star"></i></a>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-shopping-cart"></i></a>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eyeModale"><i class="fa-regular fa-eye"></i></a>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Couturier"><i class="fa-solid fa-shirt"></i></a>
        </div>
        <nav class="navBar_link">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Seconnecter" data-bs-whatever="@mdo">Se connecté</a>
            <a href="#">Profils</a>
        </nav>
      </div>
      <!-- <div class="back">
            <a href="/couture" class="btn_first">Commencer Ma Session</a>
      </div> -->
    </header>

    </div>

    <div class="container">
          <!-- code bootstrap -->


<!-- seconnecter -->
<div class="modal fade" id="Seconnecter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fashion House Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-4">
            <label for="recipient-name" class="col-form-label">Votre Email..</label>
            <input type="email" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-4 pd-5">
            <label for="recipient-name" class="col-form-label">Votre Mot de passe</label>
            <input type="password" class="form-control" id="recipient-name" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#" class="inscription btn btn-primary" data-bs-toggle="modal" data-bs-target="#inscription">Créer un compte</a>
        <button type="button" class="btn btn-primary">Connexion</button>
      </div>
    </div>
  </div>
</div>

           <!-- les choix pour inscriptions -->
           <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choix du Profils</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-4">
                    <label for="recipient-name" class="col-form-label">Inscrit en tant que Couturier</label>
                   <a href="/inscription" class="btn">Compte Couturier</a>
                  </div>
                  <div class="mb-4">
                    <label for="recipient-name" class="col-form-label">Inscrit en tant que Client</label>
                   <a href="/client" class="btn">Compte Client</a>
                  </div>
                  <div class="mb-4">
                    <label for="recipient-name" class="col-form-label">Inscrit en tant que Livreur</label>
                   <a href="/livreur-compte" class="btn">Compte Livreur</a>
                  </div>
                </form>
              </div>
              {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
                <button type="button" class="btn btn-primary">Enregister et fermer</button>
              </div> --}}
            </div>
          </div>
          </div>
          

        <!-- mon panier -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mon Panier Shopping</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Auccun produit..</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
        <button type="button" class="btn btn-primary">Enregister et fermer</button>
      </div>
    </div>
  </div>
</div>


    <!-- mon les yeux -->
<div class="modal fade" id="eyeModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mes Produits interessant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Auccun produit..</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
        <button type="button" class="btn btn-primary">Enregister et fermer</button>
      </div>
    </div>
  </div>
</div>

 <!-- mes Favories -->
 <div class="modal fade" id="Favories" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mes Produits interessant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Auccun produit..</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
        <button type="button" class="btn btn-primary">Enregister et fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- mon Couturier -->
<div class="modal fade" id="Couturier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mes Couturier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Auccun...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
        <button type="button" class="btn btn-primary">Enregister et fermer</button>
      </div>
    </div>
  </div>
</div>


<!-- code bootstrap -->
        @yield('content')
        @yield('Operation')
        @yield('livreur')
    </div>


      <footer class="footer">
        <div class="content_ftr">
            <h3> Fashion House votre service toujour disponible</h3>
            <p>&copy; tous drois reserver | kone hadou</p>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>