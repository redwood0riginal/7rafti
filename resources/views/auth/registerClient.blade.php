@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/inscription-client.css') }}">

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Inscription Client</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('register-client') }}" method="POST" class="inscription-form">
                @csrf
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmation du mot de passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmation du mot de passe" required>
                </div>
                <div class="form-group">
                    <button type="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
