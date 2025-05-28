<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show() 
    {
        return view('content.service', [
            'title' => 'My',
            'subtitle' => 'Service',
            'backgroundTitle' => 'Service',
            'description' => 'This is what I got during my time in the campus environment and this is what I can offer about myself.',
            'services' => [
                [
                    'icon' => 'icon-lightbulb',
                    'title' => "Problem\nSolving",
                    'description' => 'Ability to analyze complex problems and find logical and effective solutions based on technology.'
                ],
                [
                    'icon' => 'icon-mobile',
                    'title' => "Web and Mobile\nDevelopment",
                    'description' => 'Experienced in developing web and mobile applications using HTML, JavaScript, PHP, Css, Flutter, etc'
                ],
                [
                    'icon' => 'icon-profile-male',
                    'title' => "Team\nCollaboration",
                    'description' => 'Accustomed to working in agile teams using Git, Trello, and Scrum methodologies for project management.'
                ],
                [
                    'icon' => 'icon-heart',
                    'title' => "Fast\nLearner",
                    'description' => 'Easily adapting to new technologies, and quickly grasping new concepts in software development.'
                ],
                [
                    'icon' => 'icon-heart',
                    'title' => "Blackbox\nTesting",
                    'description' => 'Able to test software from the user side to ensure functionality runs as expected.'
                ],
                [
                    'icon' => 'icon-hotairballoon',
                    'title' => "Project\nLaunch",
                    'description' => 'Accustomed to completing projects to the final stage, including documentation, presentation, and deployment to the server'
                ],
            ]
        ]);
    }
}
