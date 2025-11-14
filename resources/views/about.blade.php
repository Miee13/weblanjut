@extends('layouts.masterlayout')

@section('title', 'About Us')

@section('content')

<div class="about-hero d-flex align-items-center justify-content-center" style="min-height: 10vh;">
    <div class="container text-center text-white">
        <h2 class="fw-bold mb-0">Halaman ini dibuat oleh: 24010600010 - VENI ADELIA (GENAP)</h2>
    </div>
</div>

<div class="container my-5">
    <div class="row align-item-center justify-content-center g-4">

        <!-- Kartu 1 -->
        <div class="col-md-6">
            <div class="member-card text-center p-4" style="
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(15px);
                border-radius: 15px;
                height: 450px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);">
                <img src="{{ asset('images/t1.jpg') }}" alt="Veni Adelia" class="rounded-circle mb-3" width="150"
                    height="150" style="object-fit: cover;">
                <h4 class="fw-bold text-white">VENI ADELIA</h4>
                <p class="text-white o[acity-75 mb-3">24010600010</p>

                <div class="p-3 rounded" style="
                    background: rgba(255, 255, 255, 0.05);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 8px;
                    backdrop-filter: blur(5px);">
                    <div class="text-start">
                        <p class="mb-2" style="color: #ffffffff;">BIO</p>
                        <p class="mb-2" style="color: #ffffffff;">Front-end designer & Laravel enthusiast 💻✨</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="col-md-6">
            <div class="member-card text-center p-4" style="
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(15px);
                border-radius: 15px;
                height: 450px;
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);">
                <img src="{{ asset('images/t2.jpg') }}" alt="Fahmi Hidayat" class="rounded-circle mb-3" width="150"
                    height="150" style="object-fit: cover;">
                <h4 class="fw-bold text-white">FAHMI HIDAYAT</h4>
                <p class="text-white opacity-75 mb-3">24010500001</p>


                <div class="p-3 rounded" style="
                    background: rgba(255, 255, 255, 0.05);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 8px;
                    backdrop-filter: blur(5px);">
                    <div class="text-start">
                        <p class="mb-2" style="color: #ffffffff;">BIO</p>
                        <p class="mb-2" style="color: #ffffffff;">Back-end developer & database enjoyer ⚙️</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection