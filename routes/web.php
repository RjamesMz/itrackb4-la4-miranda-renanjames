<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;



Route::get('/whoami', function () {
    return 'Renan James Z. Miranda| 2023-70705 | Block 4C | ITRACKB4 Laravel 12';
});
Route::get('/medicines/filter/{type?}', [MedicineController::class, 'filter']) -> name('medicine.filter');

Route::get('/medicines', [MedicineController::class, 'index']) -> name('medicines.index');

Route::get('/medicines/featured/{id?}', [MedicineController::class, 'show']) -> name('medicine.featured');

Route::get('/medicines/{id}', [MedicineController::class, 'show']) -> name('medicine.show');
