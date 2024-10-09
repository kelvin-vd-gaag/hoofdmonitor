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

    public function update(Request $request, Task $task)
    {
        $employee = Employee::findOrFail($request->employee_id);

        // Werk de uren van de taak bij via de pivot tabel
        $employee->tasks()->updateExistingPivot($task->id, ['assigned_hours' => $request->assigned_hours]);

        return redirect()->back()->with('success', 'Taakuren succesvol bijgewerkt.');
    }

    /**
     * Verwijderen (ontkoppelen) van een taak van een medewerker
     */
    public function delete(Task $task, Request $request)
    {
        // Haal de medewerker op
        $employee = Employee::findOrFail($request->employee_id);

        // Haal de uren op die zijn toegekend aan deze medewerker voor de taak
        //TODO: In het formulier kan je uren in mindering brengen als een taak (deels) al is uitgevoerd. Onderstaande gaat echter altijd uit van de oorspronkelijke taakuren
        $assignedHours = $employee->tasks()->where('task_id', $task->id)->first()->pivot->assigned_hours;
        // Controleer of er genoeg uren zijn om terug te geven
        if ($assignedHours > 0) {
            // Verhoog de beschikbare taakuren
            $task->hours += $assignedHours;
            $task->save();

            // Verhoog de beschikbare uren van de medewerker
            $employee->available_task_hours += $assignedHours;
            $employee->save();

            // Ontkoppel de taak van de medewerker
            $employee->tasks()->detach($task->id);

            return redirect()->back()->with('success', 'Taak ' . $task->name . ' succesvol ontkoppeld en ' . $assignedHours. ' uren zijn teruggegeven.');
        } else {
            return redirect()->back()->with('error', 'Er zijn geen uren toegekend aan deze taak.');
        }

    }



}
