<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);

Route::get('/redirectToDashboard', [AuthController::class, 'showDashboard'])
    ->name('auth.redirectToDashboard');
Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/home', function () {
    return view('dashboard.home');
});

Route::get('/patients', function () {
    return view('patients.index');
});
Route::get('/patients/add', function () {
    return view('patients.add');
});

Route::get('/consultants', function () {
    return view('consultants.index');
});
Route::get('/speciality', function () {
    return view('speciality.index');
});
Route::get('/customers', function () {
    return view('customers.index');
});
Route::get('/category', function () {
    return view('customers.category');
});

Route::get('/receptionists', function () {
    return view('receptionists.index');
});

//notification alerts example

Route::get('/common/alerts', function () {
    return view('common.alerts');
})->name('common.alerts');


//theme color selection options
Route::get('/common/theme', function () {
    return view('common.theme');
})->name('common.theme');
