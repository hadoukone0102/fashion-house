<div>
    {{-- <h3> kone hadou user connecté {{auth()->user()->email}}</h3> --}}

    <section class="produit" id="produit">
        <!-- <div class="produits_ctn"> -->
            <div class="grilds_main">
                @foreach ($type as $tp)
                    <div class="grilds_produits">
                        <div class="img_prod">
                            <img src="{{auth()->user()->email}}/{{$tp->prod}}" alt="logo produit">
                        </div>
                        <div class="decoration">
                            <h3>{{ $tp->created_at }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
</div>
