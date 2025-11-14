<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Travel Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* ============ NAVBAR ============ */
    .navbar {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .navbar-nav .nav-link.active {
        font-weight: bold;
        color: #ffc107 !important;
    }

    body {
    background-image: url('{{ asset("images/bckground.webp") }}');
        background-position: center;
    }

    /* ============ HERO SECTION ============ */
    .hero-section {
        background-image: url('{{ asset("images/city.jpeg") }}');
        background-size: cover;
        background-position: center;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 700px;
    }

    .hero-content h1 {
        font-size: 3rem;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .hero-content p {
        font-size: 1.25rem;
        margin-top: 10px;
    }

    .hero-content .btn {
        font-weight: bold;
        padding: 10px 30px;
        border-radius: 30px;
    }

    /* ============ FOOTER ============ */
    footer {
        background-color: #212529;
        color: white;
        text-align: center;
        padding: 15px 0;
        margin-top: 40px;
    }
    </style>
</head>

<body>
    <!-- ============ NAVBAR ============ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
            </div>

            <div class="navbar-nav ms-auto">
                <span class="navbar-text">
                    24010500001 - Fahmi Hidayat (GANJIL)
                </span>
                <span>
                    24010600010 - Veni Adelia (GENAP)
                </span>
            </div>
        </div>
    </nav>

    <!-- ============ KONTEN HALAMAN ============ -->
    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>