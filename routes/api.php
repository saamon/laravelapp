<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

// GET:api/books
Route::get('/books', function () {
    $books = Book::query()
        ->latest('id')
        ->get(['id', 'isbn', 'title', 'price', 'publisher', 'published',
        ]);

    return response()->json($books);
});
