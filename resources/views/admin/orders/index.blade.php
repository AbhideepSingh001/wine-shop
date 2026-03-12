@extends('layouts.admin')

@section('content')

<div class="container">

<h2 class="mb-4">Customer Orders</h2>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">

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

<td>{{ $loop->iteration }}</td>

<td>{{ $order->user->name }}</td>

<td>{{ $order->wine->name }}</td>

<td>₹{{ $order->price }}</td>

<td>{{ $order->quantity }}</td>

<td>{{ $order->phone }}</td>

<td>{{ $order->table_number }}</td>

<td>

<form action="{{ route('admin.orders.status',$order->id) }}" method="POST">

@csrf
@method('PATCH')

<select name="status"
class="form-select form-select-sm"
onchange="this.form.submit()">

<option value="pending" {{ $order->status=='pending' ? 'selected':'' }}>
Pending
</option>

<option value="preparing" {{ $order->status=='preparing' ? 'selected':'' }}>
Preparing
</option>

<option value="served" {{ $order->status=='served' ? 'selected':'' }}>
Served
</option>

<option value="cancelled" {{ $order->status=='cancelled' ? 'selected':'' }}>
Cancelled
</option>

</select>

</form>

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