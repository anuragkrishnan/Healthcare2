<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);

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

Route::get('/doctors', function () {
    return view('doctors.index');
});

Route::get('/receptionists', function () {
    return view('receptionists.index');
});
