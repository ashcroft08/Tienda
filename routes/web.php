<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('Login');
});*/

Route::get('/', [HomeController::class, 'index']);

//Registration
Route::get('/registration', [AuthController::class, 'registration'])->name('indexLogin');