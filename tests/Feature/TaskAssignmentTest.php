<?php

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('ontkoppelt taak van medewerker en geeft uren correct terug', function () {
    // 1. Setup: maak een medewerker en een taak aan
    $employee = Employee::factory()->create([
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'slug' => 'john-doe',
        'fte' => 1.0,
        'initial_available_task_hours' => 400,
        'available_teaching_hours' => 1200,
        'available_task_hours' => 100, // 100 uur beschikbaar
    ]);

    $task = Task::factory()->create([
        'hours' => 50, // De taak heeft oorspronkelijk 50 uur
        'name' => 'Test task',
        'slug' => 'test-task',
    ]);

    // 2. Koppel de taak aan de medewerker via de pivot table
    $employee->tasks()->attach($task->id, [
        'assigned_hours' => 30, // Medewerker claimt 30 uur
    ]);

    // Controleer of de medewerker de taak correct heeft toegewezen gekregen
    expect($employee->tasks()->first()->pivot->assigned_hours)->toBe(30);
    expect($employee->available_task_hours)->toBe(100);

    // 3. Simuleer de DELETE request om de taak te ontkoppelen
    $this->post('/task-assignments/' . $task->id . '/delete', [
        'employee_id' => $employee->id,
        'task_id' => $task->id,
    ]);

    // 4. Controleer of de taak succesvol is ontkoppeld
    expect($employee->tasks()->count())->toBe(0);

    // 5. Controleer of de uren correct zijn teruggegeven
    $employee->refresh(); // Haal de meest recente data uit de database
    $task->refresh();

    expect($employee->available_task_hours)->toBe(130); // 100 + 30 teruggegeven uren
    expect($task->hours)->toBe(80); // 50 + 30 teruggegeven uren
});
