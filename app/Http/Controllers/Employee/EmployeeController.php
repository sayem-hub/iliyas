<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = Employee::where('id', '=', 1)->get();
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        // Validate and store the employee data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'address' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);
        // Assuming you have an Employee model
        // $employee = new Employee();

        // $employee->name = $request->input('name');
        // $employee->email = $request->input('email');
        // $employee->phone = $request->input('phone');
        // $employee->position = $request->input('position');
        // $employee->salary = $request->input('salary');
        // $employee->save();
        // Or use mass assignment if you have the fillable properties set
        // Employee::create($request->only('name', 'email', 'position'));
        // Redirect or return a response

        // $data = [
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'salary' => $request->input('salary'),
        //     'address' => $request->input('address'),
        //     'position' => $request->input('position'),
        // ];
        $data = $request->all();
        Employee::create($data);
        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the employee data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'address' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        $employee = Employee::find($id);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'position' => $request->input('position'),
            'phone' => $request->input('phone'),
            'salary' => $request->input('salary'),
        ];

        $employee->update($data );
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

}
