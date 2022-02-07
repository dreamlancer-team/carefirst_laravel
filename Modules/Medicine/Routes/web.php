<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::prefix('medicine')->group(function () {

    Route::resource('/', 'MedicineController', [
        'names' => [
            'index' => 'medicine.index',
            'store' => 'medicine.store',
            'update' => 'medicine.update',
            'destroy' => 'medicine.destroy',
        ]
    ])
        ->only([
            'index', 'store', 'update', 'destroy'
        ]);

    Route::resource('/brand', 'MedicineBrandController')->only([
        'index', 'store', 'update', 'destroy'
    ]);

    Route::resource('/type', 'MedicineTypeController')->only([
        'index', 'store', 'update', 'destroy'
    ]);

    Route::resource('/category', 'MedicineCategoryController')->only([
        'index', 'store', 'update', 'destroy'
    ]);

    Route::resource('/template', 'MedicineTemplateController')->only([
        'index', 'store', 'update', 'destroy'
    ]);
});
