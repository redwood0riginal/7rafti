<?php

use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\besoinController;
use App\Http\Controllers\CraftsmanController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('home');
});




// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

Route::resource('services', serviceController::class);

Route::middleware('guest')->group(function () {
    Route::get('login', [UserController::class, 'loginForm'])->name('loginForm');
    Route::post('login', [UserController::class, 'login'])->name('login');

    Route::get('client/register-form', [ClientController::class, 'registerForm'])->name('registerForm-client');
    Route::get('craftsman/register-form', [CraftsmanController::class, 'registerForm'])->name('registerForm-craftsman');

    Route::post('craftsman/register', [CraftsmanController::class, 'register'])->name('register-craftsman');
    Route::post('client/register', [ClientController::class, 'register'])->name('register-client');



});

Route::post('logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');





Route::resource('besoins', besoinController::class);

Route::resource('/client', clientController::class);
Route::resource('/craftsman', craftsmanController::class);
