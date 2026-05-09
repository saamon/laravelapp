<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\DB;
use RuntimeException;

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

    public function trans()
    {
        try {
            DB::transaction(function () {
                Book::create([
                    'isbn' => '978-4-7981-6890-4',
                    'title' => 'Book2',
                    'price' => 2000,
                    'publisher' => '翔泳社',
                    'published' => '2026-01-01',
                    'sample' => true,
                ]);
            });
        } catch (RuntimeException $e) {
            return 'ロールバックされました:' . $e->getMessage();
        }

        return '処理が完了しました';
    }
}
