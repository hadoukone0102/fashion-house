<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tableau de Bord') }}
            </h2>  
        </x-slot>
    <div class="py-10" style="display:none">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Bienvenu") }}
                    {{ $userName = auth()->user()->email}}
                </div>
                
            </div>
        </div>
    </div>


    <div class="flex items-center py-3">

        {{-- la première partie --}}
            <div class=" block m-2 py-2 w-[30%] min-h-[45rem] h-auto bg-white rounded-[2rem] border border-zinc-300 block items-center">
                <div class=" py-2 text-black text-center font-medium">Taches quotidiennes</div>
                <div class="w-[100%] h-[12px] bg-green-500"></div>
                <div class="block second">
                    <nav class="navBar" id="none">
                        <a href="#" id="liste_product_view">Listes des produits</a>
                        <a href="#" id="link_action_add_prod">Ajouter un nouveau produit</a>
                        <a href="#" id="voir_commande">Voire listes des Commandes</a>
                        <a href="#" id="contacter_livreur">Contacter un Livreur</a>
                        <a href="#" id="voir_produit_recent">Récemment ajouter</a>
                    </nav>
                </div>
            </div>
        {{-- la première partie --}}

        {{-- la deuxième partie --}}
        <div class="w-[70%] min-h-[45rem] h-auto bg-white rounded-[2rem] border border-zinc-300 block items-center">
            <div class="w-[100%] h-[80px] bg-green-500 rounded-tl-[2rem] rounded-tr-[2rem]">
                <h2 class="text-center py-4 font-bold text-white text-2xl">Espace de Travaile</h2>
            </div>

            <div class="py-2" id="formulaire_produits">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <x-Forms.product/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-2" id="produit_recent">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            @php
                            // $recups = ;
                            @endphp
                            <x-Forms.liste_product :type="$produits" />
                        </div>
                    </div>
                </div>
            </div>

            <div id="liste_produit" class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{-- <x-Forms.liste_product/> --}}
        
                            <div>
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
        
                                @if($produits->count() > 0)
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nom Produits</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Descriptions</th>
                                        <th scope="col">Commandes</th>
                                        <th scope="col">Date de publication</th>
                                        <th scope="col">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                      @foreach ($produits as $product)
                                                <tr>
                                                    <th scope="row">{{ $product->nom_produit}}</th>
                                                    <td>{{$product->prix}}</td>
                                                    <td>{{$product->description}}</td>
                                                    <td>nean</td>
                                                    <td>{{$product->timestamps}}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info">Modifier</a>
                                                        <a href="{{ route('produit.delete', ['id' => $product->id]) }}" class="btn btn-danger">Supprimer</a>
                                                    </td>
                                                </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>



        </div> 
        {{-- la première partie --}}

    </div>
    
    




















    <div class="py-2" id="formulaire_produits">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-Forms.product/>
                </div>
            </div>
        </div>
        
    </div>

   
</x-app-layout>
