@extends('layouts.masterlayout')

@section('title', 'Home')

@section('content')


<div class="container my-5">
    <h2 class="text-center text-white mb-4">Halaman ini dibuat oleh 24010500001 - FAHMI HIDAYAT</h2>
    <div class="row g-3">
        <!-- Baris Pertama -->
        <!-- Gambar kiri -->
        <div class="col-md-3 position-relative">
            <img src="{{ asset('images/acropolis.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Acropolis">
                <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:95.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Acropolis, Yunani</p>
            </div>
        </div>

        <!-- Gambar tengah -->
        <div class="col-md-6 position-relative">
            <img src="{{ asset('images/shibuya.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Shibuya">
            <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:97.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Shibuya, Jepang</p>
            </div>
        </div>

        <!-- Gambar kanan -->
        <div class="col-md-3 position-relative">
            <img src="{{ asset('images/cappadocia.webp') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Cappadocia">
                <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:95.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Cappadocia, mudi bale</p>
            </div>
        </div>
        <!-- Akhir Baris Pertama -->

        <!-- Baris Kedua -->
        <!-- Gambar kiri -->
        <div class="col-md-6 position-relative">
            <img src="{{ asset('images/giza.webp') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Giza">
            <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:97.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Giza, Lotim</p>
            </div>
        </div>

        <!-- Gambar tengah -->
        <div class="col-md-3 position-relative">
            <img src="{{ asset('images/garuda.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Garuda Wisnu Kencana">
            <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:95.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Garuda Wisnu Kencana, Bali</p>
            </div>
        </div>

        <!-- Gambar kanan -->
        <div class="col-md-3 position-relative">
            <img src="{{ asset('images/huayana.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Huayana">
            <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:95.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Huayana, Peru</p>
            </div>
        </div>
        <!-- Akhir Baris Kedua -->

        <!-- Baris Ketiga -->
        <!-- Gambar kiri -->
        <div class="col-md-3 position-relative">
            <img src="{{ asset('images/jumeirah.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Jumeira">
            <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:95.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Jumeira, Abu Dhabi</p>
            </div>
        </div>

        <!-- Gambar tengah -->
        <div class="col-md-6 position-relative">
            <img src="{{ asset('images/newyork.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Newyork">
                <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:97.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Newyork, US</p>
            </div>
        </div>

        <!-- Gambar kanan -->
        <div class="col-md-3 position-relative">
            <img src="{{ asset('images/niagara.jpg') }}" class="img-fluid w-100"
                style="border-radius: 7px; height: 200px; object-fit: cover;" alt="Niagara">
            <div class="position-absolute bottom-0 start-50 translate-middle-x"
             style="border-radius: 7px; width:95.5%; height: 110px; background: linear-gradient(to top, 
                    rgba(0,0,0,0.8) 0%, 
                    rgba(0,0,0,0.4) 50%, 
                    transparent 100%);"></div>
            <div class="position-absolute bottom-0 start-0 text-white p-3">
                <p class="mb-0">Niagara, Kanada</p>
            </div>
        </div>
        <!-- Akhir Baris Ketiga -->
    </div>
</div>

@endsection