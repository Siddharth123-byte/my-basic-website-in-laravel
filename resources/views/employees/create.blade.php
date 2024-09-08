@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Create Employee</h3>
                                    <a  href="{{url('employees')}}" style="float: right;" class="btn btn-success">Employee Table</a>

            </div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Employe_name">Employee Name</label>
                        <input type="text" name="Employe_name" id="Employe_name" class="form-control" placeholder="Enter employee name" required>
                        @error('Employe_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Emp_DOB">Date of Birth</label>
                        <input type="date" name="Emp_DOB" id="Emp_DOB" class="form-control" required>
                        @error('Emp_DOB')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Emp_fathername">Father's Name</label>
                        <input type="text" name="Emp_fathername" id="Emp_fathername" class="form-control" placeholder="Enter father's name" required>
                        @error('Emp_fathername')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="Emp_Address">Address</label>
                        <textarea name="Emp_Address" id="Emp_Address" class="form-control" rows="3" placeholder="Enter address" required></textarea>
                        @error('Emp_Address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @endsection