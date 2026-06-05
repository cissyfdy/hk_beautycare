<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkincareLokalController;
use App\Http\Controllers\SkincareHkController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/skincare', [SkincareLokalController::class, 'ambilDataProductLokal'])->name('skincare.local');
Route::get('/hk-products', [SkincareHkController::class, 'ambilDataHKBeautyCareProduct'])->name('skincare.hk');
Route::get('/skincare/{id}', [SkincareLokalController::class, 'ambilDataDetailProductLokal'])->name('skincare.detail');