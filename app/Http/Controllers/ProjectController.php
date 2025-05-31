<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Tag;

class ProjectController extends Controller
{
     public function show() 
    {
        $projects = Project::with('tags')->get();
        $filters = Tag::pluck('name')->toArray();

        return view('content.project', [
            'title' => 'My',
            'highlight' => 'Projects',
            'background' => 'Project',
            'description' => 'The following are projects that I have worked on during college.',
            'filters' => $filters,
            'projects' => $projects,
        ]);
    }
}
