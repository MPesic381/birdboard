<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Project;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'project_id' => Project::inRandomOrder()->first()
    ];
});