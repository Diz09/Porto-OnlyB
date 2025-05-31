<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Education;
use App\Models\Experience;

class ResumeController extends Controller
{
    public function show() 
    {
        return view('content.resume', 
        [
            'title' => 'My',
            'highlight' => 'History',
            'background' => 'Resume',
            'description' => 'This is my educational history and experience so far',
            'education' => Education::all(),
            'experience' => Experience::all(),
        ]);
    }
}
