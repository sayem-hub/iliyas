@extends('layouts.app')

@section('content')
    <div class="container">

        <h3 class="text-center">Employee List</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('employee.create') }}" class="btn btn-primary">Add Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Salary</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Inserted by</th>
                    <th>Updated by</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $employee->name }}</td>
                        <td><img src="{{ asset('images/employees/'.$employee->employee_image) }}" alt="Image" width="100" height="100"></td>
                        <td>{{ $employee->designation->name }}</td>
                        <td>{{ $employee->department->name }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->insertedBy->name }}</td>
                        <td>
                            {{$employee->updatedBy ? $employee->updatedBy->name : 'N/A'}}
                        </td>
                        <td>
                            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('employee.delete', $employee->id) }}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                @endforeach

                @if ($employees->isEmpty())
                    <tr>
                        <td colspan="8" class="text-center">No employees found</td>
                    </tr>
                @endif

            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $employees->links() }}
        </div>
    </div>
@endsection
