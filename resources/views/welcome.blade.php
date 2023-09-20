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
    <link rel="stylesheet" href="CSS/animation.css">
    {{-- <link rel="stylesheet" href="CSS/compte.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fashion House</title>
      <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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
                    <a href="{{route('mes.vues')}}"><i class="fa-regular fa-eye"><span class="badge bg-info">{{$all_view}}</span></i></a>
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
                            <a href="/couture" id="top_animation" class="btn_first">Commencer Ma Session</a>
                        </div>
                    @else
                        <div class="back">
                            <a href="/couture" id="top_animation" class="btn_first">Commencer Ma Session</a>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="img/main.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main1.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main2.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main3.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main4.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main5.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main6.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="img/main7.png" alt="">
                                    </div>
                                  {{-- <div class="swiper-slide">Slide 9</div> --}}
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="autoplay-progress">
                                  <svg viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="20"></circle>
                                  </svg>
                                  <span></span>
                                </div>
                              </div>


                        </div>
                    @endif 
            @endif


            <style>
                /* html,
                body {
                  position: relative;
                  height: 100%;
                }
            
                body {
                  background: #eee;
                  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                  font-size: 14px;
                  color: #000;
                  margin: 0;
                  padding: 0;
                }
             */
                .swiper {
                    width: 100%;    
                    height: 100%;
                }
            
                .swiper-slide {
                    width: 100%;    
                    height: 70rem;
                }
            
                .swiper-slide img {
                  display: block;
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                }
            
                .autoplay-progress {
                  position: absolute;
                  right: 16px;
                  bottom: 16px;
                  z-index: 10;
                  width: 48px;
                  height: 48px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  font-weight: bold;
                  color: var(--swiper-theme-color);
                }
            
                .autoplay-progress svg {
                  --progress: 0;
                  position: absolute;
                  left: 0;
                  top: 0px;
                  z-index: 10;
                  width: 100%;
                  height: 100%;
                  stroke-width: 4px;
                  stroke: var(--swiper-theme-color);
                  fill: none;
                  stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
                  stroke-dasharray: 125.6;
                  transform: rotate(-90deg);
                }
              </style>
  
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
  
  <section class="flex" id="animation_all">
    <div class="boite_animation">
        <div class="spinner-grow m-1" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow m-1" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow m-1" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow m-1" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
  </section>

<div class="container">

    <!-- les services -->

    <section class="Service" id="Service">
    
        <div class="content_service">
            <div class="grild_service" id="premier_serv">
                <div class="img">
                    <img src="img/sevice1.png" alt="">  
                </div>
                <div class="details">
                    {{-- <p>Fashion House le meilleur</p> --}}
                </div>
                <a href="/couture" class="btn">Chercher un Couturier</a>
            </div>
            <div class="grild_service" id="premier_second">
                <div class="img">
                <img src="img/part/00.png" alt="">
                </div>
                <div class="details">
                    {{-- <p>Fashion House le meilleur</p> --}}
                </div>
                <a href="/livreur" class="btn">Prêt à porter</a>
            </div>
        </div>

    </section>

     <!-- les services fin -->

    <h1 class="titre">Les Plus Utilisés chez <span>Fashion House</span></h1>

    @if (session('sucess'))
        <div class="alert alert-success">
            {{session('sucess')}}
        </div>
    @endif

    <section class="produit" id="produit">
        <!-- <div class="produits_ctn"> -->
            <div class="grilds_main" >

                        @foreach ($produit_of_couturierA as $prod)
                            <div class="grilds_produits" >
                                <!-- images -->
                                <div class="img_prod">
                                    <img src="kone@gmail.com/{{$prod->prod}}" alt="">
                                </div>
                                <!-- images -->

                                <!-- decoration  -->

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
                                        <form action="{{route('article.view')}}" method="POST">
                                            @csrf

                                            @if (auth()->check())
                                            <input type="hidden" name="id_client" value="{{auth()->user()->email}}">
                                            @else
                                            <input type="hidden" name="id_client" value="">
                                            @endif
                                            <input type="hidden" name="prod_id" value="{{$prod->id}}">
                                            <input type="hidden" name="prod_iduser" value="{{$prod->iduser}}">
                                            <input type="hidden" name="prod_price" value="{{$prod->prix}}">
                                            <input type="hidden" name="img_prod" value="{{$prod->nom_produit}}">
                                            <input type="hidden" name="image" value="{{$prod->prod}}">
                                            <button type="submit"><i class="fa regular fa-eye"></i></button>
                                        </form>
                                        
                                        <i class="fa-solid fa-shirt"></i>
                                    </div>
                                </div>
                                <div class="details_articles">
                                    <span>Prix : <h3>{{ $prod->prix }}</h3></span>
                                    <span>{{$prod->nom_produit}}</span>
                                    {{-- <span>Taille : <h3>XM,XL</h3></span> --}}
                                </div>
                                <!-- images -->
                                <a href="{{ route('myfashion.fave', ['iduser' => $prod->iduser, 'idprod' => $prod->id])}}" class="btn">Voir plus </a>
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
                                        <form action="{{route('article.view')}}" method="POST">
                                            @csrf

                                            @if (auth()->check())
                                            <input type="hidden" name="id_client" value="{{auth()->user()->email}}">
                                            @else
                                            <input type="hidden" name="id_client" value="">
                                            @endif
                                            <input type="hidden" name="prod_id" value="{{$prod->id}}">
                                            <input type="hidden" name="prod_iduser" value="{{$prod->iduser}}">
                                            <input type="hidden" name="prod_price" value="{{$prod->prix}}">
                                            <input type="hidden" name="img_prod" value="{{$prod->nom_produit}}">
                                            <input type="hidden" name="image" value="{{$prod->prod}}">
                                            <button type="submit"><i class="fa regular fa-eye"></i></button>
                                        </form>
                                        <i class="fa-solid fa-shirt"></i>
                                    </div>
                                </div>

                                <div class="details_articles">
                                    <span>Prix : <h3>20000</h3></span>
                                    <span>Robe bien styler</span>
                                    {{-- <span>Taille : <h3>XM,XL</h3></span> --}}
                                </div>
                                <a href="{{ route('myfashion.fave', ['iduser' => $prod->iduser, 'idprod' => $prod->id])}}" class="btn">Voir plus </a>
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
                    {{-- <a href="#" class="btn">Voir plus...</a> --}}
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
                    {{-- <a href="#" class="btn">Voir plus...</a> --}}
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
                    {{-- <a href="#" class="btn">Voir plus...</a> --}}
                </div>
            </div>
        </div>
    </section>
</div>

<!-- code bootstrap -->

</div>
    <footer>
        <div class="footer">
            <div class="footer_one">
                <div class="lo">
                    <a href="#" class="logo"><span>F</span>ashion<span>_</span><span>H</span>ouse</a>
                </div>
                <div class="code_qr">
                    <span>Abidjan,Cocody angré chateaux</span>
                    <span>&abreve; contact 0595640996</span>
                    <span>konehadou0201@gmail.com</span>
                </div>
            </div>
            <div class="architec">
                <h3>Architechture</h3>
                <nav>
                    <a href="#">Acceuil</a>
                    <a href="#">service</a>
                    <a href="#">Produit</a>
                    <a href="#">Blog</a>
    
                </nav>
            </div>
            <div class="architec">
                <h3>Categories</h3>
                <nav>
                    <a href="#">coutures</a>
                    <a href="#">Ventes</a>
                    <a href="#">livraison</a>
                    {{-- <a href="#">Blog</a> --}}
    
                </nav>
            </div>
            <div class="followers">
                <h3>Follow me</h3>
                <nav>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-square-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </nav>
            </div>
        </div>
    {{-- <div class="content_ftr">
        <h3> Fashion House votre service toujour disponible </h3>
        <p>&copy; tous drois reserver | kone hadou</p>
    </div> --}}
            <div class="finish">
                <div class="fini_first">
                    <span>teams</span>
                    <span>privacy</span>
                    <span>family</span>
                </div>
                <div class="fini_second">
                    <p>&copy; tous drois reserver | kone hadou</p>
                </div>
            </div>
    </footer>
   
    <script>

                
        window.addEventListener('load', () => {
            const loadingPage = document.getElementById('animation_all');
            
            // Affiche l'élément au chargement de la page
            loadingPage.style.display = 'block';

            // Après 2,5 secondes (2500 millisecondes), masque l'élément
            setTimeout(() => {
                loadingPage.style.display = 'none';
            }, 2000);
        });


        document.getElementById('top_animation').addEventListener('click', function() {
        // Afficher la page de chargement
        document.getElementById('animation_all').style.display = 'block';

        // Utilisez setTimeout pour masquer la page de chargement après un certain délai (par exemple, 500 millisecondes)
        setTimeout(function() {
            document.getElementById('animation_all').style.display = 'none';
            // Affichez les résultats de la recherche ici
        }, 2000);  

        });

    </script>
     <!-- Initialize Swiper -->
  <script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
