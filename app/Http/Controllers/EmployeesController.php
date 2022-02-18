<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function Employees() {

       return view('employees', [
           'employees' => Employees::select('*')->paginate(10)
        ]);

    }

    public function Employee(Employees $id) {

        return view('employee', [
            'employee' => $id
        ]);

    }
}
