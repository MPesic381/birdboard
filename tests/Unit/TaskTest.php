<?php

namespace Tests\Unit;

use App\Project;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belongs_to_a_project()
    {
        $task = factory('App\Task')->create([
            'project_id' => factory('App\Project')
        ]);

        $this->assertInstanceOf(Project::class, $task->project);
    }

    /** @test */
    public function has_a_path()
    {
        $this->signIn();

        $task = factory('App\Task')->create();

        $this->assertEquals('/projects/' . $task->project->id . '/tasks/' . $task->id, $task->path());
    }
}
