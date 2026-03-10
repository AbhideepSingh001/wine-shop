@extends('layouts.admin')

@section('content')

<div class="container">

<h2>Edit Wine Guide</h2>

<form action="{{ route('admin.wineGuides.update',$guide->id) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" value="{{ $guide->title }}" class="form-control">
</div>

<div class="mb-3">
<label>Content</label>
<textarea name="content" class="form-control">
{{ $guide->content }}
</textarea>
</div>

<div class="mb-3">
<label>Image</label>
<input type="file" name="image" class="form-control">
</div>

<button class="btn btn-success">
Update Guide
</button>

</form>

</div>

@endsection