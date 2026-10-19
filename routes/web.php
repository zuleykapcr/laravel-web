<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('home');
});

Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('/home-question-respon', function () {
    return view('home-question-respon');
})->name('home-question-respon');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
