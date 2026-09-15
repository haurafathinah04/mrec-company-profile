<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;

// Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Services
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// Projects Index
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Blog Index
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Our Members
Route::get('/our-members', function () {
    return view('pages.team');
})->name('our-members');

// Auth Routes
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::post('/login', Login::class)->middleware('guest');
Route::post('/logout', Logout::class)->middleware('auth')->name('logout');

// Admin Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/password_edit', function () {
        return view('pages.auth.password_edit');
    })->name('password.edit');

    Route::put('/password_edit', [PasswordController::class, 'update'])->name('password.update');

    // Admin Project Routes
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    // Admin Blog Routes
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::post('/blog', [BlogController::class, 'store'])->name('blogs.store');
    Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

// Project Detail & Blog Detail
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');