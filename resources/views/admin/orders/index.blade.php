@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Customer Orders</h2>

    {{-- Alert Message --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">

        {{ session('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

    </div>
    @endif


    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>User</th>
                        <th>Wine</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Phone</th>
                        <th>Table</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($orders as $order)

                    <tr>

                        <td>{{ $order->id }}</td>

                        <td>{{ $order->user->name }}</td>

                        <td>{{ $order->wine->name }}</td>

                        <td>₹{{ $order->price }}</td>

                        <td>{{ $order->quantity }}</td>

                        <td>{{ $order->phone }}</td>

                        <td>{{ $order->table_number }}</td>

                        <td>

                            <span class="badge bg-warning text-dark">

                                {{ $order->status }}

                            </span>

                        </td>

                        <td>

                            <form action="{{ route('admin.orders.delete',$order->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure to cancel this order?')">

                                    Cancel Order

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="9" class="text-center">

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