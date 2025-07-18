<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ Storage::url($prodotto->img)}}" alt="Copertina di {{ $prodotto->nome }}">
  <div class="card-body justify-content-center align-items-center">
    <h5 class="card-title">{{$prodotto->nome}}</h5>
    <h6 class="card-subtitle mb-2 text-left">Aggiunto da {{ $prodotto->user->nome }}</h6>
    <h3 class="card-title">{{$prodotto->prezzo}}</h3>
    <p class="card-text">{{$prodotto->descrizione}}</p>
    <a href="{{ route('dettaglioProdotto', compact('prodotto')) }}" class="btn btn-primary my-4">Scopri di più</a>
    <a href="{{ route('modificaProdotto', compact('prodotto')) }}" class="btn btn-secondary">Modifica</a>  
  </div>
</div>