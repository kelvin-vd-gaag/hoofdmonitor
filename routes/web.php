<?php

use App\Http\Controllers\TaskAssignmentController;
use Illuminate\Support\Facades\Route;



Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
Route::resource('/tasks', App\Http\Controllers\TaskController::class);
Route::post('/task/assign', [TaskAssignmentController::class, 'store'])->middleware('auth');
