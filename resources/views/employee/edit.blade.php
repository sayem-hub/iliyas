<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit</title>

    </head>

    <body>

        <div class="container">
            <h1>Edit Page</h1>

            <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>
                {{-- {{ dd($employee->desgination->name) }} --}}
                <div class="mb-3">
                    <label for="desgination_id" class="form-label">Desgination</label>
                   <select class="form-select" id="desgination_id" name="designation_id">
                    <option value="" selected>Select Designation</option>
                        @foreach ($designations as $designation)
                            <option value="{{ $designation->id }}" {{ $employee->designation_id == $designation->id ? 'selected' : '' }}>{{$designation->name }}</option>
                        @endforeach
                    </select>
                    @error('designation_id')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="mb-3">
                    <label for="department_id" class="form-label">Department</label>
                    <select class="form-select" id="department_id" name="department_id">
                        <option value="" selected>Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>{{$department->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" >
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}">
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" value="{{ $employee->salary }}" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary mt-3">Back to Employee List</a>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
