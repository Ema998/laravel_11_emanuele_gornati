<x-layout>
    <x-header>
        <h1 class="text-center">REGISTRATI</h1>
    </x-header>
    <x-errors></x-errors>
    <div class="container">
        <div class="row mt-5 justify-content-center align-items-center">
            <div class="col-12 col-md-6 bg-body-secondary p-5 rounded">
                <form action="{{ route('register') }}" method="POST" class="form">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Inserisci email">
                    </div>
                    <div class="form-group">
                        <label for="name">Inserire un nome utente</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="nome utente">
                    </div>
                    <div class="form-group">
                        <label for="password">Inserisci Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Ripeti Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>