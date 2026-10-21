@extends('layouts.app')

@section('title', $art->title)

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="detail-card">

                <div class="row g-0">

                    {{-- FOTO --}}
                    <div class="col-md-6">
                        <img
                            src="{{ asset('assets/images/' . $art->image) }}"
                            alt="{{ $art->title }}"
                            class="detail-image"
                        >
                    </div>

                    {{-- DETAIL --}}
                    <div class="col-md-6">

                        <div class="detail-body">

                            <h1 class="detail-title">
                                {{ $art->title }}
                            </h1>

                            <div class="detail-item">
                                <span class="detail-label">Artist</span>
                                {{ $art->artist }}
                            </div>

                            <div class="detail-item">
                                <span class="detail-label">Resolution</span>
                                {{ $art->resolution }}
                            </div>

                            <div class="detail-item">
                                <span class="detail-label">Software Used</span>
                                {{ $art->software_used }}
                            </div>

                            <div class="detail-item">
                                <span class="detail-label">Deskripsi</span>
                                <p class="mb-0">{{ $art->description }}</p>
                            </div>

                            <div class="detail-item mb-4">
                                <span class="detail-label">Harga</span>
                                <span class="detail-price">
                                    Rp {{ number_format($art->price, 0, ',', '.') }}
                                </span>
                            </div>

                            <a href="{{ route('digital-art.index') }}" class="btn btn-secondary">
                                &larr; Kembali ke Galeri
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection