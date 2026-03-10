@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Edit Collection</h2>

    <form action="{{ route('admin.collections.update',$collection->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Collection Name</label>
            <input type="text" name="name" value="{{ $collection->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">
            {{ $collection->description }}
            </textarea>
        </div>

        <div class="mb-3">
            <label>Collection Image</label>

            <input type="file" name="image" class="form-control">

            @if($collection->image)

            <br>

            <img src="{{ asset('storage/'.$collection->image) }}" width="100">

            @endif

        </div>

        <div class="mb-3">
            <label>Select Wines</label>

            <select name="wines[]" multiple class="form-control">

                @foreach($wines as $wine)

                <option value="{{ $wine->id }}"
                    @if($collection->wines->contains($wine->id)) selected @endif>

                    {{ $wine->name }}

                </option>

                @endforeach

            </select>

        </div>

        <button class="btn btn-success">
            Update Collection
        </button>

    </form>

</div>

@endsection