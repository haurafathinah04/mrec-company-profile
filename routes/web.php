<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberController;

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

// Our Members (Publik)
Route::get('/our-members', [MemberController::class, 'showTeam'])->name('our-members');

// ==========================================
// CONTACT ROUTES (Halaman Publik & Submit Form)
// ==========================================
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

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

    // ==========================================
    // ADMIN MEMBER / OUR MEMBERS ROUTES
    // ==========================================
    Route::get('/admin/members', [MemberController::class, 'index'])->name('admin.members.index');
    Route::get('/admin/members/create', [MemberController::class, 'create'])->name('admin.members.create');
    Route::post('/admin/members', [MemberController::class, 'store'])->name('admin.members.store');
    Route::get('/admin/members/{member}/edit', [MemberController::class, 'edit'])->name('admin.members.edit');
    Route::put('/admin/members/{member}', [MemberController::class, 'update'])->name('admin.members.update');
    Route::delete('/admin/members/{member}', [MemberController::class, 'destroy'])->name('admin.members.destroy');
    Route::patch('/admin/members/{member}/move-to-alumni', [MemberController::class, 'moveToAlumni'])->name('admin.members.moveToAlumni');

    // ==========================================
    // ADMIN CONTACT ROUTES (Kelola Pesan & Info Maps/Alamat)
    // ==========================================
    Route::get('/admin/contact/messages', [ContactController::class, 'adminMessages'])->name('admin.contact.messages');
    Route::delete('/admin/contact/messages/{id}', [ContactController::class, 'destroyMessage'])->name('admin.contact.messages.destroy');
    Route::get('/admin/contact/settings', [ContactController::class, 'adminSettings'])->name('admin.contact.settings');
    Route::put('/admin/contact/settings', [ContactController::class, 'updateSettings'])->name('admin.contact.settings.update');
});

// Project Detail & Blog Detail (Wajib Paling Bawah)
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blogs.show');