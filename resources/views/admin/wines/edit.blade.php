@extends('layouts.admin')

@section('title','Edit Wine')

@section('content')

<div class="admin-card">

    <h3 class="mb-4" style="font-family:'Playfair Display',serif;">
        Edit Wine
    </h3>


    <form method="POST" action="{{ route('admin.wines.update',$wine->id) }}" enctype="multipart/form-data">

        @csrf
        @method('PUT')


        <div class="row">

            <div class="col-md-6 mb-3">

                <label class="form-label">Wine Name</label>

                <input type="text" name="name" class="form-control" value="{{ $wine->name }}">

            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">Category</label>

                <select name="category_id" class="form-control">

                    @foreach($categories as $category)

                    <option value="{{ $category->id }}"

                        @if($wine->category_id==$category->id) selected @endif>

                        {{ $category->name }}

                    </option>

                    @endforeach

                </select>

            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">Brand</label>

                <input type="text" name="brand" class="form-control" value="{{ $wine->brand }}">

            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">Country</label>

                <input type="text" name="country" class="form-control" value="{{ $wine->country }}">

            </div>


            <div class="col-md-4 mb-3">

                <label class="form-label">Year</label>

                <input type="number" name="year" class="form-control" value="{{ $wine->year }}">

            </div>


            <div class="col-md-4 mb-3">

                <label class="form-label">Alcohol %</label>

                <input type="text" name="alcohol_percentage" class="form-control" value="{{ $wine->alcohol_percentage }}">

            </div>


            <div class="col-md-4 mb-3">

                <label class="form-label">Price</label>

                <input type="number" name="price" class="form-control" value="{{ $wine->price }}">

            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">Rating</label>

                <input type="text" name="rating" class="form-control" value="{{ $wine->rating }}">

            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">Image</label>

                <input type="file" name="image" class="form-control">

                @if($wine->image)

                <div class="mt-2">

                    <img src="{{ asset('storage/'.$wine->image) }}" style="height:80px;border-radius:6px;">

                </div>

                @endif

            </div>


            <div class="col-md-12 mb-3">

                <label class="form-label">Description</label>

                <textarea name="description" class="form-control" rows="4">{{ $wine->description }}</textarea>

            </div>

        </div>


        <button class="btn btn-dark">

            <i class="bi bi-save"></i> Update Wine

        </button>

        <a href="{{ route('admin.wines.index') }}" class="btn btn-secondary">

            Cancel

        </a>


    </form>

</div>

@endsection