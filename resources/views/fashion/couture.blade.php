@extends('base')
@section('title', 'Mes Couturier')

@section('content')

<section class="ActionService">
<h1 class="titre">Contacter un Couturier chez <span>Fashion House</span></h1>
    <div class="searchDt">
        <form action="/myfashion" class="form-1" method="post">
            @csrf
            <div class="input_form">
                <input type="text" autocomplete="on" required placeholder="Votre Ville :" name="ma_ville" value="{{old('ma_ville')}}">
                @error('ma_ville')
                    <div class="alert alert-danger">{{$message }}</div>
                @enderror
                <input type="text" autocomplete="on" required placeholder="Votre Quartier :" name="mon_quartier" value="{{old('mon_quartier')}}">
                @error('mon_quartier')
                <div class="alert alert-danger">{{$message }}</div>
                @enderror
                <input type="text" autocomplete="on" required placeholder="Ville ou Quartier du couturier" name="main_search" value="{{old('main_search')}}">
                @error('main_search')
                <div class="alert alert-danger">{{$message }}</div>
                @enderror
                <button type="submit" class="btn">Recherche</button>
            </div>
        </form>
    </div>
</section>



<section class="operation">
    <div class="resultAction">
        <div class="box_result">
            <div class="detail_fashion">
                <span class="name">KONE HADOU</span>
                <h3>vile : Abidjan, Quartier: Angré chateaux</h3>
                <p>Experience : 10 ans</p>
                <p>Type de Couture : Hommes et Femmes</p>
                <p id="contact" >Contact : 0595640996</p>
                <a href="#" class="btn">Selectionner</a>
            </div>
            <div class="status_fashion">
                <span>En ligne</span>
            </div>
        </div>
        <div class="box_result">
            <div class="detail_fashion">
                <span class="name">KONE HADOU</span>
                <h3>vile : Abidjan, Quartier: Angré chateaux</h3>
                <p>Experience : 10 ans</p>
                <p>Type de Couture : Hommes et Femmes</p>
                <p id="contact">Contact : 0595640996</p>
                <a href="#" class="btn">Selectionner</a>
            </div>
            <div class="status_fashion">
                <span>En ligne</span>
            </div>
        </div>
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