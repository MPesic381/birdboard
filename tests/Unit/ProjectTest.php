<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function has_a_path()
    {
        $project = factory('App\Project')->create();

        $this->assertEquals('/projects/' . $project->id, $project->path());
    }

    /** @test */
    public function belongs_to_an_user()
    {
        $project = factory('App\Project')->create();

        $this->assertInstanceOf('App\User', $project->user);
    }

    /** @test */
    public function has_tasks()
    {
        $project = factory('App\Project')->create();

        $task = $project->tasks()->create(['body' => $this->faker->sentence()]);

        $this->assertTrue($project->tasks->contains($task));
    }
}
