<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KategoriController;
use App\Http\Middleware\AdminMiddleware;


// ROUTE LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// ROUTES WITH AUTH MIDDLEWARE
    // Admin Dashboard


Route::get('/admin/dashboard', [MenuController::class, 'index'])->name('admin.dashboard')->middleware('admin');
Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');

    // // Home
    // Route::get('home', [HomeController::class, 'index'])->name('home');

    // // Logout
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

// Feedback
Route::resource('feedback', FeedbackController::class);

Route::group(['prefix' => 'feedback', 'as' => 'feedback.'], function () {
    Route::get('/', [FeedbackController::class, 'index'])->name('index'); // Read
    Route::get('/create', [FeedbackController::class, 'create'])->name('create'); // Create form
    Route::post('/', [FeedbackController::class, 'store'])->name('store'); // Store data
    Route::get('/{post}/edit', [FeedbackController::class, 'edit'])->name('edit'); // Edit form
    Route::put('/{post}', [FeedbackController::class, 'update'])->name('update'); // Update data
    Route::delete('/{post}', [FeedbackController::class, 'destroy'])->name('destroy'); // Delete
});
