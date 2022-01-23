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

use App\Http\Controllers\MedicineBrandController;
use App\Http\Controllers\MedicineTemplateController;
use App\Http\Controllers\MedicineTypeController;
use Illuminate\Support\Facades\Route;
use Modules\Medicine\Http\Controllers\MedicineCategoryController;
use Modules\Medicine\Http\Controllers\MedicineController;

Route::prefix('medicine')->group(function () {
    Route::get('/', [MedicineController::class, 'index']);
    Route::get('/create', [MedicineController::class, 'create']);

    Route::prefix('/brand')->group(function () {
        Route::get('/', [MedicineBrandController::class, 'index']);
        Route::get('/create', [MedicineBrandController::class, 'create']);
    });

    Route::prefix('/type')->group(function () {
        Route::get('/', [MedicineTypeController::class, 'index']);
        Route::get('/create', [MedicineTypeController::class, 'create']);
    });

    Route::prefix('/category')->group(function () {
        Route::get('/', [MedicineCategoryController::class, 'index']);
        Route::get('/create', [MedicineCategoryController::class, 'create']);
    });

    Route::prefix('/template')->group(function () {
        Route::get('/', [MedicineTemplateController::class, 'index']);
        Route::get('/create', [MedicineTemplateController::class, 'create']);
    });
});
