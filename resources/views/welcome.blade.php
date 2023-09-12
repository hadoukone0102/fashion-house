<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/couture.css">
    {{-- <link rel="stylesheet" href="CSS/compte.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fashion House</title>
    <script src="JS/script.js" defer></script>
    <script src="JS/couture.js" defer></script>
    <script src="JS/welcom.js" defer></script>
  </head>
  <body>
    
    <div class="header">
        <header>
            <div class="first">
                <a href="#" class="logo"><span>F</span>ashion<span>_</span><span>H</span>ouse</a>
                {{-- <div class="alert alert-success">{{ session('message') }}</div> --}}
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
                    <a href="{{route('mon.panier')}}"><i class="fa fa-shopping-cart"><span class="badge bg-info">{{$counts}}</span></i></a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eyeModale"><i class="fa-regular fa-eye"></i></a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Couturier"><i class="fa-solid fa-shirt"></i></a>
                <!-- class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" -->
                </div>
                <nav class="navBar_link">
                    @if (Route::has('login'))
                        @auth
                            <a style="display: none" href="{{ url('/dashboard') }}" class="">Profils</a>
                            @if(auth()->check() && $user_co)
                                <a href="#" style="display: none" class="inscription btn btn-primary" data-bs-toggle="modal" data-bs-target="#inscription">Compte professionnel</a>
                                <p> Bienvenue {{ auth()->user()->name}} </p>
                            @else
                                <a href="#" class="inscription btn btn-primary" data-bs-toggle="modal" data-bs-target="#inscription">Compte professionnel</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="">Log in</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                            @endif
                        @endauth
                    @endif
                    {{-- <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Seconnecter" data-bs-whatever="@mdo">Se connecté</a> --}}
                    {{-- <a href="/profils">Profils</a> --}}

                </nav>
            </div>
            @if(isset($request))
                    @if($request == 'couture' || $request == 'profils' || $request == 'myfashion')
                        <div class="back" style="display: none;">
                            <a href="/couture" class="btn_first">Commencer Ma Session</a>
                        </div>
                    @else
                        <div class="back">
                            <a href="/couture" class="btn_first">Commencer Ma Session</a>
                        </div>
                    @endif 
            @endif
  
        </header>

    </div>


    <!-- les choix pour inscriptions -->
    <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
  
  
    <!-- mon panier -->
    <style>
        /* Styles pour le contenu scrollable */
.scrollable-content {
    max-height: 400px; 
    overflow-y: auto; 
    width: auto;
    padding: 15px;
}
#my_th{
    font-size: 2rem;
    color: #2c2c54;
}

    </style>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mon Panier Shopping</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body scrollable-content">
                {{-- <div class="modal-body "> --}}
                    <!-- Votre contenu ici -->
                
                    <table id="cart" class="table table-striped">
                        <thead>
                            <tr>
                                <th id="my_th">Article</th>
                                <th id="my_th">Nom article</th>
                                <th id="my_th">Qantités</th>
                                <th id="my_th">prix</th>
                                <th id="my_th">total</th>
                                <th id="my_th">Actions</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @if ($data_panier)
                                @foreach ($data_panier as $details)
                                    <tr >
                                        <td data-th="imgarticle">
                                                <div class="col-sm-3 hidden-xs">
                                                    <img src="{{$details->image_article}}" class="card-img-top" alt="">
                                                </div>
                                        </td>
                                        <td data-th="product">
                                            {{-- <div class="row"> --}}
                                                <div class="col-sm-9">
                                                    <h4 class="normargin">{{$details->nom_article}}</h4>
                                                </div>
                                            {{-- </div> --}}
                                        </td>
                                        <td data-th="qantity">{{$details->quantiter}}</td>
                                        <td data-th="prix">{{$details->prix_article}}F cfa</td>
                                        <td data-th="Subtotal" class="text-center">{{ $details->prix_article * $details->quantiter}}F cfa</td> 
                                        <td class="actions">
                                            <a href="#" class="text-center"><i class="fa fa-trash text-center" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            @endif
                        </tbody>
                    </table>

                {{-- </div> --}}
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
  

<div class="container">
    <section class="Service" id="Service">
    
        <div class="content_service">
            <div class="grild_service">
                <div class="img">
                    <img src="img/sevice1.png" alt="">  
                </div>
                <div class="details">
                    {{-- <p>Fashion House le meilleur</p> --}}
                </div>
                <a href="/couture" class="btn">Débuter une Session</a>
            </div>
            <div class="grild_service">
                <div class="img">
                <img src="img/service2.png" alt="">
                </div>
                <div class="details">
                    {{-- <p>Fashion House le meilleur</p> --}}
                </div>
                <a href="/livreur" class="btn">Les services de Livreur</a>
            </div>
        </div>

    </section>
    <h1 class="titre">Les Plus Utilisés chez <span>Fashion House</span></h1>
    @if (session('sucess'))
        <div class="alert alert-success">
            {{session('sucess')}}
        </div>
    @endif
    <section class="produit" id="produit">
        <!-- <div class="produits_ctn"> -->
            <div class="grilds_main">

                        @foreach ($produit_of_couturierA as $prod)
                            <div class="grilds_produits">
                                <div class="img_prod">
                                    <img src="kone@gmail.com/{{$prod->prod}}" alt="">
                                </div>
                                <div class="decoration">
                                    <div class="decora">
                                        <i class="fa-regular fa-star"></i>
                                        
                                        <form action="{{route('cart.store')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_prod" value="{{$prod->id}}">
                                            
                                            @if (auth()->check())
                                            <input type="hidden" name="id_client" value="{{auth()->user()->email}}">
                                            @else
                                            <input type="hidden" name="id_client" value="">
                                            @endif
                                            <input type="hidden" name="prod_name" value="{{$prod->nom_produit}}">
                                            <input type="hidden" name="prod_price" value="{{$prod->prix}}">
                                            <input type="hidden" name="img_prod" value="{{$prod->prod}}">
                                            <button type="submit"><i class="fa fa-shopping-cart"></i></button>
                                        </form>

                                        {{-- <a href="{{route('ajouter.panier',$prod->id) }}"><i class="fa fa-shopping-cart"></i></a> --}}
                                        <i class="fa regular fa-eye"></i>
                                        <i class="fa-solid fa-shirt"></i>
                                    </div>
                                </div>
                                <a href="{{ route('myfashion.fave', ['iduser' => $prod->iduser, 'idprod' => $prod->id])}}" class="btn">joindre le Couturier </a>
                            </div>
                        @endforeach  

                        @foreach ($produit_of_couturierB as $prod)
                            <div class="grilds_produits">
                                <div class="img_prod">
                                    <img src="hadou@gmail.com/{{$prod->prod}}" alt="">
                                </div>
                                <div class="decoration">
                                    <div class="decora">
                                        <i class="fa-regular fa-star"></i>
                                        <form action="{{route('cart.store')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_prod" value="{{$prod->id}}">
                                            @if (auth()->check())
                                            <input type="hidden" name="id_client" value="{{auth()->user()->email}}">
                                            @else
                                            <input type="hidden" name="id_client" value="">
                                            @endif
                                            <input type="hidden" name="prod_name" value="{{$prod->nom_produit}}">
                                            <input type="hidden" name="prod_price" value="{{$prod->prix}}">
                                            <input type="hidden" name="img_prod" value="{{$prod->prod}}">
                                            <button type="submit"><i class="fa fa-shopping-cart"></i></button>
                                        </form>
                                        {{-- <a href="{{route('ajouter.panier',$prod->id) }}"><i class="fa fa-shopping-cart"></i></a> --}}
                                        <i class="fa regular fa-eye"></i>
                                        <i class="fa-solid fa-shirt"></i>
                                    </div>
                                </div>
                                <a href="{{ route('myfashion.fave', ['iduser' => $prod->iduser, 'idprod' => $prod->id])}}" class="btn">joindre le Couturier </a>
                            </div>
                        @endforeach  
                        
        </div>
    </section>


    <section class="blog" id="blog">
        <div class="blog_part">
            <div class="blog_grild">
                <div class="box_blog">
                    <div class="boite">
                        <div class="perso">
                        <img src="img/blog/user1.png" alt="couturier">
                        </div>
                    </div>
                    <div class="text_box">
                        <p>
                        Il est avec une grande admiration que je souhaite exprimer 
                        toute mon éloge pour votre remarquable talent dans l'art de la couture.
                        Votre créativité et votre maîtrise des tissus sont tout simplement époustouflantes,
                        et chaque pièce que vous créez est une véritable œuvre d'art.
                        </p>
                    </div>
                    <div class="atalicour">
                        <div class="icon1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="icon2">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                    </div>
                    <a href="#" class="btn">Voir plus...</a>
                </div>

                <div class="box_blog">
                    <div class="boite">
                        <div class="perso">
                        <img src="img/blog/user1.png" alt="couturier">
                        </div>
                    </div>
                    <div class="text_box">
                        <p>
                        Vos créations reflètent une harmonie parfaite entre l'innovation et l'élégance intemporelle
                        . Chaque couture est soigneusement pensée, et votre souci du détail est absolument remarquable.
                        Vous avez le don de transformer de simples morceaux de tissu en des 
                        vêtements qui célèbrent la beauté et l'individualité de chaque personne qui les porte.
                        </p>
                    </div>
                    <div class="atalicour">
                        <div class="icon1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="icon2">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                    </div>
                    <a href="#" class="btn">Voir plus...</a>
                </div>

                <div class="box_blog">
                <div class="boite">
                        <div class="perso">
                        <img src="img/blog/user1.png" alt="couturier">
                        </div>
                    </div>
                    <div class="text_box">
                        <p>
                        Au-delà de votre talent indéniable, votre dévouement envers votre métier est une source d'inspiration pour tous ceux
                        qui vous entourent. Vous travaillez sans relâche pour perfectionner votre art et offrir à vos clients des vêtements de la plus haute qualité.
                        Votre professionnalisme et votre approche méticuleuse font de vous un modèle à suivre dans l'industrie de la mode.
                        </p>
                    </div>
                    <div class="atalicour">
                        <div class="icon1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="icon2">
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                    </div>
                    <a href="#" class="btn">Voir plus...</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- code bootstrap -->

</div>

    <footer class="footer">
    <div class="content_ftr">
    <h3> Fashion House votre service toujour disponible </h3>
    <p>&copy; tous drois reserver | kone hadou</p>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
