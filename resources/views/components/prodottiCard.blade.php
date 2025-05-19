<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ Storage::url($prodotto->img)}}" alt="Copertina di {{ $prodotto->nome }}">
  <div class="card-body">
    <h5 class="card-title">{{$prodotto->nome}}</h5>
    <h3 class="card-title">{{$prodotto->prezzo}}</h3>
    <p class="card-text">{{$prodotto->descrizione}}</p>
    <a href="{{ route('dettaglioProdotto', compact('prodotto')) }}" class="btn btn-primary">Scopri di più</a>
  </div>
</div>