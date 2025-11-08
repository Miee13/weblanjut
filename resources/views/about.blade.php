@extends('layouts.masterlayout')

@section('title', 'About Us')

@section('content')
<div class="about-hero">
    <div class="container text-center text-white">
        <h1 class="display-5 fw-bold">Halaman ini dibuat oleh:</h1>
        <h2 class="fw-bold mt-2">24010600010 - VENI ADELIA (GENAP)</h2>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center g-4">

        <!-- Kartu 1 -->
        <div class="col-md-5">
            <div class="member-card shadow-lg text-center p-4">
                <img src="{{ asset('images/t1.jpg') }}" alt="Veni Adelia" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h4 class="fw-bold">VENI ADELIA</h4>
                <p class="text-muted mb-1">24010600010</p>
                <span class="badge bg-success mb-3">GENAP</span>
                <div class="bio-box p-3 rounded">
                    <strong>BIO</strong>
                    <p class="mb-0">Front-end designer & Laravel enthusiast 💻✨</p>
                </div>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="col-md-5">
            <div class="member-card shadow-lg text-center p-4">
                <img src="{{ asset('images/t2.jpg') }}" alt="Fahmi Hidayat" class="rounded-circle mb-3" width="150" height="150" style="object-fit: cover;">
                <h4 class="fw-bold">FAHMI HIDAYAT</h4>
                <p class="text-muted mb-1">24010500001</p>
                <span class="badge bg-info mb-3">GANJIL</span>
                <div class="bio-box p-3 rounded">
                    <strong>BIO</strong>
                    <p class="mb-0">Back-end developer & database enjoyer ⚙️</p>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">
        <a href="/home" class="btn btn-primary btn-lg">← Back to Home</a>
    </div>
</div>
@endsection

@push('styles')
<style>
.about-hero {
    background: url('{{ asset("images/bckground.webp") }}') no-repeat center center;
    background-size: cover;
    padding: 4rem 0;
    color: white;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
}

.member-card {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease-in-out;
}
.member-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
}

.bio-box {
    background: rgba(255,255,255,0.2);
    color: #fff;
}

.badge.bg-success { background-color: #28a745 !important; }
.badge.bg-info { background-color: #0dcaf0 !important; }

body {
    background: linear-gradient(to right, #1a2980, #26d0ce);
}
</style>
@endpush
