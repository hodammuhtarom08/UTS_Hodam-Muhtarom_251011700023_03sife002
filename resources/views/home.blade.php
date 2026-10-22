@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="hero-section">

    <div class="hero-icon"></div>

    <p class="hero-eyebrow">Welcome To</p>

    <h1 class="hero-title">
        Galeri Lukisan<br>Digital
    </h1>

    <div class="hero-meta">
        {{ $mahasiswa['nim'] ?? '251011700023' }}<br>
        hodammuhtarom@gmail.com<br>
        Prodi Sistem Informasi<br>
        HODAM MUHTAROM
    </div>

</div>

<div class="container py-5">

    <h2 class="home-section-title text-center">
        Koleksi Terbaru
    </h2>

    <div class="row g-4">

        @foreach ($arts as $art)

            <div class="col-md-6 col-lg-3">

                <div class="art-card">

                    <img
                        src="{{ asset('assets/images/' . $art->image) }}"
                        alt="{{ $art->title }}"
                        class="art-image"
                    >

                    <div class="art-body">

                        <h3 class="art-title" style="font-size: 18px;">
                            {{ $art->title }}
                        </h3>

                        <div class="art-info">
                            <strong>Artist:</strong> {{ $art->artist }}
                        </div>

                        <div class="art-info mb-3">
                            <strong>Harga:</strong>
                            Rp {{ number_format($art->price, 0, ',', '.') }}
                        </div>

                        <a
                            href="{{ route('digital-art.show', $art->id) }}"
                            class="btn btn-primary btn-sm"
                        >
                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    <div class="text-center mt-5">
        <a href="{{ route('digital-art.index') }}" class="btn btn-outline-primary px-4">
            Lihat Semua Galeri
        </a>
    </div>

</div>

@endsection