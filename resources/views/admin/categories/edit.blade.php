@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Edit Category</h2>

    <form action="{{ route('admin.categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ $category->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>

            @if($category->image)
            <img src="{{ asset('storage/'.$category->image) }}" width="120" class="mb-2">
            @endif

        </div>

        <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Update Category
        </button>

        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

@endsection