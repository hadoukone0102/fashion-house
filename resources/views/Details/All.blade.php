<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="/CSS/style.css"> --}}
        <link rel="stylesheet" href="/CSS/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>{{ $userkey->nom}} {{ $userkey->prenom }}</title>
        <!-- line CSS -->
        <link rel="stylesheet" href="CSS/layout/form.css">
        <script src="CSS/layout/dashboad.js" defer></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">


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

    <section class="py-10">
       <div class=" flex items-center py-1">
                {{-- première partie du tableau --}}
            <div class="w-[35%] m-2 min-h-[45rem] h-auto bg-white rounded-[1rem] border border-zinc-300 block items-center">
                @php
                    $email_fashion = $userkey->email;
                @endphp
                <div class="boite_img">
                    <img id="img_article" src="/{{$email_fashion}}/{{$product_key->prod}}" alt="article">
                </div>
                <style>
                    .boite_img{
                        min-width: 40rem;
                        min-height:45rem;
                    }
                    #img_article{
                        width: 100%;
                        height:100%;
                    }
                </style>
            </div>
            {{-- première partie du tableau --}}
            {{-- ####################################################################################### --}}
            {{-- deuxieme partie du tableau --}}
            <div class="w-[65%] min-h-[45rem] h-auto bg-white rounded-[1rem] border border-zinc-300 block items-center">
                <div class="w-[100%] h-[45px] bg-green-500 rounded-tl-[1rem] rounded-tr-[1rem]">
                    <h2 class="text-center py-4 font-bold text-white text-2xl">Les Datails du Couturier</h2>
                </div>
                <div class="w-[100%] h-[0px] border-4 border-stone-300"></div>


            </div>
            {{-- première partie du tableau --}}
       </div>
    </section>




    {{-- <section class="detail_user">
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
                <form action="{{route('cart.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id_prod" value="{{$product_key->id}}">
                    <input type="hidden" name="id_client" value="{{auth()->user()->email}}">
                    <input type="hidden" name="prod_name" value="{{$product_key->nom_produit}}">
                    <input type="hidden" name="prod_price" value="{{$product_key->prix}}">
                    <input type="hidden" name="img_prod" value="{{$product_key->prod}}">
                   <button type="submit" class="btns">Ajouter Au panier</button>
                </form>
           
            </div>
           
        </div>
        
    </section> --}}

  </body>
</html>