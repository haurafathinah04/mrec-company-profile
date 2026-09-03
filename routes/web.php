<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home'); // Gunakan titik untuk mengakses sub-folder
});