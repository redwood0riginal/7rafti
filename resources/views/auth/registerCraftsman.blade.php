@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('/css/RegisterCarfman.css') }}">

@section('content')
<div class="container">
    <h2>Inscription 7RAYFI / Freelancer</h2>
    <form action="{{ route('register-craftsman') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
            <label for="password_confirmation">Confirmation du mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmation du mot de passe" required>
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <select name="ville" id="ville" required>
                <option value="">Sélectionner une ville</option>
                <!-- Add city options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="categorie">Catégorie</label>
            <select name="categorie" id="categorie" required>
                <option value="">Sélectionner une catégorie</option>
                <!-- Add category options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="metier">Métier</label>
            <input type="text" name="metier" id="metier" placeholder="Métier, Ex : Développeur web, Coiffeur pour homme, Infirmière, ..." required>
        </div>
        <div class="form-group">
            <label for="telephone">Numéro de téléphone</label>
            <input type="tel" name="telephone" id="telephone" placeholder="Numéro de téléphone" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Vous en quelques mots..." required></textarea>
        </div>
        <div class="form-group">
            <input type="checkbox" name="terms" id="terms" required> <label for="terms">J'accepte les conditions générales d'utilisation</label>
        </div>
        <button type="submit">Inscription</button>
    </form>
</div>
@endsection
