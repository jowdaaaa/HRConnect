<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('index', ['name' => 'HRConnect']);
});

Route::controller(LoginController::class)->group(function () {
    Route::view('/login', 'login');
    Route::post('/login/process', 'loginProcess');
    Route::post('/logout', 'logout');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-dashboard', 'adminDashboard');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee-dashboard', 'employeeDashboard');
});
