<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function show() 
    {
        return view('content.testimonial',
        [
            'title' => 'My',
            'highlight' => 'Clients',
            'background' => 'Speech',
            'description' => 'Berikut beberapa kesan dari rekan, klien, dan pembimbing selama saya mengerjakan berbagai proyek TI.',

            'testimonials' => [
                [
                    'image' => 'tm.jpg',
                    'name' => 'Ardi Pratama',
                    'position' => 'Dosen Pembimbing, Universitas TI',
                    'quote' => 'Dimas menunjukkan dedikasi dan semangat belajar tinggi dalam setiap proyek yang ia kerjakan.'
                ],
                [
                    'image' => 'tm-2.jpg',
                    'name' => 'Rina Kusuma',
                    'position' => 'Manajer IT, PT. Solusi Cerdas',
                    'quote' => 'Kerja sama dengan Dimas sangat menyenangkan. Ia cepat belajar dan mampu menyelesaikan tugas tepat waktu.'
                ],
                [
                    'image' => 'tm.jpg',
                    'name' => 'Yoga Prasetyo',
                    'position' => 'Ketua UKM TI',
                    'quote' => 'Selama menjadi bagian dari UKM, Dimas aktif membantu kegiatan pelatihan dan membangun website internal.'
                ],
                [
                    'image' => 'tm-2.jpg',
                    'name' => 'Nadia Rahma',
                    'position' => 'Teman Kolaborasi Freelance',
                    'quote' => 'Kami pernah membuat aplikasi kasir berbasis Laravel bersama, dan hasilnya sangat memuaskan.'
                ],
            ]
        ]);
    }
}
