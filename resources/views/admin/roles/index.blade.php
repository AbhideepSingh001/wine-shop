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
                    {{ ucfirst($user->role) }}
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