@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="mb-4">My Orders</h2>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>

                        <th>#</th>
                        <th>Wine</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Order Time</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($orders as $order)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $order->wine->name }}</td>

                        <td>₹{{ $order->price }}</td>

                        <td>{{ $order->quantity }}</td>

                        <td>

                            <span class="badge
@if($order->status=='pending') bg-warning
@elseif($order->status=='preparing') bg-info
@elseif($order->status=='served') bg-success
@elseif($order->status=='cancelled') bg-danger
@endif
">

                                {{ ucfirst($order->status) }}

                            </span>

                        </td>

                        <td>{{ $order->created_at->format('d M Y H:i') }}</td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            No Orders Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection