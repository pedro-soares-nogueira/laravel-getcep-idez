<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CityController::class, 'index']);


Route::get('/cidades', [CityController::class, 'gettingUf']);