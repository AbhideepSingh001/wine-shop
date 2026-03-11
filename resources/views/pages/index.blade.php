@extends('layouts.app')

@section('title','Home')

@push('styles')

<style>
    /* ================================
HOME PAGE STYLES
================================ */

    .section {
        padding: 90px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title h2 {
        color: var(--accent-gold);
    }

    /* HERO */

    .hero {
        position: relative;
    }

    .hero .carousel {
        position: relative;
        z-index: 1;
    }

    .hero .carousel-item img {
        height: 85vh;
        width: 100%;
        object-fit: cover;
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(0, 0, 0, .35), rgba(0, 0, 0, .10));
        z-index: 2;
    }

    .hero-content {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        z-index: 3;
        color: white;
    }

    .hero-content p {
        max-width: 520px;
        margin: 20px 0;
    }

    /* CATEGORY CARDS */

    .category-card {
        position: relative;
        overflow: hidden;
        border-radius: 6px;
    }

    .category-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        transition: transform .5s;
    }

    .category-card:hover img {
        transform: scale(1.08);
    }

    .category-label {
        position: absolute;
        bottom: 15px;
        left: 20px;
        color: white;
        font-weight: 600;
        font-size: 20px;
        background: rgba(0, 0, 0, .55);
        padding: 6px 14px;
        border-radius: 3px;
    }

    /* COLLECTION BANNERS */

    .collection-banner {
        position: relative;
        overflow: hidden;
    }

    .collection-banner img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        transition: transform .5s;
        border-radius: 10px;
    }

    .collection-banner:hover img {
        transform: scale(1.06);
    }

    .banner-text {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        background: rgba(0, 0, 0, .55);
        padding: 10px 16px;
        font-weight: 600;
    }

    /* PRODUCT CARDS */

    .product-card {
        background: var(--secondary-bg);
        border: none;
        transition: all .3s;
    }

    .product-card img {
        height: 350px;
        object-fit: cover;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, .5);
    }

    .product-title {
        font-size: 18px;
        font-weight: 600;
    }

    .price {
        color: black;
        font-weight: 600;
    }

    /* ABOUT */

    .about-img {
        width: 100%;
        border-radius: 6px;
    }

    /* NEWSLETTER */

    .newsletter {
        background: var(--charcoal-black);
        text-align: center;
    }

    .newsletter input {
        width: 350px;
        max-width: 90%;
        padding: 12px;
        border: 1px solid black;
        outline: none;
        margin-right: 10px;
    }

    #experiencePara {
        color: goldenrod;
    }

    .paratext {
        color: black;
    }
</style>

@endpush


@section('content')

{{-- HERO SLIDER --}}

<section class="hero">

    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('assets/images/hero/hero1.png') }}">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/images/hero/hero2.png') }}">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/images/hero/hero3.png') }}">
            </div>

        </div>

    </div>

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <h1>Welcome to WineHouse</h1>

        <p id="experiencePara">
            Discover premium wines crafted with passion and tradition.
            Experience luxury taste and world-class wine collections.
        </p>

        <a href="/wines" class="btn btn-gold">Explore Wines</a>

    </div>

</section>



{{-- CATEGORIES DYNAMIC --}}

<section class="section">

    <div class="container">

        <div class="section-title">
            <h2>Wine Categories</h2>
        </div>

        <div class="row g-4">

            @foreach($categories as $category)

            <div class="col-md-4">

                <div class="category-card">

                    <img src="{{ asset('storage/'.$category->image) }}">

                    <div class="category-label">
                        {{ $category->name }}
                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>



{{-- COLLECTIONS DYNAMIC --}}

<section class="section section-dark">

    <div class="container">

        <div class="section-title">
            <h2>Collections</h2>
        </div>

        <div class="row g-4">

            @foreach($collections as $collection)

            <div class="col-md-6">

                <div class="collection-banner">

                    <img src="{{ asset('storage/'.$collection->image) }}">

                    <div class="banner-text">
                        {{ $collection->name }}
                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>



{{-- FEATURED WINES DYNAMIC --}}

<section class="section">

    <div class="container">

        <div class="section-title">
            <h2>Featured Wines</h2>
        </div>

        <div class="row g-4">

            @foreach($featuredWines as $wine)

            <div class="col-md-3">

                <div class="card product-card">

                    <img src="{{ asset('storage/'.$wine->image) }}">

                    <div class="card-body text-center">

                        <div class="product-title">
                            {{ $wine->name }}
                        </div>

                        <div class="price">
                            ${{ $wine->price }}
                        </div>

                        <a href="/wines/{{ $wine->slug }}" class="btn btn-gold mt-2">
                            View Wine
                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>



{{-- ABOUT SECTION --}}

<section class="section section-dark">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="{{ asset('assets/images/about/Vineyard.jpg') }}" class="about-img">
            </div>

            <div class="col-md-6">

                <h2>Our Wine Experience</h2>

                <p class="paratext">
                    WineHouse brings together tradition, craftsmanship, and luxury taste.
                    Our vineyards produce exceptional wines carefully aged to deliver unforgettable flavors.
                </p>

                <a href="/about" class="btn btn-gold mt-3">
                    Learn More
                </a>

            </div>

        </div>

    </div>

</section>



{{-- NEWSLETTER --}}

<section class="section newsletter">

    <div class="container">

        <h2>Join Our Wine Club</h2>

        <p class="paratext">
            Get updates about new wine collections and events.
        </p>

        <form class="mt-4">

            <input type="email" placeholder="Enter your email">

            <button class="btn btn-gold">
                Subscribe
            </button>

        </form>

    </div>

</section>

@endsection