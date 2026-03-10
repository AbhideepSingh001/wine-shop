<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','WineHouse')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/icons/favicon.png') }}" type="image/x-icon">
    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <style>
        /* ===============================
GLOBAL DESIGN SYSTEM
=============================== */

        :root {

            --wine-red: black;
            --charcoal-black: white;
            --secondary-bg: #FFF8F0;
            --accent-gold: #D4AF37;
            --text-color: black;

        }
        

        /* ===============================
GLOBAL RESET
=============================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            background: var(--charcoal-black);
            color: var(--text-color);
            font-family: 'Cutive Mono', sans-serif;

        }


        /* ===============================
TYPOGRAPHY SYSTEM
=============================== */

        h1 {
            font-size: 55px;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
        }

        h2 {
            font-size: 36px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        h3 {
            font-size: 28px;
            font-weight: 600;
        }

        h4 {
            font-size: 20px;
            font-weight: 600;
        }

        h5 {
            font-size: 18px;
            font-weight: 500;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #d6d6d6;
        }


        /* ===============================
NAVBAR
=============================== */

        .navbar {

            background: var(--wine-red);
            padding: 15px 0;

        }

        .navbar-brand {

            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 600;
            color: white;

        }

        .navbar-brand:hover {

            color: var(--accent-gold);

        }

        .nav-link {

            color: #f1f1f1 !important;
            margin-left: 18px;
            font-size: 15px;
            transition: 0.3s;

        }

        .nav-link:hover {

            color: var(--accent-gold) !important;

        }

        .icon-btn {

            font-size: 18px;
            margin-left: 15px;
            cursor: pointer;
            color: white;
        }


        /* ===============================
BUTTON STYLE
=============================== */

        .btn-gold {

            background: var(--accent-gold);
            color: black;
            padding: 10px 20px;
            border: none;
            font-weight: 500;
            transition: 0.3s;

        }

        .btn-gold:hover {

            background: #c89e2e;

        }


        /* ===============================
SECTION BACKGROUNDS
=============================== */

        .section-dark {

            background: var(--secondary-bg);

        }

        .section {

            padding: 80px 0;

        }


        /* ===============================
FOOTER
=============================== */

        footer {

            background: #000;
            padding: 60px 0;

        }

        .footer-title {

            color: var(--accent-gold);
            margin-bottom: 20px;

        }

        .footer-link {

            color: #cfcfcf;
            display: block;
            margin-bottom: 8px;
            text-decoration: none;

        }

        .footer-link:hover {

            color: var(--accent-gold);

        }
        .navbar-brand img.logo{
    height: 40px;
    width: auto;
}
    </style>

    @stack('styles')

</head>


<body>



    {{-- ===============================
NAVBAR
=============================== --}}

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="WineHouse Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">

                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/wines">Our Wines</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/collections">Collections</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/wine-guide">Wine Guide</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>


                    {{-- Search Icon --}}
                    <li class="nav-item ms-3">

                        <form action="/wines" method="GET" class="d-flex">

                            <input
                                type="text"
                                name="search"
                                class="form-control me-2"
                                placeholder="Search wine..."
                                style="width:180px;">

                            <button class="btn btn-gold" type="submit">
                                <i class="bi bi-search"></i>
                            </button>

                        </form>

                    </li>


                    {{-- User Account --}}
                    <li class="nav-item icon-btn">

                        <i class="bi bi-person"></i>

                    </li>


                    {{-- Cart --}}
                    <li class="nav-item icon-btn">

                        <i class="bi bi-bag"></i>

                    </li>

                </ul>

            </div>

        </div>

    </nav>



    {{-- ===============================
MAIN CONTENT
=============================== --}}

    <main>

        @yield('content')

    </main>



    {{-- ===============================
FOOTER
=============================== --}}

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <h4 class="footer-title">WineHouse</h4>

                    <p>

                        Discover premium wines crafted with passion and tradition.
                        Experience luxury taste and world-class wine collections.

                    </p>

                </div>


                <div class="col-md-4">

                    <h4 class="footer-title">Quick Links</h4>

                    <a href="/" class="footer-link">Home</a>
                    <a href="/wines" class="footer-link">Our Wines</a>
                    <a href="/collections" class="footer-link">Collections</a>
                    <a href="/wine-guide" class="footer-link">Wine Guide</a>

                </div>


                <div class="col-md-4">

                    <h4 class="footer-title">Contact</h4>

                    <p>Email: info@winehouse.com</p>
                    <p>Phone: +91 9876543210</p>

                </div>

            </div>

            <hr style="border-color:#333">

            <div class="text-center">

                © 2026 WineHouse. All Rights Reserved.

            </div>

        </div>

    </footer>



    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    @stack('scripts')

</body>

</html>