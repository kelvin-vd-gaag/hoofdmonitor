<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskAssignmentController extends Controller
{
    public function store(Request $request)
    {
//        TODO: Voorkomen dat je de employee_id aan kan passen met een GUARD voor de juiste authorisatie
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'task_id' => 'required|exists:tasks,id',
        ]);

        // Haal de werknemer en taak op
        $employee = Employee::find($request->employee_id);
        $task = Task::find($request->task_id);

        //Hoeveel uur er beschikbaar is
        $assignableHours = min($task->hours, $employee->available_task_hours);

        // Als geen enkele uren toegewezen kunnen worden, geef een foutmelding
        if ($assignableHours <= 0) {
            return redirect()->back()->with('error', 'Niet genoeg beschikbare uren om deze taak toe te wijzen.');
        }

        // Verminder de uren van zowel de taak als de employee
        $employee->available_task_hours -= $assignableHours;
        $task->hours -= $assignableHours;

        // Sla de wijzigingen op
        $employee->save();
        $task->save();

        // Koppel de taak aan de werknemer en voeg de created_at timestamp aan
        $employee->tasks()->attach($task->id,['assigned_hours' => $assignableHours], ['created_at' => now(), 'updated_at' => now()]);
        return redirect()->back()->with('success', 'Taak succesvol toegewezen aan werknemer!');
    }

}
