<?php

use Illuminate\Support\Facades\Route;
use Webkul\ServiceIT\Http\Controllers\Admin\ServiceITController;
use Webkul\ServiceIT\Http\Controllers\Admin\ServiceITRequestController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/serviceit'], function () {
    Route::controller(ServiceITController::class)->group(function () {
        // crud  - pigination - filters
        Route::get('', 'index')->name('admin.serviceit.index');
        Route::get('/show/{id}', 'show')->name('admin.serviceit.show');
        Route::get('/edit/{id}', 'edit')->name('admin.serviceit.edit');
        Route::put('/update/{id}', 'update')->name('admin.serviceit.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.serviceit.delete');
        Route::get('/create', 'create')->name('admin.serviceit.create');
         Route::post('/store', 'store')->name('admin.serviceit.store');
    });

    Route::prefix('/request')->controller(ServiceITRequestController::class)->group(function(){
        // crud - show fucs - filtr - pagination
        Route::get('', 'index')->name('admin.serviceitRequest.index');
        Route::get('/show/{id}', 'show')->name('admin.serviceitRequest.show');
        Route::get('/edit/{id}', 'edit')->name('admin.serviceitRequest.edit');
        Route::put('/update/{id}', 'update')->name('admin.serviceitRequest.update');
        Route::delete('/delete/{id}', 'destroy')->name('admin.serviceitRequest.delete');
    });

});
