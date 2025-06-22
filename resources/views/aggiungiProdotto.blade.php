<x-layout>
    <x-header>
        <h1 class="text-center">AGGIUGNI UN PRODOTTO</h1>
    </x-header>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('aggiungiProdottoSubmit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nomeProdotto">Nome prodotto</label>
                        <input type="text" name="nomeProdotto" value="{{ old('nome') }}" class="form-control" id="nomeProdotto">
                    </div>
                    <div class="form-group">
                        <label for="prezzoProdotto">Prezzo</label>
                        <input type="text" name="prezzo" value="{{ old('prezzo') }}" class="form-control" id="prezzoProdotto">
                    </div>
                    <div class="form-group">
                        <label for="descrizioneProdotto">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizioneProdotto" rows="3">{{ old('descrizione') }}</textarea>
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
