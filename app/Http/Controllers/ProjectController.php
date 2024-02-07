<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
    }

    public function show(Project $project)
    {
        return view('project.show', ['project' => $project]);
    }

    public function store()
    {
        $attributes = request()->validate(['title' => 'string|required', 'description' => 'required|string']);
        $attributes['owner_id'] = auth()->id();
        Project::create($attributes);
    }
}
