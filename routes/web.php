<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

// Blog
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// Route Our Members mengarah ke file pages/team.blade.php
Route::get('/our-members', function () {
    return view('pages.team');
})->name('our-members');