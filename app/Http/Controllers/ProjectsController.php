<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
        $projects = \App\Project::all();
        
        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function show(Project $project) {

    // bovenstaande regel is gelijk aan de 2 regels hieronder 

    // public function show($id) {

        // $project = Project::findOrfail($id);


        return view('projects.show', compact('project'));

    }

    public function edit(Project $project) {
    
        return view('projects.edit', compact('project'));

    }

    public function update(Project $project) {

        $project->update(request(['title', 'description']));

        // of:
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');

    }

    public function destroy(Project $project) {

        $project->delete();

        return redirect('/projects');

    }

    public function store() {

        // Eenvoudige validatie:
        // request()->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        // ]);

        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
        ]);

        // Mass assignment voorbeeld:
        // Project::create(request()->all());

        Project::create($attributes);

        // of: (voordat $attributes variabele was geïntroduceerd)
        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

       

        // Bovenstaande 4 regels gelijk aan de 4 hieronder

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        return redirect('/projects');
    
    }
}
