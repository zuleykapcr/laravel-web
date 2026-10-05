<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('home');
});

Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');
