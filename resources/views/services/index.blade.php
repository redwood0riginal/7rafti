@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/list-services.css') }}">

@section('content')
<div class="container">
    <h2 class="mt-5">Liste des services</h2>
    <div class="row mt-4">
        <div class="col-md-3 mb-3">
            <!-- Filtering Options -->
            <h5>Filtrer par :</h5>
            <select class="form-select mb-2" id="categorieFilter">
                <option value="">Toutes les catégories</option>
                <!-- Add category options dynamically here -->
                <option value="1">Catégorie 1</option>
                <option value="2">Catégorie 2</option>
                <option value="3">Catégorie 3</option>
            </select>
            <!-- Add more filtering options if needed -->

            <!-- Clear Filter Button -->
            <button class="btn btn-outline-secondary" onclick="clearFilters()">Effacer les filtres</button>
        </div>
        <div class="col-md-9">
            <!-- Services List -->
            <ul class="list-group service-list">
                <!-- List items will be dynamically added here -->
                <li class="list-group-item">
                    <h5>Titre du service</h5>
                    <p>Description du service</p>
                    <span class="badge bg-primary">Catégorie</span>
                </li>
                <!-- Example service item, add more dynamically -->
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Function to filter services based on category
    function filterServices() {
        var selectedCategory = $('#categorieFilter').val();
        $('.service-list li').hide();
        if (selectedCategory === '') {
            $('.service-list li').show();
        } else {
            $('.service-list li').each(function () {
                if ($(this).find('.badge').text().trim() === selectedCategory) {
                    $(this).show();
                }
            });
        }
    }

    // Function to clear filters
    function clearFilters() {
        $('#categorieFilter').val('');
        $('.service-list li').show();
    }

    // Event listener for category filter
    $('#categorieFilter').change(function () {
        filterServices();
    });
</script>
@endsection

