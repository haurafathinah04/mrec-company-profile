<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\PasswordController;
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

// Projects
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Blog
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// Route Our Members mengarah ke file pages/team.blade.php
Route::get('/our-members', function () {
    return view('pages.team');
})->name('our-members');

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/password_edit', function () {
        return view('pages.auth.password_edit');
    })->name('password.edit');

    Route::put('/password_edit', [PasswordController::class, 'update'])
        ->name('password.update');

    Route::get('/projects/create', [ProjectController::class, 'create'])
        ->name('projects.create');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])
        ->name('projects.edit');
    Route::post('/projects', [ProjectController::class, 'store'])
        ->name('projects.store');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])
        ->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])
        ->name('projects.destroy');
});
