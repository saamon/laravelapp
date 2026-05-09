<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function where()
    {
        $books = Book::where('publisher', 'SBクリエイティブ')->get();

        return view('hello.list', ['books' => $books]);
        // Book -> select * from books;
        // get()はコレクション型(複数の値)を返す
    }

    public function updateAll()
    {
        Book::where('publisher', 'SBクリエイティブ')
            ->update(['price' => DB::raw('price * 0.9')]);

        return to_route('books.index');
    }
}
