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
                    {{-- <a href="#" id="services">Service</a>
                    <a href="#" id="produits">Produit</a> --}}
                    <a href="#" id="blogs">Blog</a>
                </nav>
                <div id="menubar" class="fa fa-bars"></div>
                            {{-- <div class="icons">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Favories"><i class="fa-regular fa-star"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eyeModale"><i class="fa-regular fa-eye"></i></a>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Couturier"><i class="fa-solid fa-shirt"></i></a>
                            </div> --}}

                            {{-- <div class="">
                                @if (Route::has('login'))
                                    <div class="">
                                        @auth
                                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="">Log in</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div> --}}

                        <nav class="navBar_link">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="">Profils</a>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-bell" aria-hidden="true"></i></a>
                                    <a href="#" style="display: none" class="inscription btn btn-primary" data-bs-toggle="modal" data-bs-target="#inscription">Compte professionnel</a>
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
            {{-- <div class="back"> --}}
                {{-- <a href="/couture" class="btn_first">Commencer Ma Session</a> --}}
            {{-- </div>  --}}
                {{-- @if(isset($request))
                        @if($request == 'couture' || $request == 'profils' || $request == 'myfashion')
                            <div class="back" style="display: none;">
                                <a href="/couture" class="btn_first">Commencer Ma Session</a>
                            </div>
                        @else
                            <div class="back">
                                <a href="/couture" class="btn_first">Commencer Ma Session</a>
                            </div>
                        @endif 
                @endif --}}
        </header>

    </div>

<h1 class="titre">Mes Publications chez <span>Fashion House</span></h1>
<section class="produit" id="produit">
    <!-- <div class="produits_ctn"> -->
        <div class="grilds_main">
           @if ($my_prod)
               @foreach ($my_prod as $my_prod)
                    <div class="grilds_produits">
                        <div class="img_prod">
                            <img src="{{auth()->user()->email}}/{{$my_prod->prod}}" alt="logo produit">
                        </div>
                        <div class="decoration">
                            <div class="decora">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa regular fa-eye"></i>
                            </div>
                        </div>
                    </div>
               @endforeach
           @endif
            

        <!-- </div> -->
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
            </div>
        </div>
    </div>
</section>





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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>