@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="contact-wrapper">

                <div class="contact-hero">
                    <h1>Hubungi Kami</h1>
                    <p class="mb-0">
                        Galeri Lukisan Digital &mdash; Program Studi Sistem Informasi
                    </p>
                </div>

                <div class="p-5">

                    <div class="row g-4 mb-4">

                        <div class="col-md-4">
                            <div class="contact-info-box">
                                <div class="contact-icon">&#128100;</div>
                                <div class="contact-label">Penanggung Jawab</div>
                                <div>{{ $mahasiswa['nama'] ?? 'Hodam Muhtarom' }}</div>
                                <small class="text-muted">NIM {{ $mahasiswa['nim'] ?? '251011700023' }}</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-info-box">
                                <div class="contact-icon">&#9993;</div>
                                <div class="contact-label">Email</div>
                                <div>hodammuhtarom@gmail.com</div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-info-box">
                                <div class="contact-icon">&#127970;</div>
                                <div class="contact-label">Universitas</div>
                                <div>{{ $mahasiswa['kampus'] ?? 'Universitas Pamulang' }}</div>
                                <small class="text-muted">{{ $mahasiswa['prodi'] ?? 'Sistem Informasi' }}</small>
                            </div>
                        </div>

                    </div>

                    <hr class="my-4">

                    <div class="text-center">

                        <p class="text-muted mb-3">Ikuti kami di media sosial</p>

                        <a href="#" class="social-icon" title="Instagram">IG</a>
                        <a href="#" class="social-icon" title="Facebook">FB</a>
                        <a href="#" class="social-icon" title="WhatsApp">WA</a>

                        <div class="mt-4">
                            <a href="{{ route('home') }}" class="btn btn-primary">
                                Kembali ke Home
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection