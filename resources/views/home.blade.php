@extends('layouts.masterlayout')

@section('title', 'Home - Travel Destinations')

@section('content')
<!-- Hero Section dengan Background -->
<div class="hero-section">
    <div class="container">
        <div class="hero-content text-center text-white">
            <h1 class="display-4 fw-bold">Explore The World</h1>
            <p class="lead">Discover Amazing Destinations Around The Globe</p>
        </div>
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
                    <small class="text-muted">(karangan anak harmada)</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection