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
    align-items: center;      /* vertical center */
    justify-content: center;  /* horizontal center */
    text-align: center;       /* text center */
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
        background: white;
        border-radius: 6px;
        padding: 25px;
        transition: all .3s;
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

    .tips-section {
        background: var(--secondary-bg);
    }

    .tip-box {
        background: white;
        padding: 20px;
        border-left: 4px solid var(--accent-gold);
        margin-bottom: 20px;
        border-radius: 4px;
    }
    .paratext{
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
WINE TYPES GUIDE
========================= --}}

<section class="section">

    <div class="container">

        <div class="section-title">
            <h2>Types of Wine</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="guide-card">

                    <h4>Red Wine</h4>

                    <p class="paratext">
                        Red wines are made from dark-colored grape varieties. They are rich,
                        bold and often paired with red meat and hearty dishes.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="guide-card">

                    <h4>White Wine</h4>

                    <p class="paratext">
                        White wines are lighter and refreshing. They are commonly paired
                        with seafood, chicken and light dishes.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="guide-card">

                    <h4>Sparkling Wine</h4>

                    <p class="paratext">
                        Sparkling wines contain natural carbonation and are perfect for
                        celebrations and special occasions.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================
WINE TASTING STEPS
========================= --}}

<section class="section section-dark">

    <div class="container">

        <div class="section-title">
            <h2>How to Taste Wine</h2>
        </div>

        <div class="row g-4">

            <div class="col-md-3">

                <div class="guide-card text-center">

                    <h4>Look</h4>

                    <p class="paratext">Observe the wine color and clarity in the glass.</p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="guide-card text-center">

                    <h4>Swirl</h4>

                    <p class="paratext">Swirl the wine to release aromas and oxygenate it.</p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="guide-card text-center">

                    <h4>Smell</h4>

                    <p class="paratext">Take in the aromas to understand the wine profile.</p>

                </div>

            </div>


            <div class="col-md-3">

                <div class="guide-card text-center">

                    <h4>Taste</h4>

                    <p class="paratext">Take a sip and notice flavor balance and finish.</p>

                </div>

            </div>

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

            <div class="col-md-6">

                <div class="tip-box">
                    Serve red wines slightly below room temperature.
                </div>

                <div class="tip-box">
                    White wines taste best when chilled.
                </div>

            </div>


            <div class="col-md-6">

                <div class="tip-box">
                    Use the right glass to enhance wine aroma.
                </div>

                <div class="tip-box">
                    Allow wine to breathe before serving.
                </div>

            </div>

        </div>

    </div>

</section>


@endsection