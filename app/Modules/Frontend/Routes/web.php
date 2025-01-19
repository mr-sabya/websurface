<?php

use App\Modules\Frontend\Http\Controllers\FrontendController;
use App\Modules\Frontend\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

// services
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');