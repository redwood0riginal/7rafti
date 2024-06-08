<!-- client-profile.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card profile-card">
        <div class="card-body">
            <div class="profile">
                <div class="profile-header">
                    <div class="profile-photo">
                        <img src="{{ asset('images/profile-photo.jpg') }}" alt="Profile Photo">
                    </div>
                    <div class="profile-info">
                        <h2>{{ $user->prenom }} {{ $user->nom }}</h2>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->ville }}</p>
                        <p>{{ $user->phone }}</p>
                        <!-- Add more client-specific information here -->
                    </div>
                </div>
                <div class="profile-body">
                    <h3>About Me</h3>
                    <p>{{ $user->bio }}</p>
                    <!-- Add more client details here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
