@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Categories</h2>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">
        Add Category
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach($categories as $category)

            <tr>

                <td>{{ $category->id }}</td>

                <td>
                    @if($category->image)
                    <img src="{{ asset('storage/'.$category->image) }}" width="60">
                    @else
                    No Image
                    @endif
                </td>

                <td>{{ $category->name }}</td>

                <td>{{ $category->description }}</td>

                <td>

                    <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.categories.destroy',$category->id) }}" method="POST" style="display:inline">

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