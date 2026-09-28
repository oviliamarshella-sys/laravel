<?php

use Illuminate\Support\Facades\Route;

Route::get('/halaman', function () {
    return view('utama');
});

Route::get('/tentang', function () {
    return view('tentang');
});