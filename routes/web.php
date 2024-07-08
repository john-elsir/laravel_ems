<?php

use App\Http\Controllers\EmployeeController;
use App\Models\ClinicRecord;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $employees = Employee::all();
    $clinic_records = ClinicRecord::all();

    return view('home', [
        'employees' => $employees,
        'clinic_records' => $clinic_records,
    ]);
});

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/tables2', function () {
    return view('tables2');
});

Route::get('/forms', function () {
    return view('forms');
});
