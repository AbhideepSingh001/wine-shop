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
        background-color: #fff8f0;
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

        <h1>Our Wine</h1>

        <p>Explore our premium wines from around the world.</p>

    </div>

</section>



{{-- ===========================
WINE LISTING
=========================== --}}

<section class="section">

    <div class="container">


        {{-- FILTER BAR --}}

        <form method="GET" action="{{ route('wines.index') }}">

            <div class="filter-bar row">

                <div class="col-md-4">

                    <select name="category" class="form-select" onchange="this.form.submit()">

                        <option value="">All Categories</option>

                        @foreach($categories as $category)

                        <option value="{{ $category->id }}"
                            {{ request('category') == $category->id ? 'selected' : '' }}>

                            {{ $category->name }}

                        </option>

                        @endforeach

                    </select>

                </div>


                <div class="col-md-4">

                    <select name="sort" class="form-select" onchange="this.form.submit()">

                        <option value="">Sort By</option>

                        <option value="low"
                            {{ request('sort') == 'low' ? 'selected' : '' }}>

                            Price Low to High

                        </option>

                        <option value="high"
                            {{ request('sort') == 'high' ? 'selected' : '' }}>

                            Price High to Low

                        </option>

                    </select>

                </div>


                <div class="col-md-4">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        class="form-control"
                        placeholder="Search wine...">

                </div>

            </div>

        </form>



        {{-- PRODUCTS GRID --}}

        <div class="row g-4">
            <div class="row g-4">

                @foreach($wines as $wine)

                <div class="col-md-3">

                    <div class="wine-card">

                        <img src="{{ asset('storage/'.$wine->image) }}">

                        <div class="wine-info">

                            <div class="wine-name">

                                <a href="{{ route('wines.show',$wine->id) }}">

                                    {{ $wine->name }}

                                </a>

                            </div>

                            <div class="wine-price">

                                ₹{{ $wine->price }}

                            </div>

                            <form action="{{ route('wishlist.add',$wine->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Add To Wishlist</button>
                            </form>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>


        </div>

    </div>

</section>


@endsection