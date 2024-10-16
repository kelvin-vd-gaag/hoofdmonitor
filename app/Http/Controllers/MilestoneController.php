<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Http\Requests\StoreMilestoneRequest;
use App\Http\Requests\UpdateMilestoneRequest;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Task $task)
    {
        $milestones = $task->milestones;

        // Stuur de milestones en de taak door naar de view
        return view('milestones.index', compact('milestones', 'task'));
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
    public function store(StoreMilestoneRequest $request, Task $task)
    {

        $request->validate([
            'milestones.*.name' => 'required|string|max:255',
            'milestones.*.description' => 'nullable|string',
            'milestones.*.hours' => 'required|integer',
            'milestones.*.deadline' => 'required|date',
        ]);

        foreach ($request->milestones as $milestoneData) {
            $milestoneData['deadline'] = Carbon::parse($milestoneData['deadline'])->toDateString();

            $task->milestones()->create([
                'name' => $milestoneData['name'],
                'description' => $milestoneData['description'] ?? null,
                'hours' => $milestoneData['hours'],
                'deadline' => $milestoneData['deadline'],
            ]);
        }



        return redirect()->route('tasks.show', $task->slug)->with('success', 'Mijlpaal toegevoegd.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Milestone $milestone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Milestone $milestone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMilestoneRequest $request, Milestone $milestone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milestone $milestone)
    {
        $milestone->delete();
        return back()->with('success', 'Milestone verwijderd.');
    }
}
