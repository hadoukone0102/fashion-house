<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <h3 class="text-center">Enregistrer Un nouveau produit</h3>


    <form action="/produits" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votre Identifiant</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ $userName = auth()->user()->name}}, {{ $userName = auth()->user()->email}}">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Votre Numero Mobile (pour les commandes)</label>
            <input type="number" name="number" class="form-control" id="exampleFormControlInput1" placeholder="+225 0505059564">
            @error('number')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Non du Produit</label>
            <input type="Text" name="nom_p" class="form-control" id="exampleFormControlInput1" placeholder="example:robe de mariage">
            @error('nom_p')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Le Prix du produit</label>
            <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="example:20.000">
            @error('prix')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Charger le produit</label>
            <input type="file" name="prod" class="form-control" id="exampleFormControlInput1" placeholder="example:20.000">
            @error('prod')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Description du produit</label>
            <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('desc')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-5">
            <button  type="submit" class="btn" style="padding: 1.5rem; text-align;center; border:.1rem solid #2ecc71;font-size:1.5rem;background-color:#2ecc71;color:white;">Enregistrer</button>
          </div>
    </form>
</div>