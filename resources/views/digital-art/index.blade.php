@extends('layouts.app')

@section('title', 'Galeri')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="gallery-title">
            Galeri Lukisan Digital
        </h1>

        <p class="text-muted">
            Koleksi karya seni digital mahasiswa.
        </p>

    </div>


    <div class="row g-4">

        @foreach ($arts as $art)

            <div class="col-md-6">

                <div class="art-card">

                    <img
                        src="{{ asset('assets/images/' . $art->image) }}"
                        alt="{{ $art->title }}"
                        class="art-image"
                    >

                    <div class="art-body">

                        <h3 class="art-title">
                            {{ $art->title }}
                        </h3>

                        <div class="art-info">
                            <strong>Artist:</strong>
                            {{ $art->artist }}
                        </div>

                        <div class="art-info">
                            <strong>Resolution:</strong>
                            {{ $art->resolution }}
                        </div>

                        <div class="art-info mb-4">
                            <strong>Harga:</strong>
                            Rp {{ number_format($art->price, 0, ',', '.') }}
                        </div>

                        <div class="art-info text-muted" style="font-size: 14px;">
                            {{ Str::limit($art->description, 70) }}
                        </div>

                        <a
                            href="{{ route('digital-art.show', $art->id) }}"
                            class="btn btn-primary"
                        >
                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>


    {{-- PAGINATION --}}

    <div class="mt-5">

       {{ $arts->links('pagination::bootstrap-5') }}

    </div>

</div>

@endsection