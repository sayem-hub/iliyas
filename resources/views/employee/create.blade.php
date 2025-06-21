@extends('layouts.app')
@section('content')
        <div class="container">
            <h3 class="text-center">Create Page</h3>

            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Designation</label>
                    <select class="form-select" id="name" name="designation_id">
                        <option value="">Select designation</option>
                        @foreach($designations as $designation)
                            <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                        @endforeach
                    </select>
                    @error('designation_id')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Department</label>
                    <select class="form-select" id="name" name="department_id">
                        <option value="">Select department</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" >
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" >
                </div>

                   <div class="mb-3">
                    <label for="employee_image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="employee_image" name="employee_image" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary mt-3">Back to Employee List</a>
@endsection
