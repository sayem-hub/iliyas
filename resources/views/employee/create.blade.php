@extends('layouts.app')
@section('content')
        <div class="container">
            <h3 class="text-center">Create Page</h3>

            <form action="{{ route('employee.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                    @error('name')
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
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" >
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary mt-3">Back to Employee List</a>
@endsection
