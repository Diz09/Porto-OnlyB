<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function show() 
    {
        return view('content.work', 
        [
            'title' => 'My',
            'highlight' => 'Works',
            'background' => 'Portfolio',
            'description' => 'Berikut adalah beberapa proyek yang pernah saya kerjakan, baik dalam kegiatan kampus, freelance, maupun proyek pribadi.',

            'filters' => ['Web', 'Mobile', 'Design', 'Laravel'],

            'works' => [
                [
                    'image' => '1.jpg',
                    'title' => 'Sistem Inventory Barang',
                    'description' => 'Web-based inventory system using Laravel.',
                    'tags' => ['Web', 'Laravel']
                ],
                [
                    'image' => '2.jpg',
                    'title' => 'Aplikasi Absensi Siswa',
                    'description' => 'Aplikasi Android untuk pencatatan presensi siswa.',
                    'tags' => ['Mobile']
                ],
                [
                    'image' => '3.jpg',
                    'title' => 'Website Portfolio',
                    'description' => 'Responsive portfolio dengan HTML, CSS, JS.',
                    'tags' => ['Web', 'Design']
                ],
                [
                    'image' => '4.jpg',
                    'title' => 'Redesign UI Aplikasi Akademik',
                    'description' => 'UI/UX Design untuk aplikasi akademik kampus.',
                    'tags' => ['Design']
                ],
                [
                    'image' => '5.jpg',
                    'title' => 'Landing Page Produk',
                    'description' => 'Halaman pemasaran produk digital.',
                    'tags' => ['Web']
                ],
            ]
        ]);
    }
}
