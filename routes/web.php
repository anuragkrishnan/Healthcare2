<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\AuthController;
use App\Http\Controllers\Master\SpecialityController;
use App\Http\Controllers\Master\ConsultantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index']);

// Route::get('/redirectToDashboard', [AuthController::class, 'showDashboard'])
//     ->name('auth.redirectToDashboard');
Route::post('/login', [AuthController::class, 'authenticate'])
    ->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dashboard/home', function () {
    return view('dashboard.home');
});

// patients Section

Route::get('/patients', function () {
    return view('patients.index');
});
Route::get('/patients/add', function () {
    return view('patients.add');
});
Route::get('/patients/search', function () {
    return view('patients.search');
});



// Route::get('/consultants', function () {
//     return view('consultants.index');
// });
Route::get('/consultants/schedule', function () {
    return view('consultants.schedule');
});
Route::get('/customers', function () {
    return view('customers.index');
});
Route::get('/category', function () {
    return view('customers.category');
});

// Speciality Section
Route::prefix('master')->group(function () {

    Route::get('/speciality', [SpecialityController::class, 'index'])
        ->name('master.specialities.index');

    Route::post('/speciality/store', [SpecialityController::class, 'store']);
    Route::get(
        '/speciality/{id}/edit',
        [SpecialityController::class, 'edit']
    );
    Route::put('/speciality/{id}', [SpecialityController::class, 'update'])
        ->name('master.specialities.update');

    Route::delete(
        '/speciality/{id}',
        [SpecialityController::class, 'destroy']
    )->name('master.specialities.destroy');
});
// Route::get('/speciality', function () {
//     return view('speciality.index');
// });

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







// Consultant Section
Route::prefix('master')->group(function () {

    Route::get('/consultants', [ConsultantController::class, 'index'])
        ->name('master.consultants.index');

    Route::post('/consultants', [ConsultantController::class, 'store'])
        ->name('master.consultants.store');

    
});

   


