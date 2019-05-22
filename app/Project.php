<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Mass assignable fields
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'user_id'
    ];


    public function path()
    {
        return '/project/' . $this->id;
    }
}
