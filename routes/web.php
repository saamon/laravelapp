<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HelloController::class)->group(function () {
    Route::get('/hello', 'list')->name('hello.list');
});

Route::resource('books', BookController::class);
