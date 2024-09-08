@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3>Employee List</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Date of Birth</th>
                <th>Father's Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->Employe_name }}</td>
                <td>{{ $employee->Emp_DOB }}</td>
                <td>{{ $employee->Emp_fathername }}</td>
                <td>{{ $employee->Emp_Address }}</td>
                <td>
                    <!-- Delete Button -->
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this employee?');">
    @csrf
    @method('DELETE')
    <button type="submit" style="background: none; border: none; cursor: pointer;">
        <i class="fas fa-trash-alt" style="font-size: 18px; color: red;"></i>
    </button>
</form>


<a href="{{ url('employees/create') }}" class="btn btn-success">
    <i class="fas fa-plus"></i>
</a>
                </td>


            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No employees found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
