@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card login-card shadow-sm">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group mb-4">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
