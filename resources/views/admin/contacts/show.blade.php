@extends('layouts.admin')

@section('content')

<div class="container">

    <h2>Contact Message</h2>

    <div class="card mt-3">

        <div class="card-body">

            <p><strong>Name:</strong> {{ $contact->name }}</p>

            <p><strong>Email:</strong> {{ $contact->email }}</p>

            <p><strong>Subject:</strong> {{ $contact->subject }}</p>

            <p><strong>Message:</strong></p>

            <p>{{ $contact->message }}</p>

            <p><strong>Date:</strong> {{ $contact->created_at->format('d M Y H:i') }}</p>

            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary mt-3">
                Back
            </a>

        </div>

    </div>

</div>

@endsection