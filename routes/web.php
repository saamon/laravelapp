<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\RelationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HelloController::class)->group(function () {
    Route::get('/hello', 'list')->name('hello.list');
});

Route::resource('books', BookController::class);

// nameはblade側で参照(URLを書かずに使用できる)
Route::get('/query/where', [QueryController::class, 'where'])->name('query.where');
// 更新用
Route::patch('/query/update-all', [QueryController::class, 'updateAll'])->name('query.update-all');
Route::get('/trans', [QueryController::class, 'trans'])->name('query.trans');

Route::get('/relation/belong', [RelationController::class, 'belong'])->name('relation.belong');
