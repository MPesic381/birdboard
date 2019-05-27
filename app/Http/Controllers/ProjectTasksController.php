<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Project                  $project
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Project $project, Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        if (auth()->user()->isNot($project->user)) {
            abort(403);
        }

        $project->tasks()->create($request->all());

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Project                  $project
     * @param Task                     $task
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function update(Project $project, Task $task, Request $request)
    {
        $task->update([
            'body' => $request->body,
            'completed' => $request->has('completed')
        ]);

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
