<x-app-layout>
        <x-slot name="header">
            <h4 class="font-semibold text-1xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tableau de Bord') }}
            </h4>  
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
<style>
    #selection{
    position: fixed;
    right: 00%;
    top: 20%;
    z-index: 0;
}
</style>
        {{-- la première partie --}}
            <div id="selection" class=" block m-2 py-2 w-[28%] min-h-[45rem] h-auto bg-white rounded-[2rem] border border-zinc-300 block items-center">
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
        <div class="w-[70%] ml-3 min-h-[45rem] h-auto bg-white rounded-[2rem] border border-zinc-300 block items-center">
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
                                     
                                        @foreach ($connecter as $product)
                                        <tr>
                                            <th scope="row">{{ $product->nom_produit}}</th>
                                            <td>{{$product->prix}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>nean</td>
                                            <td>{{$product->created_at}}</td>
                                            <td>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modi" data-id="{{ $product->id }}">Modifier</button>
                                                <a href="{{ route('produit.delete', ['id' => $product->id]) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        
                                        <!-- mon panier -->
                                        <div class="modal fade" id="modi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Je Souhaite Modifier</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
                                                            @csrf
                                        
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1" class="form-label">Le Prix du produit</label>
                                                                <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="example:20.000">
                                                                @error('prix')
                                                                    <div class="alert alert-danger">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                        
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1" class="form-label">Charger le produit</label>
                                                                <input type="file" name="produit" class="form-control" id="exampleFormControlInput1" placeholder="example:20.000">
                                                                @error('prod')
                                                                    <div class="alert alert-danger">{{$message}}</div>
                                                                @enderror
                                                            </div>
                                        
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                            </div>
                                                        </form>

                                                        <p id="productId"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
