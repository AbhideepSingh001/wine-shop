@extends('layouts.app')

@section('title','My Orders')

@section('content')

<div class="container py-5">

<h2 class="mb-4">My Orders</h2>

@if($orders->count() == 0)

<div class="alert alert-info">
No orders yet.
</div>

@else

<div class="row g-4">

@foreach($orders as $order)

<div class="col-md-3">

<div class="card h-100">

<img src="{{ asset('storage/'.$order->wine->image) }}" class="card-img-top">

<div class="card-body text-center">

<h5>{{ $order->wine->name }}</h5>

<p class="text-warning fw-bold">
₹{{ $order->price }}
</p>

<span class="badge bg-success">
{{ $order->status }}
</span>

</div>

</div>

</div>

@endforeach

</div>

@endif

</div>

@endsection