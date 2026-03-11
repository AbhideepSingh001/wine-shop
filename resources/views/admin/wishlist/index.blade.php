@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Wishlist Orders</h2>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>User</th>
                <th>Wine</th>
                <th>Quantity</th>
                <th>Table</th>
                <th>Note</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            @foreach($wishlists as $wishlist)

            <tr>
                <td>{{ $wishlist->user->name ?? 'Unknown User' }}</td>
                <td>{{ $wishlist->wine->name ?? 'Unknown Wine' }}</td>
                <td>{{ $wishlist->quantity }}</td>
                <td>{{ $wishlist->table_number }}</td>
                <td>{{ $wishlist->note }}</td>
                <td>{{ $wishlist->status }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection