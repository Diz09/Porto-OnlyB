<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Author;
use App\Models\Skill;

class AboutController extends Controller
{
    public function show() 
    {
        return view('content.about', [
            'title' => About::value('title'),
            'subtitle' => About::value('subtitle'),
            'sectionLabel' => About::value('section_label'),
            'description' => About::value('description'),
            'author' => Author::first(), // ambil data tunggal
            'skills' => Skill::all(),   // ambil semua skills
        ]);
    }
}
