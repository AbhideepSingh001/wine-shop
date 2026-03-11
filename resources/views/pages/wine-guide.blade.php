@extends('layouts.app')

@section('title','Wine Guide')

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
GUIDE CARDS
========================= */

    .guide-card {
        background: #fff8f0;
        border-radius: 6px;
        padding: 25px;
        transition: .3s;
        height: 100%;
    }

    .guide-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, .15);
    }

    .guide-card h4 {
        color: var(--wine-red);
        margin-bottom: 10px;
    }

    /* =========================
TIPS SECTION
========================= */

    

    .tip-box {
        background: white;
        padding: 20px;
        border-left: 4px solid var(--accent-gold);
        margin-bottom: 20px;
        border-radius: 4px;
        transition: .3s;
        background-color: #fff8f0;
    }

    .tip-box:hover {
        transform: translateX(5px);
    }

    .paratext {
        color: black;
    }
</style>

@endpush


@section('content')

{{-- =========================
PAGE HEADER
========================= --}}

<section class="page-header">

    <div class="page-overlay"></div>

    <div class="container">

        <h1>Wine Guide</h1>
        <p>Learn the art of wine tasting, pairing and serving.</p>

    </div>

</section>



{{-- =========================
TYPES OF WINE
========================= --}}

<section class="section">

    <div class="container">

        <div class="section-title">
            <h2>Types of Wine</h2>
        </div>

        <div class="row g-4">

            @forelse($types as $guide)

            <div class="col-md-4">

                <div class="guide-card">

                    <h4>{{ $guide->title }}</h4>

                    <p class="paratext">
                        {{ $guide->content }}
                    </p>

                </div>

            </div>

            @empty

            <div class="col-12 text-center">
                <p>No wine types available.</p>
            </div>

            @endforelse

        </div>

    </div>

</section>



{{-- =========================
HOW TO TASTE WINE
========================= --}}

<section class="section section-dark">

    <div class="container">

        <div class="section-title">
            <h2>How to Taste Wine</h2>
        </div>

        <div class="row g-4">

            @forelse($tasting as $guide)

            <div class="col-md-3">

                <div class="guide-card text-center" style="background-color: white;">

                    <h4>{{ $guide->title }}</h4>

                    <p class="paratext">
                        {{ $guide->content }}
                    </p>

                </div>

            </div>

            @empty

            <div class="col-12 text-center">
                <p>No tasting guides available.</p>
            </div>

            @endforelse

        </div>

    </div>

</section>



{{-- =========================
WINE SERVING TIPS
========================= --}}

<section class="section tips-section">

    <div class="container">

        <div class="section-title">
            <h2>Wine Serving Tips</h2>
        </div>

        <div class="row">

            @forelse($tips as $guide)

            <div class="col-md-6">

                <div class="tip-box">

                    {{ $guide->content }}

                </div>

            </div>

            @empty

            <div class="col-12 text-center">
                <p>No tips available.</p>
            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection