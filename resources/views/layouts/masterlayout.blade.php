<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Travel Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Home dan About di kiri -->
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
            </div>
            
            <!-- NIM dan Nama di kanan -->
            <div class="navbar-nav ms-auto">
                <span class="navbar-text">
                    24010500001 - Fahmi Hidayat (GANJIL)
                </span>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>