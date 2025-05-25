@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Designation List</h3>

        <div class="mb-3">
            <a href="{{ route('designation.create') }}" class="btn btn-primary">Create Designation</a>
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
                @foreach ($designations as $designation)
                    <tr>
                        <td>{{ $designation->id }}</td>
                        <td>{{ $designation->name }}</td>
                        <td>{{ $designation->description }}</td>
                        <td>
                            <a href="{{ route('designation.edit', $designation->id) }}" class="btn btn-warning">Edit</a>
                            {{-- <form action="{{ route('designation.destroy', $designation->id) }}" method="POST"
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
