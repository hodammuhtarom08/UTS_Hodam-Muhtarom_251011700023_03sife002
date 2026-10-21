@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container py-5">

    <div class="home-card mt-4">

        <h1 class="home-title">
            Selamat Datang
        </h1>

        <p class="lead mt-3">
            Selamat datang di website Project Laravel
            Program Studi Sistem Informasi Universitas Pamulang.
        </p>

        <p class="text-muted">
            Website ini merupakan project pembelajaran
            Rekayasa Web yang menampilkan profil mahasiswa
            dan koleksi karya seni digital.
        </p>

        <div class="mt-4">

            <a
                href="{{ route('profile') }}"
                class="btn btn-primary me-2"
            >
                Lihat Profile
            </a>

            <a
                href="{{ route('digital-art.index') }}"
                class="btn btn-outline-primary"
            >
                Lihat Galeri
            </a>

        </div>

    </div>

</div>

@endsection