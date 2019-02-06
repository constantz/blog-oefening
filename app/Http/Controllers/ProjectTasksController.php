<?php

namespace App\Http\Controllers;
use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project) {

        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);
        // Bovenstaande 4 regels zijn prima, maar het kan natuurlijk mooier:
        // (moet je wel de methode addTask maken in Project)
        
        //but first backend validation:
        $attributes = request()->validate(['description' => 'required']);

        // mooiere methode:
        $project->addTask($attributes);

        return back();

    }

    public function update(Task $task) {
    
        $task->update([
            'completed' => request()->has('completed')
        ]);
        // redirect back to last page
        return back();
    }
}
