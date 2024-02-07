<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', ['projects' => Project::where('owner_id', auth()->id())->get()]);
    }

    public function show(Project $project)
    {
        if(auth()->user()->isNot($project->owner)) {
            abort(403);
        }

        return view('projects.show', ['project' => $project]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate(['title' => 'string|required', 'description' => 'required|string']);
        $attributes['owner_id'] = auth()->id();
        Project::create($attributes);
        return redirect('/projects');
    }
}
