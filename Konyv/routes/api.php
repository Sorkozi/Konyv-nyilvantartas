<?php

use App\Http\Controllers\KonyvController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [KonyvController::class, 'index']);
Route::get('/user/{id}', [KonyvController::class,'show']);