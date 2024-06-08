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

Route::resource('services', serviceController::class);



Route::resource('besoins', besoinController::class);

Route::resource('/client', clientController::class);
Route::resource('/craftsman', craftsmanController::class);
