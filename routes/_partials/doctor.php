<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::prefix('doctor')
    ->group(function () {
        Route::get('/', [DoctorController::class, 'index'])
            ->name('doctor.index');
        Route::post('/store', [DoctorController::class, 'store'])
            ->name('doctor.store');
        Route::delete('/destroy/{doctor}', [DoctorController::class, 'destroy'])
            ->name('doctor.destroy');
    });
