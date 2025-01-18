<?php

use App\Http\Controllers\FleurController;
use App\Http\Controllers\MundiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fleurs', [FleurController::class, 'fleursMethode']); 

