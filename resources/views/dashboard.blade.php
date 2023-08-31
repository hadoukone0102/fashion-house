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

    <div class="py-2" id="formulaire_produits">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("Bienvenu") }} --}}
                    <!-- le formulaire son composant se trouve dans le fichier product.blade.php -->
                    <x-Forms.product/>
                </div>
                
            </div>
        </div>
        
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <x-Forms.liste_product/> --}}

                    <div>
                        <h3 class="text-center">Listes des Opérations</h3>
                        
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
                    
                    
                              {{-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@twitter</td>
                                <td>
                                    <a href="#" class="btn btn-info">Modifier</a>
                                    <a href="#" class="btn btn-danger">Supprimer</a>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@twitter</td>
                                <td>
                                    <a href="#" class="btn btn-info">Modifier</a>
                                    <a href="#" class="btn btn-danger">Supprimer</a>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>
                                    <a href="#" class="btn btn-info">Modifier</a>
                                    <a href="#" class="btn btn-danger">Supprimer</a>
                                </td>
                              </tr> --}}
                              
                            </tbody>
                          </table>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</x-app-layout>
