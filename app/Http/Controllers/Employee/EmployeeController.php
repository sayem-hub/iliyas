<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $designations = Designation::all();
        $departments = Department::all();
        return view('employee.create', compact('designations', 'departments'));
    }

    public function store(Request $request)
    {
        // Validate and store the employee data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'address' => 'required|string|max:255',
            'designation_id' => 'required|exists:designations,id',
            'department_id' => 'nullable|exists:departments,id',
        ]);


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'salary' => $request->input('salary'),
            'address' => $request->input('address'),
            'designation_id' => $request->input('designation_id'),
            'department_id' => $request->input('department_id', null),
            'inserted_by' => Auth::id(), //Auth::id(),

        ];

        Employee::create($data);
        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        // Find the employee by ID and pass it to the edit view
        $designations = Designation::all();
        $departments = Department::all();
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee', 'designations', 'departments'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the employee data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'address' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'designation_id' => 'required|exists:designations,id',
        ]);

        $employee = Employee::find($id);


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'designation_id' => $request->input('designation_id'),
            'phone' => $request->input('phone'),
            'salary' => $request->input('salary'),
            'department_id' => $request->input('department_id'),
            'updated_by' => Auth::id(), //Auth::id(),
        ];



        $employee->update($data );
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }

}
