<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('feedback', FeedbackController::class);

Route::get('/aa', function () {
    return view('home');
})->middleware('auth');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/home', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Feedback
Route::group(['prefix' => 'feedback', 'as' => 'feedback.'], function () {
    Route::get('/', [FeedbackController::class, 'index'])->name('index'); // Read
    Route::get('/create', [FeedbackController::class, 'create'])->name('create'); // Create form
    Route::post('/', [FeedbackController::class, 'store'])->name('store'); // Store data
    Route::get('/{post}/edit', [FeedbackController::class, 'edit'])->name('edit'); // Edit form
    Route::put('/{post}', [FeedbackController::class, 'update'])->name('update'); // Update data
    Route::delete('/{post}', [FeedbackController::class, 'destroy'])->name('destroy'); // Delete
});