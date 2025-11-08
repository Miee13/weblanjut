@extends('layouts.masterlayout')

@section('title', 'Home')

@section('content')
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
                    <small class="text-muted">(karangan anak harmada)</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection