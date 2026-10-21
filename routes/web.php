<?php

use App\Http\Controllers\DigitalArtController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    $mahasiswa = [
        'nama'   => 'Hodam Muhtarom',
        'nim'    => '251011700023',
        'prodi'  => 'Sistem Informasi',
        'kampus' => 'Universitas Pamulang',
        'status' => 'Aktif',
    ];

    return view('profile', compact('mahasiswa'));
})->name('profile');

Route::get('/galeri', [DigitalArtController::class, 'index'])
    ->name('digital-art.index');

Route::get('/galeri/{id}', [DigitalArtController::class, 'show'])
    ->name('digital-art.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');