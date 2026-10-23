<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitalArtSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            [
                'title' => 'Sunset Dream',
                'artist' => 'Andi Pratama',
                'resolution' => '3840 x 2160 px',
                'price' => 750000,
                'image' => 'art1.jpg',
                'software_used' => 'Adobe Photoshop',
                'description' => 'Pemandangan senja di tepi dermaga dengan gradasi warna oranye dan ungu yang lembut, menghadirkan suasana tenang di akhir hari.',
            ],

            [
                'title' => 'Fantasy Forest',
                'artist' => 'Budi Santoso',
                'resolution' => '3000 x 2000 px',
                'price' => 850000,
                'image' => 'art2.jpg',
                'software_used' => 'Procreate',
                'description' => 'Hutan magis dengan cahaya partikel biru dan ungu yang melayang di antara pepohonan, terinspirasi dari dunia fantasi.',
            ],

            [
                'title' => 'Cyber City',
                'artist' => 'Citra Lestari',
                'resolution' => '4000 x 2500 px',
                'price' => 1200000,
                'image' => 'art3.jpg',
                'software_used' => 'Adobe Illustrator',
                'description' => 'Jalanan kota futuristik dipenuhi lampu neon warna-warni, menggambarkan kehidupan malam di kota cyberpunk.',
            ],

            [
                'title' => 'Ocean Blue',
                'artist' => 'Dimas Saputra',
                'resolution' => '3840 x 2160 px',
                'price' => 650000,
                'image' => 'art4.jpg',
                'software_used' => 'Krita',
                'description' => 'Pemandangan bawah laut dengan gradasi biru yang dalam, menangkap cahaya matahari yang menembus permukaan air.',
            ],

            [
                'title' => 'Digital Flower',
                'artist' => 'Eka Wulandari',
                'resolution' => '3000 x 3000 px',
                'price' => 550000,
                'image' => 'art5.jpg',
                'software_used' => 'Procreate',
                'description' => 'Bunga digital dengan detail kelopak transparan dan pencahayaan lembut, menonjolkan tekstur halus karya seni botani modern.',
            ],

            [
                'title' => 'Mountain View',
                'artist' => 'Fajar Ramadhan',
                'resolution' => '4000 x 3000 px',
                'price' => 900000,
                'image' => 'mountain-view.jpg',
                'software_used' => 'Adobe Photoshop',
                'description' => 'Pemandangan pegunungan megah dengan kabut tipis menyelimuti puncak, dibuat dengan teknik digital painting realistis.',
            ],

            [
                'title' => 'Space Journey',
                'artist' => 'Gilang Akbar',
                'resolution' => '3840 x 2160 px',
                'price' => 1500000,
                'image' => 'art7.jpg',
                'software_used' => 'Blender',
                'description' => 'Ilustrasi perjalanan luar angkasa dengan karakter astronot dan stasiun futuristik, dirender penuh warna neon biru-ungu.',
            ],

            [
                'title' => 'Neon Portrait',
                'artist' => 'Hana Putri',
                'resolution' => '3000 x 4000 px',
                'price' => 1100000,
                'image' => 'art8.jpg',
                'software_used' => 'Adobe Photoshop',
                'description' => 'Potret wajah dengan efek pencahayaan neon berwarna-warni, memadukan gaya digital art abstrak dan realistis.',
            ],

            [
                'title' => 'Abstract Mind',
                'artist' => 'Irfan Maulana',
                'resolution' => '3500 x 2500 px',
                'price' => 700000,
                'image' => 'art9.jpg',
                'software_used' => 'CorelDRAW',
                'description' => 'Karya abstrak yang menggambarkan pikiran manusia melalui tekstur pecahan warna dan bentuk wajah yang terfragmentasi.',
            ],

            [
                'title' => 'Future World',
                'artist' => 'Joko Wijaya',
                'resolution' => '4096 x 2160 px',
                'price' => 1800000,
                'image' => 'art10.jpg',
                'software_used' => 'Adobe Illustrator',
                'description' => 'Visualisasi dunia masa depan dengan pulau-pulau melayang dan arsitektur futuristik, dipadukan dengan nuansa fantasi sci-fi.',
            ],

        ];

        $now = now();

        DB::table('digital_art')->truncate();
        DB::table('digital_art')->insert(
            array_map(fn ($row) => $row + ['created_at' => $now, 'updated_at' => $now], $data)
        );
    }
}