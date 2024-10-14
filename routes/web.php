<?php

use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\TaskAssignmentController;
use App\Models\Employee;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
    Route::resource('/tasks', App\Http\Controllers\TaskController::class);
    Route::post('/task/assign', [TaskAssignmentController::class, 'store']);
    Route::delete('/task/{task}/delete', [TaskAssignmentController::class, 'delete']);
    Route::patch('/task/update', [TaskAssignmentController::class, 'update']);

    Route::get('/tasks/{task}/milestones', [MilestoneController::class, 'index'])->name('milestones.index');
    Route::post('/tasks/{task}/milestones', [MilestoneController::class, 'store'])->name('milestones.store');
    Route::delete('/milestones/{milestone}', [MilestoneController::class, 'destroy'])->name('milestones.destroy');
    Route::get('/mijn-taken', function (){
        $employee = auth()->user()->employee;
        $tasks = $employee->tasks; //
        return view('single.my-tasks', compact('tasks'));
    });

    Route::get('/calendar', function () {

        $tasksPerMonth = Task::with('employees') // Eager load employees
        ->whereNotNull('deadline')
            ->orderByRaw('MONTH(deadline), DAY(deadline)')
            ->get()
            ->groupBy(function ($task) {
                return Carbon::parse($task->deadline)->format('F Y'); // Groepeer op maand en jaar
            });

        return view('calendar.index', compact('tasksPerMonth'));
    });
});
