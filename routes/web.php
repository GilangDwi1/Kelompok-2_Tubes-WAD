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
use App\Http\Controllers\KaryawanController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\StatusController;


// ROUTE LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// ROUTES WITH AUTH MIDDLEWARE
<<<<<<< HEAD
// Admin Dashboard
Route::get('/admin/dashboard', [MenuController::class, 'index'])->name('admin.dashboard');
=======
    // Admin Dashboard


Route::get('/admin/dashboard', [MenuController::class, 'index'])->name('admin.dashboard')->middleware('admin');
>>>>>>> 33485ccea547c1b36116f7b10e48ec99815ced45
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

<<<<<<< HEAD
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
=======
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
<<<<<<< HEAD

// Data Karyawan
Route::resource('karyawan', KaryawanController::class);

Route::group(['prefix' => 'karyawan', 'as' => 'karyawan.'], function () {
    Route::get('/', [KaryawanController::class, 'index'])->name('index'); // Read
    Route::get('/create', [KaryawanController::class, 'create'])->name('create'); // Create form
    Route::post('/', [KaryawanController::class, 'store'])->name('store'); // Store data
    Route::get('/{post}/edit', [KaryawanController::class, 'edit'])->name('edit'); // Edit form
    Route::put('/{post}', [KaryawanController::class, 'update'])->name('update'); // Update data
    Route::delete('/{post}', [KaryawanController::class, 'destroy'])->name('destroy'); // Delete
});
=======
>>>>>>> 33485ccea547c1b36116f7b10e48ec99815ced45
>>>>>>> e407fb8191af28c64464b38e065f500b4c3a7dbb
