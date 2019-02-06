<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
    // of (alles toestaan):
    // protected $guarded = []; (lege array)

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {

        // Eerste methode:
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);

        // Tweede methode:
        $this->tasks()->create($task);
    }
}
