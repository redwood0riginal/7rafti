@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/besoin.css') }}">

@section('content')
<div class="container">
    <h2 class="mt-5">Créer un nouveau besoin</h2>
    <form action="{{ route('besoins.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre du besoin" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description du besoin" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Statut</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status1" value="active" required>
                <label class="form-check-label" for="status1">active</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="status2" value="expirer" required>
                <label class="form-check-label" for="status2">expiré</label>
            </div>
            <!-- Add more radio buttons as needed -->
        </div>
        <button type="submit" class="btn btn-primary">Créer ce besoin</button>
    </form>
</div>
@endsection
