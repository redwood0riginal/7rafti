@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('/css/registerCraftman.css') }}">

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Inscription 7RAYFI</h2>
    <form action="{{ route('register-craftsman') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="password_confirmation">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirmation du mot de passe" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <select class="form-control" name="ville" id="ville" required>
                        <option value="">Sélectionner une ville</option>
                        <!-- Add city options here -->
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="categorie">Catégorie</label>
                    <select class="form-control" name="categorie" id="categorie" required>
                        <option value="">Sélectionner une catégorie</option>
                        <!-- Add category options here -->
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="metier">Métier</label>
                    <input type="text" class="form-control" name="metier" id="metier" placeholder="Métier, Ex : Développeur web, Coiffeur pour homme, Infirmière, ..." required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="telephone">Numéro de téléphone</label>
                    <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Numéro de téléphone" required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Vous en quelques mots..." required></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Inscription</button>
    </form>
</div>
@endsection
