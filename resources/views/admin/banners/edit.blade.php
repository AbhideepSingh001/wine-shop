@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Edit Banner</h2>

    <form action="{{ route('admin.banners.update',$banner->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $banner->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" value="{{ $banner->subtitle }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Button Text</label>
            <input type="text" name="button_text" value="{{ $banner->button_text }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Button Link</label>
            <input type="text" name="button_link" value="{{ $banner->button_link }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Banner Image</label>
            <input type="file" name="image" class="form-control">

            @if($banner->image)

            <br>

            <img src="{{ asset('storage/'.$banner->image) }}" width="150">

            @endif

        </div>

        <div class="mb-3">

            <label>Status</label>

            <select name="status" class="form-control">

                <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Active</option>

                <option value="0" {{ $banner->status == 0 ? 'selected' : '' }}>Inactive</option>

            </select>

        </div>

        <button class="btn btn-success">
            Update Banner
        </button>

    </form>

</div>

@endsection