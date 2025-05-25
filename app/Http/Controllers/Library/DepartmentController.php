<?php

namespace App\Http\Controllers\Library;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('library.department.index', compact('departments'));
    }

    public function create()
    {
        // Logic to show the form for creating a new department
        return view('library.department.create');
    }

    public function store(Request $request)
    {
        // Logic to store a new department
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description', null),
        ];
        Department::create($data);

        return redirect()->route('department.index')->with('success', 'Department created successfully.');
    }

    public function edit($id)
    {
        // Logic to show the form for editing an existing department
        return view('library.department.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing department
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        // Assuming you have a Department model
        // $department = Department::findOrFail($id);
        // $department->update($request->all());

        return redirect()->route('department.index')->with('success', 'Department updated successfully.');
    }
}
