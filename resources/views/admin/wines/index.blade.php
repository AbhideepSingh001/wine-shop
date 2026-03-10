@extends('layouts.admin')

@section('title','Manage Wines')

@section('content')

<div class="admin-card">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 style="font-family:'Playfair Display',serif;">Wine Management</h3>

        <a href="{{ route('admin.wines.create') }}" class="btn btn-dark">

            <i class="bi bi-plus-lg"></i> Add Wine

        </a>

    </div>


    <div class="table-responsive">

        <table class="table table-hover align-middle">

            <thead class="table-dark">

                <tr>

                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th width="150">Action</th>

                </tr>

            </thead>

            <tbody>

                @forelse($wines as $wine)

                <tr>

                    <td>{{ $wine->id }}</td>

                    <td>

                        @if($wine->image)

                        <img
                            src="{{ asset('storage/'.$wine->image) }}"
                            style="height:60px;border-radius:6px;">

                        @endif

                    </td>

                    <td>

                        <strong>{{ $wine->name }}</strong>

                    </td>

                    <td>

                        {{ $wine->category->name ?? 'N/A' }}

                    </td>

                    <td>

                        ₹{{ number_format($wine->price,2) }}

                    </td>

                    <td>

                        <a href="{{ route('admin.wines.edit',$wine->id) }}"
                            class="btn btn-sm btn-warning">

                            <i class="bi bi-pencil"></i>

                        </a>

                        <form
                            action="{{ route('admin.wines.destroy',$wine->id) }}"
                            method="POST"
                            style="display:inline-block">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this wine?')">

                                <i class="bi bi-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center">

                        No wines found

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection