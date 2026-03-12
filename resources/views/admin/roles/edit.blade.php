@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Edit Role</h2>

    <form action="{{ route('admin.roles.update',$user->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>User Name</label>
            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
        </div>

        <div class="mb-3">
            <label>Select Role</label>

            <select name="role" class="form-control">

                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>

                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>

                <option value="super_admin" {{ $user->role == 'super_admin' ? 'selected' : '' }}>Super Admin</option>

            </select>

        </div>

        <button class="btn btn-primary">
            Update Role
        </button>

    </form>

</div>

@endsection