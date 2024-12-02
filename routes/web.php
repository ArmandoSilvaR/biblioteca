<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PrestamoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/autor', AutorController::class);
Route::resource('/editorial', EditorialController::class);
Route::resource('/seccion', SeccionController::class);
Route::resource('/articulo', ArticuloController::class);
Route::resource('/cliente', ClienteController::class);
Route::resource('/personal', PersonalController::class);
Route::resource('/prestamo', PrestamoController::class);
