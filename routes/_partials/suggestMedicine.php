<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuggestMedicine;

Route::prefix('suggestMedicine')
    ->group(function () {
        Route::get('/', [SuggestMedicine::class, 'index'])
            ->name('suggestMedicine.index');
        Route::post('/get-medicine/by-disease', [SuggestMedicine::class, 'getMedicineByDisease'])
            ->name('suggestMedicine.getMedicineByDisease');
    });
