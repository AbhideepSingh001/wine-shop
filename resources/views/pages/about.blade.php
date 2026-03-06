@extends('layouts.app')

@section('title','About Us')

@push('styles')

<style>
    /* =========================
PAGE HEADER
========================= */

    .page-header {
    height: 45vh;
    background: url('{{ asset("assets/images/about/Vineyard.jpg") }}') center/cover no-repeat;
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

    .paratext{
        color: black;
    }


    /* =========================
ABOUT STORY
========================= */

    .about-img {
        width: 100%;
        border-radius: 6px;
        object-fit: cover;
    }


    /* =========================
FEATURE BOX
========================= */

    .feature-box {
        background: white;
        padding: 25px;
        border-radius: 6px;
        text-align: center;
        transition: all .3s;
        height: 100%;
    }

    .feature-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, .15);
    }

    .feature-box h4 {
        color: var(--wine-red);
        margin-bottom: 10px;
    }


    /* =========================
VINEYARD SECTION
========================= */

    .vineyard-section {
        background: var(--secondary-bg);
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

        <h1>About Our Winery</h1>
        <p class="paratext">Crafting exceptional wines with passion and tradition.</p>

    </div>

</section>



{{-- =========================
OUR STORY
========================= --}}

<section class="section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <img src="{{ asset('assets/images/about/Winebarrel.jpg') }}" class="about-img">

            </div>


            <div class="col-md-6">

                <h2>Our Story</h2>

                <p class="paratext">
                    WineHouse was founded with a vision to bring the finest wines
                    from vineyards around the world to wine lovers who appreciate
                    quality and craftsmanship.
                </p>

                <p class="paratext">
                    Our journey began with a passion for discovering unique flavors
                    and creating memorable wine experiences.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================
WHY CHOOSE US
========================= --}}

<section class="section vineyard-section">

    <div class="container">

        <div class="section-title">
            <h2>Why Choose Us</h2>
        </div>

        <div class="row g-4">


            <div class="col-md-4">

                <div class="feature-box">

                    <h4>Premium Quality</h4>

                    <p class="paratext">
                        We carefully select wines from renowned vineyards
                        to ensure the highest quality.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-box">

                    <h4>Expert Selection</h4>

                    <p class="paratext">
                        Our wine experts curate collections that suit
                        every taste and occasion.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="feature-box">

                    <h4>Authentic Experience</h4>

                    <p class="paratext">
                        We bring the authentic vineyard experience
                        to every wine enthusiast.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



{{-- =========================
VINEYARD EXPERIENCE
========================= --}}

<section class="section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h2>Our Vineyard Experience</h2>

                <p class="paratext">
                    From grape harvesting to wine aging, every step
                    in our process is handled with precision and care.
                    Our vineyards produce wines that reflect
                    tradition, heritage and excellence.
                </p>

                <a href="/collections" class="btn btn-gold mt-3">
                    Explore Collections
                </a>

            </div>


            <div class="col-md-6">

                <img src="{{ asset('assets/images/about/Winemakingprocess.jpg') }}" class="about-img">

            </div>

        </div>

    </div>

</section>


@endsection