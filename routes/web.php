<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/pesan', function () {
    return view('pesan');
});
