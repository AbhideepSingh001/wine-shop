@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Create Banner</h2>

    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control">
        </div>

        <div class="mb-3">
            <label>Button Text</label>
            <input type="text" name="button_text" class="form-control">
        </div>

        <div class="mb-3">
            <label>Button Link</label>
            <input type="text" name="button_link" class="form-control">
        </div>

        <div class="mb-3">
            <label>Banner Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">

            <label>Status</label>

            <select name="status" class="form-control">

                <option value="1">Active</option>
                <option value="0">Inactive</option>

            </select>

        </div>

        <button class="btn btn-success">
            Save Banner
        </button>

    </form>

</div>

@endsection