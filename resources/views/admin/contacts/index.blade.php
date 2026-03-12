@extends('layouts.admin')

@section('content')

<div class="container">

    <h2 class="mb-4">Contact Messages</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($contacts as $contact)

            <tr>

                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->created_at->format('d M Y') }}</td>

                <td>

                    <a href="{{ route('admin.contacts.show',$contact->id) }}" class="btn btn-info btn-sm">
                        View
                    </a>

                    <form action="{{ route('admin.contacts.delete',$contact->id) }}"
                        method="POST"
                        style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection