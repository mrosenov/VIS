<?php

use App\Models\Employees;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'news' => News::all()
    ]);
});

Route::get('employees', function () {
    return view('employees', [
        'employees' => Employees::all()
    ]);
});

Route::get('employee/{id}', function (Employees $id) {
        return view('employee', [
            'employee' => $id
        ]);
});
