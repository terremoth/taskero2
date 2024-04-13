<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tasks = Task::orderBy('id', 'desc')->paginate(10);
        return view('tasks.index')->with(['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request): RedirectResponse
    {
        $model = Task::create($request->post());
        session()->flash('status', 'success');
        session()->flash('message', '<i class="fa fa-check"></i> Task ' . $model->getAttribute('id') . ' stored with success!');
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task): View
    {
        return view('tasks.edit')->with(['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
    {
        $task->update($request->post());
        session()->flash('status', 'success');
        session()->flash('message', '<i class="fa fa-check"></i> Task ' . $task->getAttribute('id') . ' updated with success!');
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        session()->flash('status', 'success');
        session()->flash('message', '<i class="fa fa-check"></i> Task ' . $task->getAttribute('id') . ' deleted with success!');
        return redirect()->back();
    }
}
