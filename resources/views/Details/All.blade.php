<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $userkey->nom}} {{ $userkey->prenom }}</title>
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
        </header>
    </div>

    <section class="detail_user">
        <div class="boite_detail">
            <div class="img_produit">
                @php
                    $email_fashion = $userkey->email;
                @endphp
                <img src="/{{$email_fashion}}/{{$product_key->prod}}" alt="article">
            </div>
            <div class="detail_fashion">
                <div class="securer_info">
                    <h3>Couturier : <span>{{$userkey->nom}} {{$userkey->prenom}}</span></h3>
                    <h3> Lieu : 
                        <span>Ville : {{$userkey->ville}}</span>
                        <span>Quartier : {{$userkey->quartier}}</span>
                    </h3>
                    
                    <div class="important">
                        <h3>Prix de l'article : <span class="unique">{{$product_key->prix}}F cfa </span></h3>
                        <p>Description de l'article : <span class="desc">{{$product_key->description}}</span></p>
                    </div>
                </div>
                <div class="descrip">
                    <h3>Email du couturier: <span> {{$userkey->email}} </span></h3>
                    <a class="btn">Contacter le Couturier: <span>{{$userkey->contact}} </span></a>
                </div>

                <div class="grild_article">
                    <div class="box_article">
                        <div class="img_arti">
                            <img src="/{{$email_fashion}}/{{$product_key->prod}}" alt="">
                        </div>
                    </div>
                    <div class="box_article">
                        <div class="img_arti">
                            <img src="/{{$email_fashion}}/{{$product_key->prod}}" alt="">
                        </div>
                    </div>
                    <div class="box_article">
                        <div class="img_arti">
                            <img src="/{{$email_fashion}}/{{$product_key->prod}}" alt="">
                        </div>
                    </div>
                </div>
            <a href="#" class="btns">Ajouter Au panier</a>
            </div>
           
        </div>
        
    </section>

  </body>
</html>