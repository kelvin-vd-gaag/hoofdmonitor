<?php

use App\Http\Controllers\TaskAssignmentController;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;



Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
Route::resource('/tasks', App\Http\Controllers\TaskController::class);
Route::post('/task/assign', [TaskAssignmentController::class, 'store'])->middleware('auth');
Route::get('/calendar', function (){

    $tasksPerMonth = Task::whereNotNull('deadline') // Filter voor taken met een deadline
    ->orderByRaw('MONTH(deadline), DAY(deadline)')  // Sorteer op maand en dag
    ->get()
        ->groupBy(function($task) {
            return Carbon::parse($task->deadline)->format('F Y'); // Groepeer op maand en jaar (bijv. Oktober 2024)
        });

   return view('calendar.index', compact('tasksPerMonth'));
});
