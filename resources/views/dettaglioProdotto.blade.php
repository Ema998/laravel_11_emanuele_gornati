<x-layout>
    <x-header>
        <h1 class="text-center">{{ $prodotto['nome'] }}</h1>
    </x-header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $prodotto['immagine'] }}" alt="{{ $prodotto['nome'] }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><strong>Nome:</strong> {{ $prodotto['nome'] }}</p>
                <p><strong>Descrizione:</strong> {{ $prodotto['descrizione'] }}</p>
                <p><strong>Prezzo:</strong> €{{ number_format($prodotto['prezzo'], 2) }}</p>
                <p><strong>Categoria:</strong> {{ $prodotto['categoria'] }}</p>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('deleteProdotto', compact('prodotto')) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina Prodotto</button>
            </form>
        </div>
</x-layout>