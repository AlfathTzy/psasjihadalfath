<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutletsController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/outlets', OutletsController::class);

