@extends('layouts.app')

@section('title','Wine Collections')

@push('styles')

<style>
    /* =========================
PAGE HEADER
========================= */

    .page-header {
        height: 45vh;
        background:url('{{ asset("assets/images/hero/hero3.png") }}') center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
    }

    .page-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, .55);
    }

    .page-header .container {
        position: relative;
        z-index: 2;
        color: white;
    }

    /* =========================
COLLECTION CARDS
========================= */

    .collection-card {
        position: relative;
        overflow: hidden;
        border-radius: 6px;
    }

    .collection-card img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        transition: transform .5s;
    }

    .collection-card:hover img {
        transform: scale(1.08);
    }

    .collection-content {
        position: absolute;
        bottom: 0px;
        
        color: white;
        background: rgba(0, 0, 0, .55);
        padding: 12px 18px;
        border-radius: 4px;
        opacity: 0;
    }
    .collection-card:hover .collection-content{
        opacity: 1;
    }

    .collection-content h4 {
        margin: 0;
    }
</style>

@endpush


@section('content')

{{-- PAGE HEADER --}}

<section class="page-header">

    <div class="page-overlay"></div>

    <div class="container">

        <h1>Wine Collections</h1>
        <p>Discover our exclusive curated wine selections.</p>

    </div>

</section>



{{-- COLLECTION GRID --}}

<section class="section">

    <div class="container">

        <div class="row g-4">

            @foreach($collections as $collection)

            <div class="col-md-4">

                <div class="collection-card">

                    <img src="{{ asset('storage/'.$collection->image) }}">
                    <div class="collection-content">

                        <h4>{{ $collection->name }}</h4>

                        <p>{{ $collection->description }}</p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endsection