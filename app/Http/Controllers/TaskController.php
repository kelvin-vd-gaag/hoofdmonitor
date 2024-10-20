<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
        $this->authorize('create', Task::class);
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {

        // Slug genereren op basis van de taaknaam
        $slug = Str::slug($request->name, '-');
        // Task aanmaken met de gegenereerde slug
        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'hours' => $request->hours,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'deadline' => $request->end_date,
            'slug' => $slug, // Voeg de slug toe
        ]);

        // Redirect na het succesvol aanmaken van de taak
        return redirect()->route('tasks.index')->with('success', 'Taak succesvol aangemaakt');
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
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->authorize('update', $task);

        // Valideer de inkomende data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'hours' => 'required|numeric|min:0',
            'deadline' => 'required|date|after_or_equal:today',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Als de validatie slaagt, de taak updaten
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->hours = $request->input('hours');
        $task->deadline = $request->input('deadline'); // Wordt opgeslagen als string in 'Y-m-d' formaat

        // Taak opslaan
        $task->save();

        // Redirect terug naar de taak met succesmelding
        return redirect()->route('tasks.show', $task->slug)->with('success', 'Taak succesvol bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $this->authorize('delete', Task::class);
        // Verwijder de taak
        $task->delete();

        // Redirect na succesvol verwijderen
        return redirect()->route('tasks.index')->with('success', 'Taak succesvol verwijderd.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $tasks = Task::where('name', 'LIKE', '%' . $query . '%')->get();

            return response()->json($tasks);
        }

        return response()->json([]);
    }

}
