<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">7ARFTY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                    @if (auth()->user()->role == 'client')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services.index') }}">Listes des services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('besoins.create') }}">Poster un besoin</a>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'craftsman')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('besoins.index') }}">Listes de besoins</a>
                        </li>
                    @endif
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registerForm-client') }}">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registerForm-craftsman') }}">7rayfi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('loginForm') }}">Connexion</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="form-inline">
                            @csrf
                            <button type="submit" class="btn ">Deconnexion</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS (Optional, for Bootstrap's interactive components like dropdowns) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
