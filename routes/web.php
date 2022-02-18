<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\EmployeesController;
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

Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('employees', [EmployeesController::class, 'Employees'])->name('Employees');
Route::get('employee/{id}', [EmployeesController::class, 'Employee'])->name('Employee');

