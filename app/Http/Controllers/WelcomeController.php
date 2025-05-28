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
            'description1' => 'A product designer from England...',
            'description2' => 'Lorem ipsum dolor sit amet...',
        ]);
    }
}
