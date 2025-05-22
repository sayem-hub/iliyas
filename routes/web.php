<?php

use App\Http\Controllers\Auth\AuthController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Employee\EmployeeController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');
//Auth Routes
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/do-register', [AuthController::class, 'doRegister'])->name('do.register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/do-login', [AuthController::class, 'doLogin'])->name('do.login');


    Route::middleware(['role:user,admin,editor'])->group(function () {
        Route::get('/employee-index', [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/employee-delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');

    });

    Route::middleware(['role:editor,admin'])->group(function () {
        Route::get('/employee-create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::post('/employee-store', [EmployeeController::class, 'store'])->name('employee.store');
        Route::get('/employee-edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::post('/employee-update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    });
