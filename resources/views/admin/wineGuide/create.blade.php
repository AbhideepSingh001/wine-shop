@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Add Wine Guide</h2>

    <form action="{{ route('admin.wineGuides.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label>Guide Type</label>

            <select name="type" class="form-control" required>

                <option value="">Select Type</option>

                <option value="types">Types of Wine</option>

                <option value="tasting">Wine Tasting</option>

                <option value="tips">Wine Tips</option>

            </select>

        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success">
            Save Guide
        </button>

    </form>

</div>

@endsection