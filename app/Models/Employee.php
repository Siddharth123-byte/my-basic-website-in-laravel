<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'table_name'; // Replace with your actual table name

    protected $fillable = [
        'Employe_name',
        'Emp_DOB',
        'Emp_fathername',
        'Emp_Address',
    ];
}
