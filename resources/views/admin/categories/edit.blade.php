@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Edit Category</h2>

    <form action="{{ route('admin.categories.update',$category->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">
            {{ $category->description }}
            </textarea>
        </div>

        <button class="btn btn-success">
            Update Category
        </button>

    </form>

</div>

@endsection