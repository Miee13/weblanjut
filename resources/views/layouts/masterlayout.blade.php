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
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(15px);
    }

    body {
    background-image: url('{{ asset("images/bckground.webp") }}');
        background-position: center;
    }

  
    </style>
</head>

<body>
    <!-- ============ NAVBAR ============ -->
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(0, 0, 0, 0.5);">
    <div class="container-fluid">
        
        <div class="navbar-nav">
            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
        </div>
        
        
        <div class="navbar-nav position-absolute start-50 translate-middle-x">
            <span class="navbar-text text-white">
                24010500001 - Fahmi Hidayat (GANJIL)
            </span>
        </div>
        
        
        <div class="navbar-nav ms-auto">
            <span class="navbar-text text-white">
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