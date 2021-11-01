<?php

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

Route::get('/', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration.index');
Route::get('/create/{id}', [App\Http\Controllers\RegistrationController::class, 'create'])->name('registration.create');
Route::post('/registration', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/edit/{id}', [App\Http\Controllers\RegistrationController::class, 'edit'])->name('registration.edit');
Route::put('/registration/update/{id}', [App\Http\Controllers\RegistrationController::class, 'update'])->name('registration.update');
Route::delete('/registration/destroy/{id}', [App\Http\Controllers\RegistrationController::class, 'destroy'])->name('registration.destroy');

// Route::get('/qualification/{id}', [App\Http\Controllers\QualificationController::class, 'index'])->name('qualification.index');
// Route::get('/qualification', [App\Http\Controllers\QualificationController::class, 'test'])->name('qualification.test');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Postion
Route::prefix('/position')->group(function() {
    Route::get('/', [App\Http\Controllers\PositionController::class, 'index'])->name('position.index');
    Route::get('/create', [App\Http\Controllers\PositionController::class, 'create'])->name('position.create');
    Route::post('/post', [App\Http\Controllers\PositionController::class, 'store'])->name('position.store');
});

//Qualification
Route::prefix('/qualification')->group(function() {
    Route::get('/', [App\Http\Controllers\QualificationController::class, 'index'])->name('qualification.index');
    Route::get('/create/{id}', [App\Http\Controllers\QualificationController::class, 'create'])->name('qualification.create');
    Route::post('/post/{id}', [App\Http\Controllers\QualificationController::class, 'store'])->name('qualification.store');
});

//Guest Qualification
Route::prefix('/qualification/guest')->group(function() {
    Route::get('/{id}', [App\Http\Controllers\GuestQualificationController::class, 'index'])->name('guestQualification.index');
    Route::get('/create/{id}', [App\Http\Controllers\GuestQualificationController::class, 'create'])->name('guestQualification.create');
    Route::post('/store/{id}', [App\Http\Controllers\GuestQualificationController::class, 'storeAnswer'])->name('guestQualification.store');
});
