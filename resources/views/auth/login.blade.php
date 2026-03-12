@extends('layouts.auth')

@section('title','Login')

@section('content')

<div class="auth-card">

    <h3 class="text-center mb-4">Login to WineHouse</h3>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label">Remember Me</label>
        </div>

        <button class="btn btn-gold w-100">
            Login
        </button>

        <div class="text-center mt-3">

            <a href="{{ route('register') }}">
                Don't have an account? Register
            </a>

        </div>

    </form>

</div>

@endsection