<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Document</title>

    </head>

    <body>

        <div class="container">

            <h1>Employee List</h1>
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
                        <th>Designation</th>
                        <th>Salary</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($employees as $employee)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning">Edit</a>

                        </td>
                    </tr>
                    @endforeach

                    @if($employees->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center">No employees found</td>
                        </tr>
                    @endif

                </tbody>
            </table>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
