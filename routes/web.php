<?php

use App\Http\Controllers\MaterialesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('materiales/pdf',[App\Http\Controllers\MaterialesController::class,'crearPdf'])->name('materiales.pdf');
Route::resource('/materiales',MaterialesController::class);


