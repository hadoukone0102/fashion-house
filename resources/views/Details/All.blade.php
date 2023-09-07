<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $userkey->nom}} {{ $userkey->prenom }}</title>
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
        </header>
    </div>

    <section class="detail_user">
        <div class="boite_detail">
            <div class="img_produit">
                @php
                    $email_fashion = $userkey->email;
                @endphp
                <a href="#">{{$email_fashion}}/{{$product_key->prod}}</a>
                <img src="kone@gmail.com/{{$product_key->prod}}" alt="article selectionner">
            </div>
            <div class="detail_fashion"></div>
        </div>
    </section>






    <style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    text-transform: capitalize;
    border: none;
    outline: none;
    transition: all .3s ease;
    list-style-type: none;
}
:root{
    --black:#2c2c54;
    /* --blue :#09F8D4; */
    --blue:#2ecc71;
    --orange:#FFC300;
    --rouge:#F71E49;
    --body:#F8F9F9 ;
    --border:.1px solid rgba(0,0,0,.2);
    --shadow:1px 1px 3px rgba(0,0,0,.12),1px 1px 3px rgba(0,0,0,.23);
}
*::selection{
    background-color: var(--black);
    color: white;
}
html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 7.6rem;
    overflow-x: hidden;
}
body{
    background-color: var(--body);
}
.header{
    display: block;
    height: auto;
}

.header header{
    display: block;
    position: relative;
}

 
header .first{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
     border-bottom: var(--border);
}
header .first a{
    font-size: 2rem;
    color: var(--black);
    font-weight: bolder;
    text-decoration: none;
}
header .first a span{
    font-size: 5rem;
    color: var(--blue);
    font-weight: bolder;
}

header .icons {
    display: flex;
} 

header .icons a{
    display: flex;
    padding: 2rem;
    border: var(--border);
    margin: .5rem;
    text-decoration: none;
} 


header .icons a i{
    font-size: 2.5rem;
    color: var(--black);
} 
header .icons a:hover{
    background-color: var(--blue);
    border-radius: .5rem;
    transition: background-color 1s ease-in-out;
}

header .icons a:hover i{
    color: white;
}

header .first form{
    display: flex;
}

header .first form label{
    font-size: 2rem;
    border: var(--border);
    background-color: var(--blue);
    color: white;
    height: 5rem;
    line-height: 2.5;
    width: 7rem;
    text-align: center;
    cursor: pointer;
}   

header .first form #search{
    border: var(--border);
    height: 5rem;
    width: 20rem;
    font-size: 1.5rem;
    padding: .5rem;
    border-radius: .5rem;
}


    </style>

  </body>
</html>