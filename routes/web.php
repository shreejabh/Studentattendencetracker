<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/attendance/today', [AttendanceController::class, 'today'])->name('attendance.today');
Route::post('/attendance/today', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance/{student}', [AttendanceController::class, 'report'])->name('attendance.report');