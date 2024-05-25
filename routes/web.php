<?php

use App\Http\Controllers\home;

use Illuminate\Support\Facades\Route;

Route::get('/', home::class);


Route::get('/principal', [home::class, 'principal']);

Route::get('/registro', [home::class, 'registro']);
Route::post('/registro', [home::class, 'guardarRegistro']);




