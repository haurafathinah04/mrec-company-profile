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

// Projects Index (Daftar Project)
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// Blog
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

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

    // 1. Form Tambah Project (HARUS di atas route {project})
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    
    // 2. Form Edit Project
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    
    // 3. Aksi Store, Update, Destroy
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

// Projects Show Detail (HARUS DI BAWAH agar kata "create" tidak dianggap sebagai ID project)
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');