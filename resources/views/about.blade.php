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
                    <div class="team-member p-3 mb-3 border rounded">
                        <h5>24010600010 - VENI ADELIA </h5>
                        <span class="badge bg-success">GENAP</span>
                    </div>
                    <div class="team-member p-3 border rounded">
                        <h5>24010500001 - FAHMI HIDAYAT</h5>
                        <span class="badge bg-info">GANJIL</span>
                    </div>
                </div>
            </div>

            <!-- Info Pembuat -->
            <div class="card mt-4 border-0 bg-light">
                <div class="card-body text-center">
                    <p class="mb-0 fs-5">
                        <strong>Halaman ini dibuat oleh:</strong><br>
                        2301010138 - L. M. ARANTA THIAR ELKANTA RIZKY ILLAHI
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