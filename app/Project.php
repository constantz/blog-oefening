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
}
