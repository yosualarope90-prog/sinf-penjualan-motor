<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\MotorcycleController;

Route::resource('motorcycles', MotorcycleController::class);