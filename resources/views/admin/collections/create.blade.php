@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Create Collection</h2>

    <form action="{{ route('admin.collections.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Collection Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Collection Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Select Wines</label>

            <select name="wines[]" multiple class="form-control">

                @foreach($wines as $wine)

                <option value="{{ $wine->id }}">
                    {{ $wine->name }}
                </option>

                @endforeach

            </select>

            <small class="text-muted">
                Hold CTRL to select multiple wines
            </small>

        </div>

        <button class="btn btn-success">
            Save Collection
        </button>

    </form>

</div>

@endsection