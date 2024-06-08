<?php

use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\besoinController;
use App\Http\Controllers\CraftsmanController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('home');
});




// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

Route::group(['middleware' => ['auth', 'role:craftsman']], function () {
    Route::resource('services', serviceController::class)->except(['show', 'index']);
});

Route::group(['middleware' => ['auth', 'role:client']], function () {
    Route::resource('besoins', besoinController::class)->except(['show', 'index']);
});

 Route::resource('/client', clientController::class);
 Route::resource('/craftsman', craftsmanController::class);
