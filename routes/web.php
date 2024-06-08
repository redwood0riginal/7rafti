<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\besoinController;
use App\Http\Controllers\CraftsmanController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('home');
});

Route::resource('besoin', besoinController::class);


Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['middleware' => ['auth', 'role:craftsman']], function () {
    Route::get('/craftsman/dashboard', [CraftsmanController::class, 'index'])->name('craftsman.dashboard');
});

Route::group(['middleware' => ['auth', 'role:client']], function () {

    Route::resource('/besoin', besoinController::class);
});

 Route::resource('/client', ClientController::class);
 Route::resource('/craftsman', craftsmanController::class);
