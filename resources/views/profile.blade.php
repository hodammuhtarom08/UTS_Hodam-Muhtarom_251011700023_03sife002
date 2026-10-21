@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="profile-card">

                <div class="profile-header">

                    <img
                        src="{{ asset('assets/images/profile.jpg') }}"
                        alt="Foto Mahasiswa"
                        class="profile-photo"
                    >

                    <div class="profile-name">
                        {{ $mahasiswa['nama'] }}
                    </div>

                    <div class="profile-role">
                        Mahasiswa
                    </div>

                </div>


                <div class="profile-body text-center">

                    <h4 class="fw-bold mb-4">
                        Data Mahasiswa
                    </h4>

                    <div class="row justify-content-center">
                        <div class="col-md-8">

                            <div class="profile-item">
                                <span class="profile-label">Nama</span>
                                {{ $mahasiswa['nama'] }}
                            </div>

                            <div class="profile-item">
                                <span class="profile-label">NIM</span>
                                {{ $mahasiswa['nim'] }}
                            </div>

                            <div class="profile-item">
                                <span class="profile-label">Program Studi</span>
                                {{ $mahasiswa['prodi'] }}
                            </div>

                            <div class="profile-item">
                                <span class="profile-label">Universitas</span>
                                {{ $mahasiswa['kampus'] }}
                            </div>

                            <div class="profile-item">
                                <span class="profile-label">Status</span>
                                <span class="badge bg-success">
                                    {{ $mahasiswa['status'] }}
                                </span>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection