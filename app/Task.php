<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Mass assignable fields
     *
     * @var array
     */
    protected $fillable = [
        'body', 'completed'
    ];

    /**
     * The relationships that should be touched on save.
     *
     * @var array
     */
    protected $touches = [
        'project'
    ];

    /**
     * Relationship with Project model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class)->latest('updated_at');
    }

    public function path()
    {
        return "/projects/{$this->project->id}/tasks/{$this->id}";
    }
}
