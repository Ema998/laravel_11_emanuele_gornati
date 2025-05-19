<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Gameland</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('homepage') }}">Gameland</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('prodotti') }}">Prodotti</a>
                </li>
                <!-- @guest -->
                @if (!Auth::user())
                <li class="nav-item">
                    <a class="nav-link outline" href="{{ route('register') }}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link outline" href="{{ route('login') }}">Accedi</a>
                </li>
                @endif
                <!-- @endguest -->
                <!-- @auth -->
                @if(Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aggiungiProdotto') }}">Aggiungi prodotto</a>
                </li>
                <li class="nav-item">
                    Benvenuto {{ Auth::user()->name }}
                </li>
                <li class="nav-item">
                   <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();" class="nav-item">Logout </a>
                    <form action="{{route('logout')}}" method="POST" style="display: none;" id="logout">
                        @csrf
                    </form>
                </li>
                @endif
                <!-- @endauth -->
            </ul>
        </div>
    </nav>
    
    {{ $slot }}

</body>
</html>