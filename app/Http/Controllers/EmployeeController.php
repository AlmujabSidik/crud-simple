<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->get();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $EmployeeRequest)
    {
        Employee::create($EmployeeRequest->validated());

        return redirect()->route('employee.index');
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee
        ]);
    }

    public function update(EmployeeRequest $EmployeeRequest, Employee $employee)
    {
        $employee->update($EmployeeRequest->validated());
        return redirect()->route('employee.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->where('id', $employee->id)->delete();
        return redirect()->route('employee.index');
    }
}