@extends('layouts.app')

@section('title','Contact Us')

@push('styles')

<style>
    /* =========================
PAGE HEADER
========================= */

    .page-header {
    height:45vh;
    background:url('{{ asset("assets/images/about/Vineyard.jpg") }}') center/cover;
    display:flex;
    align-items:center;
    justify-content:center;   /* horizontal center */
    text-align:center;        /* text center */
    position:relative;
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

                    <form>

                        <input type="text" placeholder="Your Name">

                        <input type="email" placeholder="Your Email">

                        <input type="text" placeholder="Subject">

                        <textarea placeholder="Your Message"></textarea>

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
                        123 Vineyard Road,<br>
                        Wine Valley, California
                    </div>

                    <div class="contact-item">
                        <strong>Phone:</strong><br>
                        +1 234 567 890
                    </div>

                    <div class="contact-item">
                        <strong>Email:</strong><br>
                        info@winehouse.com
                    </div>

                    <div class="contact-item">
                        <strong>Opening Hours:</strong><br>
                        Mon - Sat : 10:00 AM – 9:00 PM
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

    <iframe
        src="https://www.google.com/maps?q=california+vineyard&output=embed">
    </iframe>

</section>


@endsection