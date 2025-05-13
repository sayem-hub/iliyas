<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Employee\EmployeeController;

Route::get('/', function () { return view('welcome'); })->name('home');
// Route::get('/', [DemoController::class, 'home'])->name('home');


Route::get('/employee-index', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee-create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee-store', [EmployeeController::class, 'store'])->name('employee.store');
