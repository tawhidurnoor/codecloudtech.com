<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    //all route name has a prefix of admin.

    Route::get('/dashboard', function () {
        return view('backend.index');
    });

    Route::get('/general_information', [App\Http\Controllers\Backend\SetupController::class, 'generalInformation'])->name('setup.general.index');
    Route::put('/general_information', [App\Http\Controllers\Backend\SetupController::class, 'updateGeneralInformation'])->name('setup.general.update');

    Route::get('/meta_information', [App\Http\Controllers\Backend\SetupController::class, 'metaInformation'])->name('setup.meta.index');
    Route::put('/meta_information', [App\Http\Controllers\Backend\SetupController::class, 'updateMetaInformation'])->name('setup.meta.update');

    Route::get('/custom_scripts', [App\Http\Controllers\Backend\SetupController::class, 'customScripts'])->name('setup.custom_scripts.index');
    Route::put('/custom_scripts', [App\Http\Controllers\Backend\SetupController::class, 'updateCustomScripts'])->name('setup.custom_scripts.update');

    Route::get('/uploads/files', [App\Http\Controllers\Backend\UploadController::class, 'index'])->name('upload.index');
    Route::get('/uploads/upload', [App\Http\Controllers\Backend\UploadController::class, 'uploadIndex'])->name('upload.upload');
    Route::post('/uploads/upload', [App\Http\Controllers\Backend\UploadController::class, 'upload'])->name('upload.upload.store');
});
