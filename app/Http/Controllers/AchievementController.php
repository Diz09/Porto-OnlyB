<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Achievement;

class AchievementController extends Controller
{
    public function show() 
    {
        return view('content.achievement', [
            'title' => 'My',
            'highlight' => 'Achievements',
            'background' => 'Merits',
            'description' => 'The following are the achievements that I have obtained as a result of my hard work.',
            'achievements' => Achievement::all(),
        ]);
    }
}
