<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view ('employees.index', compact('employees'));
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
    public function store(StoreEmployeeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $employee= Employee::with('tasks')->findOrFail($employee->id);
        return view ('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        // Validatie van de input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Vind de employee door id
        $employee = Employee::findOrFail($employee->id);

        // Werk de name en email bij
        $employee->name = $request->input('name');

        // Sla de wijzigingen op
        $employee->save();

        // Redirect met succesbericht
        return redirect('/mijn-profiel')->with('success', 'Gegevens succesvol bijgewerkt.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
