<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function show() 
    {
        return view('content.resume', 
        [
            'title' => 'My',
            'highlight' => 'History',
            'background' => 'Resume',
            'description' => 'Saya adalah mahasiswa aktif jurusan Teknologi Informasi semester 6, berikut riwayat pendidikan dan pengalaman saya.',

            'education' => [
                [
                    'institution' => 'SMA Negeri 1 Kota Tegal',
                    'year' => '2017 - 2020',
                    'description' => 'Jurusan IPA. Aktif di ekstrakurikuler komputer dan robotika.'
                ],
                [
                    'institution' => 'Universitas Contoh - Teknologi Informasi',
                    'year' => '2020 - Sekarang',
                    'description' => 'Mahasiswa semester 6. Fokus pada pengembangan web dan mobile application.'
                ],
            ],

            'experience' => [
                [
                    'place' => 'Proyek UKM - Sistem Inventaris',
                    'year' => '2022',
                    'description' => 'Membuat sistem inventaris berbasis web menggunakan Laravel.'
                ],
                [
                    'place' => 'Magang di Dinas Kominfo',
                    'year' => '2023',
                    'description' => 'Membantu dalam pengelolaan server dan pembuatan aplikasi internal.'
                ],
                [
                    'place' => 'Asisten Praktikum Pemrograman Web',
                    'year' => '2023 - sekarang',
                    'description' => 'Mendampingi mahasiswa lain dalam belajar HTML, CSS, dan Laravel.'
                ],
            ]
        ]);
    }
}
