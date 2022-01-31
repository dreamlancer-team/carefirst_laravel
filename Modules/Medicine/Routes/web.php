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

    Route::resource('/', 'MedicineController');

    Route::resource('/brand', 'MedicineBrandController');

    Route::resource('/type', 'MedicineTypeController');

    Route::resource('/category', 'MedicineCategoryController');

    Route::resource('/template', 'MedicineTemplateController');
});
