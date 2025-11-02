<?php

use App\Http\Controllers\KonyvController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/konyvek', [KonyvController::class, 'index']);
Route::get('/user/{id}', [KonyvController::class,'show']);
Route::post('/konyvek', [KonyvController::class, 'store']);
Route::get('/konyvek/kategoria/{id}', [KonyvController::class, 'byKategoria']);
Route::get('/konyvek/szerzo/{id}', [KonyvController::class, 'bySzerzo']);
Route::get('/konyvek/elerheto', [KonyvController::class, 'elerheto']);