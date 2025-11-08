@extends('layouts.masterlayout')

@section('title', 'About Us')

@section('content')
<div class="about-hero">
    <div class="container">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bold">About Our Team</h1>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Info Anggota Tim -->
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Team Members</h4>
                </div>
                <div class="card-body">

                    <!-- Anggota 1 -->
                    <div class="team-member p-3 mb-3 border rounded d-flex align-items-center">
                        <img src="{{ asset('images/t1.jpg') }}" alt="Veni Adelia" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                        <div>
                            <h5>24010600010 - VENI ADELIA</h5>
                            <span class="badge bg-success">GENAP</span>
                        </div>
                    </div>

                    <!-- Anggota 2 -->
                    <div class="team-member p-3 border rounded d-flex align-items-center">
                        <img src="{{ asset('images/t2.jpg') }}" alt="Fahmi Hidayat" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                        <div>
                            <h5>24010500001 - FAHMI HIDAYAT</h5>
                            <span class="badge bg-info">GANJIL</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Info Pembuat -->
            <div class="card mt-4 border-0 bg-light">
                <div class="card-body text-center">
                    <p class="mb-0 fs-5">
                        <strong>Halaman ini dibuat oleh:</strong><br>
                        24010600010 Veni Adelia
                    </p>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="/home" class="btn btn-primary btn-lg">← Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.about-hero {
    background-image: url('{{ asset("images/t1.jpg") }}');
    background-size: cover;
    background-position: center;
    padding: 4rem 0;
    color: white;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
}

.team-member h5 {
    font-weight: 600;
}

.badge.bg-success {
    background-color: #198754 !important;
}

.badge.bg-info {
    background-color: #0dcaf0 !important;
}

.card.bg-light {
    background-color: #f8f9fa !important;
}

.team-member img.rounded-circle {
    display: inline-block;
    vertical-align: middle;
}

.d-flex.align-items-center {
    gap: 15px;
}
</style>
@endpush
