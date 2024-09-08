<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Display the form to create a new employee
    public function create()
    {
        return view('employees.create');
    }

    // Handle the form submission to store a new employee
    public function store(Request $request)
    {
        $request->validate([
            'Employe_name' => 'required|string|max:255',
            'Emp_DOB' => 'required|string|max:255',
            'Emp_fathername' => 'required|string|max:255',
            'Emp_Address' => 'required|string|max:255',
        ]);

        Employee::create([
            'Employe_name' => $request->Employe_name,
            'Emp_DOB' => $request->Emp_DOB,
            'Emp_fathername' => $request->Emp_fathername,
            'Emp_Address' => $request->Emp_Address,
        ]);

        return redirect('/')->back()->with('success', 'Employee created successfully.');
    }

    // Display a list of employees
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Delete an employee by ID
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
