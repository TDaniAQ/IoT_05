<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\EquipmenttypeController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/equipment', [EquipmentController::class, 'index'])->name('equipments');

Route::get('/equipment_types', [EquipmenttypeController::class, 'index'])->name('types');

Route::get('/facilities', [FacilityController::class, 'index'])->name('factories');

Route::get('/sensors', [SensorController::class, 'index'])->name('sensors');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


