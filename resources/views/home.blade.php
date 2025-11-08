@extends('layouts.masterlayout')

<<<<<<< HEAD
<<<<<<< Updated upstream
@section('title', 'Blog Home')
=======
@section('title', 'Home - Travel Destinations')
>>>>>>> d4cbec4fa6f00dc19c082bc91edc0ee670e048f4

@section('content')
<!-- Hero Section dengan Background -->
<div class="hero-section">
    <div class="container">
        <div class="hero-content text-center text-white">
            <h1 class="display-4 fw-bold">Explore The World</h1>
            <p class="lead">Discover Amazing Destinations Around The Globe</p>
        </div>
<<<<<<< HEAD
    @endforeach
    <h3>
        Jumlah Postingan disini: {{ $totalPosts }}
    </h3>
=======
@section('title', 'Home')

@section('content')
<div class="home-background">
<div class="container mt-4">

    <!-- Info Pembuat seperti di foto -->
    <div class="creator-info mb-4 p-3 bg-light rounded d-flex justify-content-center align-items-center" style="height:100px;">
        <p class="mb-0">Halaman ini dibuat oleh 24010500001 - FAHMI HIDAYAT</p>
    </div>

    <!-- Grid Destinasi sederhana seperti di foto -->
    <div class="destinations-grid">
        <div class="row">
            <!-- Baris 1 -->
            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/acropolis.jpg') }}" alt="Acropolis, Yunani" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Acropolis</h6>
                    <p class="text-muted small mb-0">Yunani</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/shibuya.jpg') }}" alt="Shibuya, Jepang" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Shibuya</h6>
                    <p class="text-muted small mb-0">Jepang</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/cappadocia.webp') }}" alt="Cappadocia, Turki" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Cappadocia</h6>
                    <p class="text-muted small mb-0">Turki</p>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/giza.webp') }}" alt="Giza, Mesir" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Piramida Giza</h6>
                    <p class="text-muted small mb-0">Mesir</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/garuda.jpg') }}" alt="Garuda Wisnu Kencana, Bali" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Garuda Wisnu Kencana</h6>
                    <p class="text-muted small mb-0">Bali, Indonesia</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/huayana.jpg') }}" alt="Machu Picchu, Peru" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Machu Picchu</h6>
                    <p class="text-muted small mb-0">Peru</p>
                </div>
            </div>

            <!-- Baris 3 -->
            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/jumeirah.jpg') }}" alt="Burj Khalifa, Dubai" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Burj Khalifa</h6>
                    <p class="text-muted small mb-0">Dubai, UAE</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/newyork.jpg') }}" alt="New York, US" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">New York</h6>
                    <p class="text-muted small mb-0">Amerika Serikat</p>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="destination-item p-3 border rounded text-center">
                    <div class="destination-image mb-2">
                        <img src="{{ asset('images/niagara.jpg') }}" alt="Niagara, Kanada" class="img-fluid rounded">
                    </div>
                    <h6 class="mb-1">Air Terjun Niagara</h6>
                    <p class="text-muted small mb-0">Kanada</p>
=======
    </div>
</div>

<div class="container mt-5">
    <!-- Info Pembuat -->
    <div class="creator-info bg-light p-4 rounded mb-5 text-center">
        <p class="mb-0 fs-5">
            <strong>Halaman ini dibuat oleh:</strong><br>
            24010500001 - Fahmi Hidayat
        </p>
    </div>

    <!-- Grid Destinasi 3x3 untuk 9 foto -->
    <h2 class="text-center mb-4 fw-bold">Popular Destinations</h2>
    <div class="row g-4">
        <!-- Baris 1 -->
        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/acropolis.jpg') }}" class="destination-img" alt="Acropolis, Yunani">
                <div class="destination-info">
                    <h5>Acropolis</h5>
                    <p>Yunani</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/shibuya.jpg') }}" class="destination-img" alt="Shibuya, Jepang">
                <div class="destination-info">
                    <h5>Shibuya</h5>
                    <p>Jepang</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/cappadocia.jpg') }}" class="destination-img" alt="Cappadocia, Turki">
                <div class="destination-info">
                    <h5>Cappadocia</h5>
                    <p>Turki</p>
                </div>
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/giza.jpg') }}" class="destination-img" alt="Giza, Mesir">
                <div class="destination-info">
                    <h5>Piramida Giza</h5>
                    <p>Mesir</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/garuda-wisnu.jpg') }}" class="destination-img" alt="Garuda Wisnu Kencana, Bali">
                <div class="destination-info">
                    <h5>Garuda Wisnu Kencana</h5>
                    <p>Bali, Indonesia</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/machu-picchu.jpg') }}" class="destination-img" alt="Machu Picchu, Peru">
                <div class="destination-info">
                    <h5>Machu Picchu</h5>
                    <p>Peru</p>
                </div>
            </div>
        </div>

        <!-- Baris 3 -->
        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/burj-khalifa.jpg') }}" class="destination-img" alt="Burj Khalifa, Dubai">
                <div class="destination-info">
                    <h5>Burj Khalifa</h5>
                    <p>Dubai, UAE</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/newyork.jpg') }}" class="destination-img" alt="New York, US">
                <div class="destination-info">
                    <h5>New York</h5>
                    <p>Amerika Serikat</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/niagara.jpg') }}" class="destination-img" alt="Niagara, Kanada">
                <div class="destination-info">
                    <h5>Air Terjun Niagara</h5>
                    <p>Kanada</p>
>>>>>>> d4cbec4fa6f00dc19c082bc91edc0ee670e048f4
                    <small class="text-muted">(karangan anak harmada)</small>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
</div>
>>>>>>> Stashed changes
=======
>>>>>>> d4cbec4fa6f00dc19c082bc91edc0ee670e048f4
@endsection