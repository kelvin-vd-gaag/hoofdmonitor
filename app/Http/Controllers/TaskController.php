<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('employees')->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        // Haal de taak op met bijbehorende medewerkers en gesorteerde milestones
        $task = Task::with(['employees', 'milestones' => function ($query) {
            $query->orderBy('deadline', 'asc'); // Sorteer de mijlpalen op deadline
        }])->findOrFail($task->id);

        // Haal de ingelogde medewerker op
        $employee = Employee::where('user_id', Auth::user()->id)->first();

        // Stuur de taak, medewerker en milestones naar de view
        return view('tasks.show', compact('task', 'employee'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
