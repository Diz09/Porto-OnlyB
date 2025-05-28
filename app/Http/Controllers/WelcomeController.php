<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show() 
    {
        return view('content.welcome', [
            'authorImage' => 'author.png',
            'name' => 'Dimas',
            'highlight' => 'Izzulhaq Zain',
            'sectionTitle' => 'About',
            'description1' => 'Seorang Mahasiswa TI dari Politeknik Negeri Jember, berfokus pada pengembangan website terutama dari sisi server',
            'description2' => '',
        ]);
    }
}
