@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/create_service.css') }}">

@section('content')
<div class="container">
    <h2 class="mt-5">Créer un nouveau service</h2>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre du service" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description du service" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <div class="input-group">
                <span class="input-group-text">Dh</span>
                <input type="number" class="form-control" name="price" id="price" placeholder="Prix du service" required>
            </div>
        </div>
        <!-- Add more fields if needed -->

        <button type="submit" class="btn btn-primary">Créer ce service</button>
    </form>
</div>
@endsection

