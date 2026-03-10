@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Admin Dashboard</h2>

    <div class="row">

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3>{{ $totalWines }}</h3>
                    <p>Total Wines</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3>{{ $totalCategories }}</h3>
                    <p>Total Categories</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3>{{ $totalGuides }}</h3>
                    <p>Wine Guides</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h3>{{ $totalContacts }}</h3>
                    <p>Contact Messages</p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection