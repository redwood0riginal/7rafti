<!-- login.blade.php -->
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card login-card">
        <div class="card-body">
            <h2 class="card-title">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
