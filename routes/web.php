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

Route::get('/qualification/{id}', [App\Http\Controllers\QualificationController::class, 'index'])->name('qualification.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
