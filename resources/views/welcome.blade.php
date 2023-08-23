@extends('base')
@section('title','Fashion House')
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

@section('content')

<section class="Service" id="Service">
   
    <div class="content_service">
        <div class="grild_service">
            <div class="img">
                <img src="img/sevice1.png" alt="">  
            </div>
            <div class="details">
                <p>Fashion House le meilleur</p>
            </div>
            <a href="/couture" class="btn">Débuter une Session</a>
        </div>
        <div class="grild_service">
            <div class="img">
            <img src="img/service2.png" alt="">
            </div>
            <div class="details">
                <p>Fashion House le meilleur</p>
            </div>
            <a href="/livreur" class="btn">Les services de Livreur</a>
        </div>
    </div>

</section>
<h1 class="titre">Les Plus Utilisés chez <span>Fashion House</span></h1>
<section class="produit" id="produit">
    <!-- <div class="produits_ctn"> -->
        <div class="grilds_main">
            {{-- @if ($produits)
                @foreach ($produits as $prod)
                <div class="grilds_produits">
                    <div class="img_prod">
                        <a href="#">{{ $prod->prod }}</a>
                        <img src="{{$prod->prod}}" alt="logo produit">
                    </div>
                    <div class="decoration">
                        <div class="decora">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa fa-shopping-cart"></i>
                            <i class="fa regular fa-eye"></i>
                            <i class="fa-solid fa-shirt"></i>
                        </div>
                        
                    </div>
                    <a href="#" class="btn">joindre le Couturier</a>
                </div>
                @endforeach
                
            @endif --}}
            <div class="grilds_produits">
                <div class="img_prod">
                    <img src="img/prod/01.png" alt="logo produit">
                </div>
                <div class="decoration">
                    <div class="decora">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa regular fa-eye"></i>
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    
                </div>
                <a href="#" class="btn">joindre le Couturier</a>
            </div>
            <div class="grilds_produits">
                <div class="img_prod">
                    <img src="img/prod/02.png" alt="logo produit">
                </div>
                <div class="decoration">
                    <div class="decora">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa regular fa-eye"></i>
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                </div>
                <a href="#" class="btn">joindre le Couturier</a>
            </div>
            <div class="grilds_produits">
                <div class="img_prod">
                    <img src="img/prod/03.png" alt="logo produit">
                </div>
                <div class="decoration">
                    <div class="decora">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa regular fa-eye"></i>
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                </div>
                <a href="#" class="btn">joindre le Couturier</a>
            </div>
            <div class="grilds_produits">
                <div class="img_prod">
                    <img src="img/prod/04.png" alt="logo produit">
                </div>
                <div class="decoration">
                    <div class="decora">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa regular fa-eye"></i>
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                </div>
                <a href="#" class="btn">joindre le Couturier</a>
            </div>
            <div class="grilds_produits">
                <div class="img_prod">
                    <img src="img/prod/05.png" alt="logo produit">
                </div>
                <div class="decoration">
                    <div class="decora">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa regular fa-eye"></i>
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                </div>
                <a href="#" class="btn">joindre le Couturier</a>
            </div>
            <div class="grilds_produits">
                <div class="img_prod">
                    <img src="img/prod/06.png" alt="logo produit">
                </div>
                <div class="decoration">
                    <div class="decora">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa regular fa-eye"></i>
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                </div>
                <a href="#" class="btn">joindre le Couturier</a>
            </div>
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


@endsection
@section('footer')

<div class="content_ftr">
    <h3> Fashion House votre service toujour disponible</h3>
    <p>&copy; tous drois reserver | kone hadou</p>
  </div>

@endsection
