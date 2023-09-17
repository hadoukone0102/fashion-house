<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="/CSS/style.css"> --}}
        <link rel="stylesheet" href="/CSS/panier/panier.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Mon Panier</title>
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

    <section>
        <div class="w-[0] h-[12rem]"></div>
        <div  class="flex items-center py-1">
             {{-- la première partie --}}
            <div class="w-[70%] min-h-[45rem] h-auto bg-white rounded-[1rem] border border-zinc-300 block items-center">
                <div class="w-[100%] h-[45px] bg-green-500 rounded-tl-[1rem] rounded-tr-[1rem]">
                    <h2 class="text-center py-4 font-bold text-white text-2xl">Mon Panier</h2>
                </div>
                <div class="w-[100%] h-[0px] border-4 border-stone-300"></div>

                <div class="article">
                    <div class="grild_article">
                        @if ($data_panier)
                            @foreach ($data_panier as $details)
                                    <div class="box_article">
                                        <div class="pre">
                                            <div class="img_article">
                                                <img src="/img/prod/01.png " alt="article">
                                            </div>
                                            <div class="detail_pre">
                                                <h3>{{$details->nom_article}}</h3>
                                                <div class="prix_aut">
                                                    <span id="f1">prix {{$details->prix_article}}F cfa</span>
                                                    <span id="f2">en stock</span>
                                                </div>
                                                <div class="quantity">{{$details->quantiter}}</div>
                                            </div>
                                        </div>
                                        <div class="seg">
                                            <div class="h3">{{ $details->prix_article * $details->quantiter}} cfa</div>
                                            <div class="action">
                                                <a href="#" class="A1"><i class="fa fa-heart" aria-hidden="true"></i> save</a>
                                                <a href="{{route('destroy_arti',['id' => $details->id])}}" class="A2"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                           
                            @else
                                <div class="box_article">
                                    <div class="pre">
                                        <div class="img_article">
                                            <!--  -->
                                            <img src="/img/prod/00.png" alt="article">
                                        </div>
                                        <div class="detail_pre">
                                            <h3>Robe de mariage</h3>
                                            <div class="prix_aut">
                                                <span id="f1">prix 00000</span>
                                                <span id="f2" style="color:red;">en stock</span>
                                            </div>
                                            <div class="quantity">0</div>
                                        </div>
                                    </div>
                                    <div class="seg">
                                        <div class="h3">0000F cfa</div>
                                        <div class="action">
                                            <a href="#" class="A1"><i class="fa fa-heart" aria-hidden="true"></i> save</a>
                                            <a href="#" class="A2"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                        </div>
                                    </div>
                                </div> 
                        @endif

                        
                    </div>
                </div>
            </div>
                {{-- la première partie --}}

                {{-- la deuxième partie --}}
            <div id="selection" class=" block m-2 py-3 w-[29%] min-h-[45rem] h-auto bg-white rounded-[2rem] border border-zinc-300 block items-center">
                <div class=" py-2 ml-9 text-black text-3xl font-bold">Livraison Article</div>
                <div class="w-[100%] h-[12px] bg-green-500"></div>
                
                {{-- début de la deuxième box partie --}}
                    <h3 class="text-center font-bold text-2xl text-black py-3">Date de Livraison : 10/09/23</h3>
                    <div class="w-[100%] h-[0px] border border-stone-300"></div>
                
                    <form id="coupon" action="#" method="POST" class="py-2 m-3">
                        <div class="form-coupon">
                            <div class="input_cpn">
                                <input type="text" placeholder="Aplliquer coupon" autocomplete="off">
                            </div>
                            <div class="input_cpn">
                                <button type="submit">Appliquer</button>
                            </div>
                        </div>
                        <span id="bonus">15% de réduction</span>
                    </form>
                    <div class="w-[100%] h-[0px] border border-stone-300"></div>
                    <h3 class="text-center font-bold text-2xl text-black py-3">Veillez renseigner un point de réference</h3>

                    <form id="coupon" action="#" method="POST" class="py-2 m-2">
                        <div class="input-form-inscrip">
                            <textarea class="form-control" id="message-text" placeholder="Un mot à vos clients" name="commentaire" value=""></textarea>
                        </div>
                    </form>
                    <div class="w-[100%] h-[0px] border border-stone-300"></div>

                        <div class="det_arti">
                            <h3>Prix Total Article :</h3>
                            <h3>75000F cfa</h3>
                        </div>
                        <div class="det_arti">
                            <span>Coupon :</span>
                            <span>Non Appliquer</span>
                        </div>
                        <div class="det_arti">
                            <span>Livraison :</span>
                            <span>2500F cfa</span>
                        </div>

                    <div class="w-[100%] h-[0px] border border-stone-300"></div>
                        <div class="det_arti">
                            <h3>Total :</h3>
                            <h3>77 500F cfa</h3>
                        </div>

                        <button class="btnss bg-green-500 w-[100%]" type="submit">Commander</button>
                        
                    {{-- début de la deuxième box partie --}}

            </div>
            {{-- la deuxième partie --}}

        </div>
    </section>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>