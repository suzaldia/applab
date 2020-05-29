<?php

namespace App\Http\Controllers\dashboard;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTask = Task::create($request->all());
        return response()->json([
            'data' => new TaskResource($newTask),
            'message' => 'Successfully added new task!',
            'status' => Response::HTTP_CREATED
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return response($task, Response::HTTP_OK);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json([
            'data' => new TaskResource($task),
            'message' => 'Successfully updated task!',
            'status' => Response::HTTP_ACCEPTED
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response('Task removed successfully!', Response::HTTP_NO_CONTENT);
    }
}
