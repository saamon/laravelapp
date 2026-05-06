<?php

namespace App\Http\Controllers;

use App\Models\Book;

class QueryController extends Controller
{
    public function where()
    {
        $books = Book::where('publisher', 'SBクリエイティブ')->get();
        return view('hello.list', ['books' => $books]);
        // Book -> select * from books;
        // get()はコレクション型(複数の値)を返す
    }
}
