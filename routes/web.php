<?php

use App\Http\Controllers\home;
use App\Http\Controllers\principal;
use Illuminate\Support\Facades\Route;

Route::get('/', home::class);


Route::get('/principal', [home::class, 'principal']);
Route::post('/principal', [home::class, 'login']);


Route::get('/registro', [home::class, 'registro']);
Route::post('/registro', [home::class, 'guardarRegistro']);

Route::get('/logout', [principal::class, 'logout'])->name('logout');


