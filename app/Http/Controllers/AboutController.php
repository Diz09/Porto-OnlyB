<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show() 
    {
        return view('content.about', [
            'title' => 'About',
            'subtitle' => 'me',
            'sectionLabel' => 'Name',
            'description' => 'I am a 6th semester student at a polytechnic campus, so I have worked on various different projects in each semester.',
            'author' => [
                'image' => 'author-02.png',
                'dob' => 'December 14, 2003',
                'languages' => 'Indonesia, English',
                'expertise' => 'Backend Web-Developmen',
                'freelance' => 'Available',
                'bio' => 'I am a student who is passionate about continuing to develop myself.',
                'campus' => 'Politeknik Negeri Jember',
                'dsp' => 'Information Technology',
                'generation' => 'I am a student who is passionate about continuing to develop myself.',
            ],
            'skills' => [
                ['name' => 'Backend Web', 'level' => '88%'],
                ['name' => 'Frontend Web', 'level' => '78%'],
                ['name' => 'PHP', 'level' => '85%'],
                ['name' => 'HTML5', 'level' => '85%'],
                ['name' => 'Python', 'level' => '75%'],
                ['name' => 'Flutter', 'level' => '73%'],
                ['name' => 'MySql', 'level' => '72%'],
                ['name' => 'Css', 'level' => '68%'],
                ['name' => 'Backend-Frontend Mobile', 'level' => '68%'],
                ['name' => 'Blackbox Testing', 'level' => '70%'],
                ['name' => 'JavaScript', 'level' => '70%'],
            ]
        ]);
    }
}
