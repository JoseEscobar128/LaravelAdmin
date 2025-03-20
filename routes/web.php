<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/actors', [ActorController::class, 'index']);