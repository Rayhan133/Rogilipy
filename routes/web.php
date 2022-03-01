<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');
// Sign up
Route::prefix('signUp')->group(function () {
    Route::get('/', [LoginController::class, 'signUp'])
        ->name('signUp');
    Route::post('/signUpUser', [LoginController::class, 'signUpUser'])
        ->name('signUpUser');
});
// Sign in
Route::prefix('signIn')
    ->group(function () {
        Route::get('/', [LoginController::class, 'signIn'])
            ->name('signIn');
        Route::post('/signInUser', [LoginController::class, 'signInUser'])
            ->name('signInUser');
    });

// patientList
Route::prefix('patientList')
    ->group(function () {
        Route::get('/', [PatientController::class, 'index'])
            ->name('patientList');
    });
// doctor
require_once('_partials/doctor.php');
// Delete patient
Route::delete('users/{id}', [PatientController::class, 'destroy'])
    ->name('user.destroy');
// medicine
require_once('_partials/medicine.php');
//Appointment
require_once('_partials/appointment.php');
//Suggest Medicine
require_once('_partials/suggestMedicine.php');



Route::get('/signOut', [LoginController::class, 'signOut'])
    ->name('signOut');
