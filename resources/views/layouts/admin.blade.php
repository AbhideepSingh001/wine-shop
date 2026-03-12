<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Admin Panel - WineHouse')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        /* ===============================
GLOBAL DESIGN SYSTEM (same as frontend)
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

            background: var(--secondary-bg);
            color: var(--text-color);
            font-family: 'Poppins', sans-serif;

        }

        /* ===============================
ADMIN NAVBAR
=============================== */

        .admin-navbar {

            background: var(--wine-red);
            padding: 15px 25px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .admin-navbar h4 {

            font-family: 'Playfair Display', serif;
            margin: 0;
            color: white;

        }

        .admin-navbar .admin-icons i {

            font-size: 18px;
            margin-left: 15px;
            cursor: pointer;
        }

        /* ===============================
SIDEBAR
=============================== */

        .sidebar {

            width: 230px;
            height: 100vh;
            background: black;
            color: white;
            position: fixed;
            padding-top: 25px;

        }

        .sidebar h5 {

            font-family: 'Playfair Display', serif;
            text-align: center;
            margin-bottom: 30px;
            color: var(--accent-gold);

        }

        .sidebar a {

            display: block;
            padding: 12px 20px;
            color: #ddd;
            text-decoration: none;
            font-size: 15px;
            transition: 0.3s;

        }

        .sidebar a:hover {

            background: #111;
            color: var(--accent-gold);

        }

        /* ===============================
CONTENT AREA
=============================== */

        .admin-content {

            margin-left: 230px;
            padding: 30px;

        }

        /* ===============================
CARDS
=============================== */

        .admin-card {

            background: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            padding: 20px;

        }
    </style>

    @stack('styles')

</head>


<body>


    {{-- ===============================
SIDEBAR
=============================== --}}

    <div class="sidebar">

        <h5>WineHouse Admin</h5>

        <a href="{{route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="{{ url('/') }}">
            <i class="bi bi-box-arrow-in-up-right"></i> Visit Our Site
        </a>

        <a href=" {{ route('admin.wines.index') }} ">
            <i class="bi bi-cup-straw"></i> Wines
        </a>

        <a href="{{ route('admin.categories.index') }}">
            <i class="bi bi-tags"></i> Categories
        </a>

        <a href="{{ route('admin.collections.index') }}">
            <i class="bi bi-grid"></i> Collections
        </a>

        <a href="{{ route('admin.orders.index') }}">
            <i class="bi bi-bag"></i> Orders
        </a>

        <a href="{{ route('admin.contacts.index') }}" class="nav-link">
            <i class="bi bi-chat-left"></i> Contact Messages
        </a>

        <a class="nav-link" href="{{ route('admin.settings.edit') }}">
            <i class="bi bi-gear"></i> Contact Settings
        </a>

        <a class="nav-link" href="{{ route('admin.roles.index') }}">
            <i class="bi bi-person-circle"></i> Role Setting
        </a>


    </div>


    {{-- ===============================
MAIN AREA
=============================== --}}

    <div class="admin-content">


        {{-- NAVBAR --}}
        <div class="admin-navbar mb-4">

            <h4>Admin Dashboard</h4>

            <div class="admin-icons">

                <i class="bi bi-bell"></i>

                <i class="bi bi-person-circle"></i>

            </div>

        </div>


        {{-- PAGE CONTENT --}}
        @yield('content')


    </div>



    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>