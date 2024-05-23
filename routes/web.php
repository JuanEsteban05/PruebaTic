<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DepartamentoController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('home', EmpleadoController::class);
Route::get('/homed', [App\Http\Controllers\HomedController::class, 'index'])->name('homed');
Route::resource('homed', DepartamentoController::class);