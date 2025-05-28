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
            'description1' => 'An IT student from Jember State Polytechnic, focusing on website development, especially from the server side.',
            'description2' => '',
        ]);
    }
}
