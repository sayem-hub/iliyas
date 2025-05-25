@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Create Department</h3>

    <form action="{{ route('department.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Description</label>
            <textarea class="form-control" id="name" name="description" rows="3"
                placeholder="Optional"></textarea>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
