<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;

Route::prefix('medicine')
    ->group(function () {
        Route::get('/', [MedicineController::class, 'index'])
            ->name('medicine.index');
        Route::post('/store', [MedicineController::class, 'store'])
            ->name('medicine.store');
        Route::delete('/destroy/{medicine}', [MedicineController::class, 'destroy'])
            ->name('medicine.destroy');
    });
