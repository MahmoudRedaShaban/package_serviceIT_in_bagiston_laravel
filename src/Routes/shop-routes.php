<?php

use Illuminate\Support\Facades\Route;
use Webkul\ServiceIT\Http\Controllers\Shop\ServiceITRequestController;
use Webkul\ServiceIT\Http\Controllers\Shop\ServiceITController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'serviceit'], function () {
    Route::get('', [ServiceITController::class, 'index'])->name('shop.serviceit.index'); // show select
    Route::get('/request/{id}', [ServiceITRequestController::class, 'store'])->name('shop.serviceit.request')->middleware(['customer']);
});
