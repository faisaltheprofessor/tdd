<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
    }

    public function store()
    {
        $attributes = request()->validate(['title' => 'string|required', 'description' => 'required|string']);
        Project::create($attributes);
    }
}
