<x-layout>
    <x-header>
        <h1 class="text-center">MODIFICA UN PRODOTTO</h1>
    </x-header>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <x-errors/>
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('updateProdotto', compact('prodotto')) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nomeProdotto">Nome prodotto</label>
                        <input type="text" name="nome" value="{{$prodotto->nome}}" class="form-control" id="nomeProdotto">
                    </div>
                    <div class="form-group">
                        <label for="prezzoProdotto">Prezzo</label>
                        <input type="text" name="prezzo" value="{{ $prodotto->prezzo }}" class="form-control" id="prezzoProdotto">
                    </div>
                    <div class="form-group">
                        <label for="descrizioneProdotto">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizioneProdotto" rows="3">{{ $prodotto->descrizione }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="imgProdotto">Inserisci un'immagine</label>
                        <input type="file" name="img" class="form-control" id="imgProdotto">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
