@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Department List</h3>

        <div class="mb-3">
            <a href="{{ route('department.create') }}" class="btn btn-primary">Create Department</a>
        </div>
        <table class="table-bordered table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->description }}</td>
                        <td>
                            <a href="{{ route('department.edit', $department->id) }}" class="btn btn-warning">Edit</a>
                            {{-- <form action="{{ route('department.destroy', $department->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="mt-3">
            {{ $designations->links() }}
        </div> --}}

    </div>
@endsection
