@extends('layouts.app')

@section('title','Our Wines')


@push('styles')

<style>
    /* ============================
PAGE HEADER
============================ */

    .page-header {
        height: 45vh;
        background:url('{{ asset("assets/images/hero/hero2.png") }}') center/cover;
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
        background: rgba(0, 0, 0, .6);
    }

    .page-header .container {
        position: relative;
        z-index: 2;
        color: white;
    }

    .page-header h1 {
        font-size: 48px;
    }

    /* ============================
FILTER BAR
============================ */

    .filter-bar {
        background: var(--secondary-bg);
        padding: 20px;
        border-radius: 6px;
        margin-bottom: 40px;
    }

    /* ============================
WINE CARDS
============================ */

    .wine-card {
        background: white;
        border-radius: 6px;
        overflow: hidden;
        transition: all .3s;
    }

    .wine-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, .15);
    }

    .wine-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
    }

    .wine-info {
        padding: 20px;
        text-align: center;
    }

    .wine-name {
        font-size: 18px;
        font-weight: 600;
        color: var(--wine-red);
    }

    .wine-price {
        font-weight: 600;
        color: var(--accent-gold);
        margin: 10px 0;
    }
</style>

@endpush



@section('content')


{{-- ===========================
PAGE HEADER
=========================== --}}

<section class="page-header">

    <div class="page-overlay"></div>

    <div class="container">

        <h1>Our Wine Collection</h1>

        <p>Explore our premium wines from around the world.</p>

    </div>

</section>



{{-- ===========================
WINE LISTING
=========================== --}}

<section class="section">

    <div class="container">


        {{-- FILTER BAR --}}

        <div class="filter-bar row">

            <div class="col-md-4">

                <select class="form-select">
                    <option>All Categories</option>
                    <option>Red Wine</option>
                    <option>White Wine</option>
                    <option>Champagne</option>
                </select>

            </div>


            <div class="col-md-4">

                <select class="form-select">
                    <option>Sort By</option>
                    <option>Price Low to High</option>
                    <option>Price High to Low</option>
                </select>

            </div>


            <div class="col-md-4">

                <input type="text" class="form-control" placeholder="Search wine...">

            </div>

        </div>



        {{-- PRODUCTS GRID --}}

        <div class="row g-4">


            <div class="col-md-3">

                <div class="wine-card">

                    <img src="{{ asset('assets/images/wine-products/Cabernet.jpg') }}">

                    <div class="wine-info">

                        <div class="wine-name">Cabernet Sauvignon</div>

                        <div class="wine-price">$120</div>

                        <button class="btn btn-gold">Add to Wishlist</button>

                    </div>

                </div>

            </div>



            <div class="col-md-3">

                <div class="wine-card">

                    <img src="{{ asset('assets/images/wine-products/Chardonnay.jpg') }}">

                    <div class="wine-info">

                        <div class="wine-name">Chardonnay</div>

                        <div class="wine-price">$95</div>

                        <button class="btn btn-gold">Add to Wishlist</button>

                    </div>

                </div>

            </div>



            <div class="col-md-3">

                <div class="wine-card">

                    <img src="{{ asset('assets/images/wine-products/Merlot.jpg') }}">

                    <div class="wine-info">

                        <div class="wine-name">Merlot</div>

                        <div class="wine-price">$110</div>

                        <button class="btn btn-gold">Add to Wishlist</button>

                    </div>

                </div>

            </div>



            <div class="col-md-3">

                <div class="wine-card">

                    <img src="{{ asset('assets/images/wine-products/Pinot.jpg') }}">

                    <div class="wine-info">

                        <div class="wine-name">Pinot Noir</div>

                        <div class="wine-price">$105</div>

                        <button class="btn btn-gold">Add to Wishlist</button>

                    </div>

                </div>

            </div>



            <div class="col-md-3">

                <div class="wine-card">

                    <img src="{{ asset('assets/images/wine-products/Sauvignon.jpg') }}">

                    <div class="wine-info">

                        <div class="wine-name">Sauvignon Blanc</div>

                        <div class="wine-price">$90</div>

                        <button class="btn btn-gold">Add to Wishlist</button>

                    </div>

                </div>

            </div>



            <div class="col-md-3">

                <div class="wine-card">

                    <img src="{{ asset('assets/images/wine-products/Champagne.jpg') }}">

                    <div class="wine-info">

                        <div class="wine-name">Premium Champagne</div>

                        <div class="wine-price">$150</div>

                        <button class="btn btn-gold">Add to Wishlist</button>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


@endsection