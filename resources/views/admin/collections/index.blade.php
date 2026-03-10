@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Collections</h2>

    <a href="{{ route('admin.collections.create') }}" class="btn btn-primary mb-3">
        Add Collection
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach($collections as $collection)

            <tr>

                <td>{{ $collection->id }}</td>

                <td>{{ $collection->name }}</td>

                <td>
                    @if($collection->image)
                    <img src="{{ asset('storage/'.$collection->image) }}" width="80">
                    @endif
                </td>

                <td>

                    <a href="{{ route('admin.collections.edit',$collection->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.collections.destroy',$collection->id) }}" method="POST" style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection