
@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center">Welcome to Employee Management System</h1>
    <p class="text-center">This is a simple application to manage employee records.</p>
    <div class="text-center">
        <a href="{{ route('employee.index') }}" class="btn btn-primary">View Employees</a>
    </div>

</div>
@endsection
