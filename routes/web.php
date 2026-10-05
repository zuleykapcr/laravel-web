<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
Route::get('/home', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($zuleyka) {
    return 'Nama saya: '.$zuleyka;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

