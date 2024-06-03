<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('/create', [Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::post('/', [Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/edit', [Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}', [Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}', [Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');