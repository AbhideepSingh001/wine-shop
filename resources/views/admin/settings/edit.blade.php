@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Contact Settings</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control">{{ $setting->address ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $setting->phone ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $setting->email ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Opening Hours</label>
            <input type="text" name="opening_hours" class="form-control" value="{{ $setting->opening_hours ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Google Map Embed Link</label>
            <input type="text" name="map" class="form-control" value="{{ $setting->map ?? '' }}">
        </div>

        <button class="btn btn-primary">
            Update Settings
        </button>

    </form>

</div>

@endsection