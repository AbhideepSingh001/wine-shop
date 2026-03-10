@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Banners</h2>

    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary mb-3">
        Add Banner
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach($banners as $banner)

            <tr>

                <td>{{ $banner->id }}</td>

                <td>{{ $banner->title }}</td>

                <td>

                    @if($banner->image)

                    <img src="{{ asset('storage/'.$banner->image) }}" width="120">

                    @endif

                </td>

                <td>

                    @if($banner->status == 1)

                    <span class="badge bg-success">Active</span>

                    @else

                    <span class="badge bg-danger">Inactive</span>

                    @endif

                </td>

                <td>

                    <a href="{{ route('admin.banners.edit',$banner->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.banners.destroy',$banner->id) }}" method="POST" style="display:inline">

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