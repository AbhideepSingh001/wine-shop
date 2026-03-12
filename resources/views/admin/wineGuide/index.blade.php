@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Wine Guides</h2>

    <a href="{{ route('admin.wineGuide.create') }}" class="btn btn-primary mb-3">
        Add Guide
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach($guides as $guide)

            <tr>

                <td>{{ $guide->id }}</td>

                <td>{{ $guide->title }}</td>

                <td>

                    <a href="{{ route('admin.wineGuide.edit', $guide->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.wineGuide.destroy',$guide->id) }}" method="POST" style="display:inline">

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