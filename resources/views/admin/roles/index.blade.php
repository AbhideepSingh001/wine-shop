@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>User Roles</h2>

    <table class="table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($users as $user)

            <tr>

                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                    <form action="{{ route('admin.roles.update',$user->id) }}" method="POST">

                        @csrf

                        <select name="role" class="form-control">

                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>

                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>

                            <option value="super_admin" {{ $user->role == 'super_admin' ? 'selected' : '' }}>Super Admin</option>

                        </select>

                </td>

                <td>

                    <a href="{{ route('admin.roles.edit',$user->id) }}" class="btn btn-primary">
                        Edit Role
                    </a>
                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection