@extends('layouts.app')

@section('title','My Wishlist')

@push('styles')

<style>
    .wishlist-title {
        font-family: 'Playfair Display', serif;
        font-size: 40px;
        margin-bottom: 40px;
        text-align: center;
        letter-spacing: 3px;
    }

    .wishlist-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: .3s;
    }

    .wishlist-card:hover {
        transform: translateY(-5px);
    }

    .wishlist-img {
        height: 300px;
        width: 100%;
        object-fit: cover;
    }

    .wine-name {
        font-weight: 600;
        font-size: 18px;
        margin-top: 10px;
    }

    .wine-price {
        color: #D4AF37;
        font-weight: 600;
        margin-bottom: 10px;
    }
</style>

@endpush


@section('content')

<section class="section">

    <div class="container">

        <h2 class="wishlist-title">MY WISHLIST</h2>

        @if($wishlist->count() == 0)

        <div class="alert alert-info text-center">
            Your wishlist is empty.
        </div>

        @else

        <div class="row g-4">

            @foreach($wishlist as $item)

            <div class="col-md-3">

                <div class="card wishlist-card h-100">

                    <img src="{{ asset('storage/'.$item->wine->image) }}" class="wishlist-img">

                    <div class="card-body text-center">

                        <h5 class="wine-name">
                            {{ $item->wine->name }}
                        </h5>

                        <p class="wine-price">
                            ₹{{ $item->wine->price }}
                        </p>


                        {{-- ORDER BUTTON --}}
                        <button class="btn btn-success btn-sm mb-2"
                            data-bs-toggle="modal"
                            data-bs-target="#orderModal{{ $item->id }}">

                            Order Now

                        </button>


                        {{-- REMOVE BUTTON --}}
                        <form action="{{ route('wishlist.remove',$item->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">

                                Remove

                            </button>

                        </form>

                    </div>

                </div>

            </div>


            {{-- ORDER MODAL FORM --}}
            <div class="modal fade" id="orderModal{{ $item->id }}">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">

                                Order {{ $item->wine->name }}

                            </h5>

                            <button class="btn-close" data-bs-dismiss="modal"></button>

                        </div>


                        <form action="{{ route('orders.place',$item->id) }}" method="POST">
                            @csrf

                            <div class="modal-body">

                                <div class="mb-3">

                                    <label>Name</label>

                                    <input type="text" name="name" class="form-control" required>

                                </div>


                                <div class="mb-3">

                                    <label>Phone</label>

                                    <input type="text" name="phone" class="form-control" required>

                                </div>


                                <div class="mb-3">

                                    <label>Table Number</label>

                                    <input type="text" name="table_number" class="form-control" required>

                                </div>


                                <div class="mb-3">

                                    <label>Address / Notes</label>

                                    <textarea name="address" class="form-control"></textarea>

                                </div>

                            </div>


                            <div class="modal-footer">

                                <button class="btn btn-secondary" data-bs-dismiss="modal">

                                    Cancel

                                </button>

                                <button type="submit" class="btn btn-success">

                                    Place Order

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>


            @endforeach

        </div>

        @endif

    </div>

</section>

@endsection