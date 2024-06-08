<nav class="navbar">
    <div class="container">
        <a href="/" class="brand">7ARFTY</a>
        <ul class="nav-links">
            <li><a href="{{ route('services.index') }}">Listes des services</a></li>
            <li><a href="{{ route('besoins.index') }}">Listes de besoins</a></li>
            <li><a href="{{ route('besoins.create') }}">Poster un besoin</a></li>
            <li><a href="{{ route('besoins.create') }}">Inscrire</a></li>
            <li><a href="{{ route('besoins.create') }}">Connexion</a></li>
        </ul>
    </div>
</nav>
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
