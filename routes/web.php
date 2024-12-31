<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\StatusController;

// ROUTE LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// ROUTES WITH AUTH MIDDLEWARE
// Admin Dashboard
Route::get('/admin/dashboard', [MenuController::class, 'index'])->name('admin.dashboard');
Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');

// Logout
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

// ROUTE REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// ROUTE MENU MANAGEMENT
Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
    Route::get('/', [MenuController::class, 'index'])->name('index'); // Read
    Route::get('/create', [MenuController::class, 'create'])->name('create'); // Create form
    Route::post('/', [MenuController::class, 'store'])->name('store'); // Store data
    Route::get('/{post}/edit', [MenuController::class, 'edit'])->name('edit'); // Edit form
    Route::put('/{post}', [MenuController::class, 'update'])->name('update'); // Update data
    Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('destroy'); // Delete
});

// ROUTE FOR STATUS MANAGEMENT
Route::resource('status', StatusController::class)->names([
    'index' => 'status.index',
    'create' => 'status.create',
    'store' => 'status.store',
    'show' => 'status.show',
    'edit' => 'status.edit',
    'update' => 'status.update',
    'destroy' => 'status.destroy',
]);
