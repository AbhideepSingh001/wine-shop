@extends('layouts.app')

@section('title','Contact Us')

@push('styles')

<style>
    /* =========================
PAGE HEADER
========================= */

    .page-header {
        height: 45vh;
        background:url('{{ asset("assets/images/about/Vineyard.jpg") }}') center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        /* horizontal center */
        text-align: center;
        /* text center */
        position: relative;
    }

    .page-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, .55);
    }

    .page-header .container {
        position: relative;
        z-index: 2;
        color: white;
    }


    /* =========================
CONTACT FORM
========================= */

    .contact-form {
        background: white;
        padding: 35px;
        border-radius: 6px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, .1);
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        outline: none;
    }

    .contact-form textarea {
        height: 120px;
        resize: none;
    }


    /* =========================
CONTACT INFO
========================= */

    .contact-info {
        background: var(--secondary-bg);
        padding: 35px;
        border-radius: 6px;
        height: 100%;
    }

    .contact-info h4 {
        color: var(--wine-red);
        margin-bottom: 15px;
    }

    .contact-item {
        margin-bottom: 20px;
        color: black;
    }

    /* =========================
MAP
========================= */

    .map-section iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }
</style>

@endpush



@section('content')


{{-- =========================
PAGE HEADER
========================= --}}

<section class="page-header">

    <div class="page-overlay"></div>

    <div class="container" id="page-heading">

        <h1>Contact Us</h1>
        <p>We would love to hear from you.</p>

    </div>

</section>



{{-- =========================
CONTACT SECTION
========================= --}}

<section class="section">

    <div class="container">

        <div class="row g-4">

            {{-- CONTACT FORM --}}

            <div class="col-md-7">

                <div class="contact-form">

                    <h3>Send Us a Message</h3>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        <strong>Success!</strong> {{ session('success') }}

                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

                    </div>
                    @endif


                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

                    </div>
                    @endif


                    <form action="{{ route('contact.store') }}" method="POST">

                        @csrf

                        <input type="text" name="name" placeholder="Your Name">

                        <input type="email" name="email" placeholder="Your Email">

                        <input type="text" name="subject" placeholder="Subject">

                        <textarea name="message" placeholder="Your Message"></textarea>

                        <button class="btn btn-gold">Send Message</button>

                    </form>

                </div>

            </div>


            {{-- CONTACT INFO --}}

            <div class="col-md-5">

                <div class="contact-info">

                    <h4>Contact Information</h4>

                    <div class="contact-item">
                        <strong>Address:</strong><br>

                        {!! $setting->address ?? '' !!}

                    </div>

                    <div class="contact-item">

                        <strong>Phone:</strong><br>

                        {{ $setting->phone ?? '' }}

                    </div>

                    <div class="contact-item">

                        <strong>Email:</strong><br>

                        {{ $setting->email ?? '' }}

                    </div>

                    <div class="contact-item">

                        <strong>Opening Hours:</strong><br>

                        {{ $setting->opening_hours ?? '' }}

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================
MAP SECTION
========================= --}}

<section class="map-section">

    <iframe src="{{ $setting->map ?? '' }}"></iframe>

</section>


@endsection