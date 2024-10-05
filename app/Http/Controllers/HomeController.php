<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

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
        $employees = Employee::all();
        $totalfte = $employees->sum('fte');
        $total_available_hours = $employees->sum('available_task_hours');
        return view('home', compact('employees', 'totalfte', 'total_available_hours'));
    }
}
