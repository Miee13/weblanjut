@extends('layouts.masterlayout')

@section('title', 'Home')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="hero">
    <div class="container">
        <P>Halaman INI DIBUAT OLEH FAHMI HIDAYAT 24010500001 - VENI ADELIA 24010600010 </P>
        
    </div>
</section>

{{-- ===== SECTION DATA (ASLI DARI KAMU) ===== --}}
<div class="container my-5">
    {{-- === BAGIAN DATA YANG SUDAH ADA DI FILE KAMU === --}}
    {{-- Salin isi data asli kamu di sini, contoh seperti di bawah ini --}}
    <h2 class="text-center mb-4">Popular Destinations</h2>
    <div class="row g-4">

        {{-- Card 1 --}}
        <div class="col-md-4">
            <div class="card destination-card">
                <img src="{{ asset('images/shibuya.jpg') }}" class="card-img-top" alt="Bali">
                <div class="card-body text-center">
                    <h5 class="card-title">SHIBUYA</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="col-md-4">
            <div class="card destination-card">
                <img src="{{ asset('images/newyork.jpg') }}" class="card-img-top" alt="Lombok">
                <div class="card-body text-center">
                    <h5 class="card-title">NEWYOYRK</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="col-md-4">
            <div class="card destination-card">
                <img src="{{ asset('images/niagara.jpg') }}" class="card-img-top" alt="Raja Ampat">
                <div class="card-body text-center">
                    <h5 class="card-title">NIAGARA</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
