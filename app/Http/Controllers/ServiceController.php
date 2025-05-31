<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    public function show() 
    {
        return view('content.service', [
            'title' => 'My',
            'subtitle' => 'Service',
            'backgroundTitle' => 'Service',
            'description' => 'This is what I got during my time in the campus environment and this is what I can offer about myself.',
            'services' => Service::all()
        ]);
    }
}
