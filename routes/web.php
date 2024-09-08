<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;  // Include Frontend in the path
use App\Http\Controllers\EmployeeController;









Route::get('/', [IndexController::class, 'showIndex']);







// Display the form to create a new employee
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

// Store a new employee
Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');

// Display a list of employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Delete an employee by ID
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

