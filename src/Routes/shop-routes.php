<?php

use Illuminate\Support\Facades\Route;
use Webkul\ServiceIT\Http\Controllers\Shop\ServiceITController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'serviceit'], function () {
    Route::get('', [ServiceITController::class, 'index'])->name('shop.serviceit.index');
});