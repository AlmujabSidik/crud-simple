<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->paginate();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.form', [
            'employee' => new Employee(),
            'page_meta' => [
                'title' => 'Create Employee',
                'method' => 'POST',
                'url' => route('employee.store'),
                'btn_text' => 'Create Employee'
            ]
        ]);
    }

    public function store(EmployeeRequest $EmployeeRequest)
    {
        Employee::create($EmployeeRequest->validated());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        $page_meta = [
        'title' => 'Edit Employee : ' . $employee->name,
        'method' => 'PUT',
        'url' => route('employee.update', $employee->id),
        'btn_text' => 'Update Employee',
    ];
        return view('employee.form', [
            'employee' => $employee,
            'page_meta' => $page_meta

        ]);
    }

    public function update(EmployeeRequest $EmployeeRequest, Employee $employee)
    {
        $employee->update($EmployeeRequest->validated());
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
