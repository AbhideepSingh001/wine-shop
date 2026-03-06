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
        /* vertical center */
        justify-content: center;
        /* horizontal center */
        text-align: center;
        /* text center */
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
        height: 320px;
        object-fit: cover;
        transition: transform .5s;
    }

    .collection-card:hover img {
        transform: scale(1.08);
    }

    .collection-content {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        background: rgba(0, 0, 0, .55);
        padding: 12px 18px;
        border-radius: 4px;
    }

    .collection-content h4 {
        margin: 0;
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

        <h1>Wine Collections</h1>
        <p>Discover our exclusive curated wine selections.</p>

    </div>

</section>



{{-- =========================
COLLECTIONS GRID
========================= --}}

<section class="section">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="collection-card">

                    <img src="{{ asset('assets/images/collection-banners/PremiumWineCollectionBanner.png') }}">

                    <div class="collection-content">

                        <h4>Premium Collection</h4>
                        <p>Luxury wines from top vineyards.</p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="collection-card">

                    <img src="{{ asset('assets/images/collection-banners/VineyardLuxuryBanner.png') }}">

                    <div class="collection-content">

                        <h4>Vineyard Reserve</h4>
                        <p>Handcrafted wines aged to perfection.</p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="collection-card">

                    <img src="{{ asset('assets/images/collection-banners/WineTastingExperienceBanner.png') }}">

                    <div class="collection-content">

                        <h4>Wine Tasting</h4>
                        <p>Experience exclusive wine tastings.</p>

                    </div>

                </div>

            </div>


            <div class="col-md-6">

                <div class="collection-card">

                    <img src="{{ asset('assets/images/collection-banners/ChampagneCelebrationBanner.png') }}">

                    <div class="collection-content">

                        <h4>Champagne Celebration</h4>
                        <p>Perfect sparkling wines for celebrations.</p>

                    </div>

                </div>

            </div>


            <div class="col-md-6">

                <div class="collection-card">

                    <img src="{{ asset('assets/images/collection-banners/WineBottleandGlassCompositionBanner.png') }}">

                    <div class="collection-content">

                        <h4>Classic Wines</h4>
                        <p>Timeless wines loved around the world.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection