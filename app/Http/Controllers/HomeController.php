<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = DB::table('employees')->paginate(50);
        $total_employees = Employee::all();
        $totalfte = $total_employees->sum('fte');
        $total_available_hours = $total_employees->sum('available_task_hours');

        $tasks = Task::all();
        $total_open_task_hours = $tasks->sum('hours');


        return view('home', compact('employees','total_employees','totalfte', 'total_available_hours', 'total_open_task_hours'));
    }
}
