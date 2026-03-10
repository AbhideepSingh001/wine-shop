@extends('layouts.admin')

@section('title','Add Wine')

@section('content')

<div class="admin-card">

<h3 class="mb-4" style="font-family:'Playfair Display',serif;">
Add New Wine
</h3>

@if ($errors->any())

<div class="alert alert-danger">

<ul class="mb-0">

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif


<form method="POST" action="{{ route('admin.wines.store') }}" enctype="multipart/form-data">

@csrf


<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">Wine Name</label>

<input type="text" name="name" class="form-control">

</div>


<div class="col-md-6 mb-3">

<label class="form-label">Category</label>

<select name="category_id" class="form-control">

<option value="">Select Category</option>

@foreach($categories as $category)

<option value="{{ $category->id }}">

{{ $category->name }}

</option>

@endforeach

</select>

</div>


<div class="col-md-6 mb-3">

<label class="form-label">Brand</label>

<input type="text" name="brand" class="form-control">

</div>


<div class="col-md-6 mb-3">

<label class="form-label">Country</label>

<input type="text" name="country" class="form-control">

</div>


<div class="col-md-4 mb-3">

<label class="form-label">Year</label>

<input type="number" name="year" class="form-control">

</div>


<div class="col-md-4 mb-3">

<label class="form-label">Alcohol %</label>

<input type="text" name="alcohol_percentage" class="form-control">

</div>


<div class="col-md-4 mb-3">

<label class="form-label">Price</label>

<input type="number" name="price" class="form-control">

</div>


<div class="col-md-6 mb-3">

<label class="form-label">Rating</label>

<input type="text" name="rating" class="form-control">

</div>


<div class="col-md-6 mb-3">

<label class="form-label">Wine Image</label>

<input type="file" name="image" class="form-control">

</div>


<div class="col-md-12 mb-3">

<label class="form-label">Description</label>

<textarea name="description" class="form-control" rows="4"></textarea>

</div>


</div>


<button class="btn btn-dark">

<i class="bi bi-save"></i> Save Wine

</button>

<a href="{{ route('admin.wines.index') }}" class="btn btn-secondary">

Cancel

</a>


</form>

</div>

@endsection