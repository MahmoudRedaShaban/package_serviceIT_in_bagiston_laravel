<?php

use Illuminate\Support\Facades\Route;
use Webkul\ServiceIT\Http\Controllers\Admin\ServiceITController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/serviceit'], function () {
    Route::controller(ServiceITController::class)->group(function () {
        Route::get('', 'index')->name('admin.serviceit.index');
    });
});