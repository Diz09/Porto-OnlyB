<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show() 
    {
        return view('content.project', 
        [
            'title' => 'My',
            'highlight' => 'Projects',
            'background' => 'Project',
            'description' => 'The following are projects that I have worked on during college.',

            'filters' => ['Web', 'Mobile', 'AI', 'Desktop'],

            'projects' => [
                [
                    'image' => 'a1.png',
                    'title' => 'STAYAWAKE',
                    'description' => 'IoT integration system with AI which is useful as an early warning system for 4-wheeled drivers when they are detected as drowsy.',
                    'tags' => ['Mobile', 'AI']
                ],
                [
                    'image' => 'a2.png',
                    'title' => 'EDUPRESENCE',
                    'description' => 'Teacher attendance application.',
                    'tags' => ['Web', 'Mobile', 'AI']
                ],
                [
                    'image' => 'a3.png',
                    'title' => 'VIOSCAKE',
                    'description' => 'Cake shop order transaction management application system.',
                    'tags' => ['Mobile', 'Web']
                ],
                [
                    'image' => 'a4.png',
                    'title' => 'SI OPET',
                    'description' => 'Pet gramming shop transaction management application.',
                    'tags' => ['Desktop']
                ],
                [
                    'image' => 'a5.png',
                    'title' => 'TAILOR TS',
                    'description' => 'Sewing business transaction recording system.',
                    'tags' => ['Desktop']
                ],
            ]
        ]);
    }
}
