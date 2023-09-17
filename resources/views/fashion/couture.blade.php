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
        
        @foreach ($req as $reqs)
            <div class="box_result">
                <div class="detail_fashion">
                    <span class="name">{{ $reqs->nom}} {{ $reqs->prenom}}</span>
                    <h3>ville : {{ $reqs->ville}}, Quartier:{{ $reqs->quartier}}</h3>
                    <p>Experience : {{ $reqs->annee_exp}}</p>
                    <p>Type de Couture :{{ $reqs->domaine}}</p>
                    {{-- <p id="contact" >Contact : {{ $reqs->contact}}</p> --}}
                    <a href="{{route('myfashion.couture', ['iduser' =>$reqs->id]) }}" class="btn">Selectionner</a>
                </div>
                <div class="status_fashion">
                    <span>En ligne</span>
                </div>
            </div>
         @endforeach 
    </div>
</section>




@endsection