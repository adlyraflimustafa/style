<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/koleksi', function () {
    return view('koleksi');
});

Route::get('/style-journal', function () {
    return view('style-journal');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/bag', function () {
    return view('bag');
});
