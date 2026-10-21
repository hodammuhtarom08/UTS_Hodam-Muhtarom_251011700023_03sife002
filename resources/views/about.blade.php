@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card shadow-sm border-0">

                <div class="card-body p-5">

                    <h2 class="fw-bold mb-4">
                        Tentang Aplikasi
                    </h2>

                    <p>
                        Website ini merupakan project pembelajaran
                        Rekayasa Web menggunakan framework Laravel.
                    </p>

                    <p>
                        Aplikasi menggunakan Blade sebagai template
                        engine dan Bootstrap untuk membantu membuat
                        tampilan website yang responsif.
                    </p>

                    <hr>

                    <h5 class="fw-bold">
                        Teknologi yang digunakan
                    </h5>

                    <ul>
                        <li>Laravel</li>
                        <li>PHP</li>
                        <li>Blade</li>
                        <li>Bootstrap</li>
                        <li>MySQL</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection