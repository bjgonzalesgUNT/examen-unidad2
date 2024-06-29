<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
})->name('');

//* AUTH
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', function () {
});

//* HOME
Route::get('/home', HomeController::class)->name('home.index');

//* SERVICES
Route::resource("/services", ServiceController::class);

//* CONTACT
Route::resource('/contacts', ContactController::class);

//* ABOUT
Route::resource('/about', AboutController::class)->only(['index']);
