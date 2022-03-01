<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::prefix('appointment')
    ->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])
            ->name('appointment.index');
        Route::post('/store', [AppointmentController::class, 'store'])
            ->name('appointment.store');
        Route::delete('/destroy/{appointment}', [AppointmentController::class, 'destroy'])
            ->name('appointment.destroy');
    });
